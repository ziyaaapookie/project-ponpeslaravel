<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Agenda extends Controller
{
    //
    public function index()
    {
        return view('admin.agenda.index', [
            'agendas' => Agenda::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.agenda.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'waktutanggal' => 'required',
            'namakegiatan' => 'required',
            'jam' => 'required',
            'tempat' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',

        ];

        $messages = [
            'waktutanggal.required' => 'Judul wajib diisi!',
            'namakegiatan.required' => 'Judul wajib diisi!',
            'jam.required' => 'Judul wajib diisi!',
            'tempat.required' => 'Judul wajib diisi!',
            'deskripsi.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',

        ];

        $this->validate($request, $rules, $messages);
        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/agenda', $fileName);
        # agenda
        $storage = "storage/content-agenda";
        $dom = new \DOMDocument();
        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        // //desc awale
        // $dom->loadHTML($request->subjudul, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();



        agenda::create([
            'waktutanggal' => $request->waktutanggal,
            'namakegiatan' => $request->waktutanggal,
            'jam' => $request->jam,
            'tempat' => $request->tempat,
            'deskripsi' => $request->deskripsi,
            'image' => $fileName,

        ]);

        return redirect(route('agenda'))->with('Success', 'data berhasil di simpan');
    }

    public function edit($id)
    {
        $agenda = agenda::find($id);
        return view('admin.agenda.edit', [
            'agenda' => $agenda
        ]);
    }


    public function update(Request $request, $id)
    {
        $agenda = agenda::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'waktutanggal' => 'required',
            'namakegiatan' => 'required',
            'jam' => 'required',
            'tempat' => 'required',
            'deskripsi' => 'deskripsi',
            'image' => $fileCheck,

        ];

        $messages = [
            'waktutanggal.required' => 'Judul wajib diisi!',
            'namakegiatan.required' => 'Judul wajib diisi!',
            'jam.required' => 'Judul wajib diisi!',
            'tempat.required' => 'Judul wajib diisi!',
            'image.required' => 'Judul wajib diisi!',

        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/agenda/' . $agenda->image)) {
                \File::delete('storage/agenda/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/agenda', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // agenda
        $storage = "storage/content-agenda";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);

        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1200, 1200)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        $agenda->update([
            'waktutanggal' => $request->waktutanggal,
            'namakegiatan' => $request->waktutanggal,
            'jam' => $request->jam,
            'tempat' => $request->tempat,
            'deskripsi' => $request->deskripsi,
            'image' => $checkFileName,

        ]);

        return redirect(route('agenda'))->with('success', 'data berhasil di update');
    }

    public function destroy($id)
    {
        $agenda = agenda::find($id);
        if (\File::exists('storage/agenda/' . $agenda->image)) {
            \File::delete('storage/agenda/' . $agenda->image);
        }

        $agenda->delete();

        return redirect(route('agenda'))->with('success', 'Data berhasil dihapus');
    }
}
