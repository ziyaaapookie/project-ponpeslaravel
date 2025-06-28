<?php

namespace App\Http\Controllers;

use App\Models\ProgramPendidikan;
use Illuminate\Http\Request;

class ProgramPendidikanController extends Controller
{
    //
    public function index()
    {
        return view('admin.programpendidikan.index', [
            'program_pendidikans' => ProgramPendidikan::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.programpendidikan.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'judulprogram' => 'required',
            'deskripsiprogram' => 'required',
            'tahun' => 'required',
            'jumlahsantri' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',

        ];

        $messages = [
            'tahunprogram.required' => 'Judul wajib diisi!',
            'deskripsiprogram.required' => 'Judul wajib diisi!',
            'tahun.required' => 'Judul wajib diisi!',
            'jumlahsantri.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',

        ];

        $this->validate($request, $rules, $messages);
        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/programpendidikan', $fileName);
        # programpendidikan
        $storage = "storage/content-programpendidikan";
        $dom = new \DOMDocument();
        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        // //desc awale
        // $dom->loadHTML($request->subjudul, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();



        programpendidikan::create([
            'tahun' => $request->tahun,
            'judulprogram' => $request->judulprogram,
            'deskripsiprogram' => $request->deskripsiprogram,
            'jumlahsantri' => $request->jumlahsantri,
            'image' => $fileName,

        ]);

        return redirect(route('programpendidikan'))->with('Success', 'data berhasil di simpan');
    }

    public function edit($id)
    {
        $programpendidikan = programpendidikan::find($id);
        return view('admin.programpendidikan.edit', [
            'programpendidikan' => $programpendidikan
        ]);
    }


    public function update(Request $request, $id)
    {
        $programpendidikan = programpendidikan::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'tahun' => 'required',
            'judulprogram' => 'required',
            'deskripsiprogram' => 'required',
            'jumlahsantri' => 'required',
            'image' => $fileCheck,

        ];

        $messages = [
            'deskripsiprogram.required' => 'Judul wajib diisi!',
            'judulprogram.required' => 'Judul wajib diisi!',
            'tahun.required' => 'Judul wajib diisi!',
            'jumlahsantri.required' => 'Judul wajib diisi!',
            'image.required' => 'Judul wajib diisi!',

        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/programpendidikan/' . $programpendidikan->image)) {
                \File::delete('storage/programpendidikan/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/programpendidikan', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // programpendidikan
        $storage = "storage/content-programpendidikan";
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

        $programpendidikan->update([
            'deskripsiprogram' => $request->deskripsiprogram,
            'judulprogram' => $request->judulprogram,
            'tahun' => $request->tahun,
            'jumlahsantri' => $request->jumlahsantri,
            'image' => $checkFileName,

        ]);

        return redirect(route('programpendidikan'))->with('success', 'data berhasil di update');
    }

    public function destroy($id)
    {
        $programpendidikan = programpendidikan::find($id);
        if (\File::exists('storage/programpendidikan/' . $programpendidikan->image)) {
            \File::delete('storage/programpendidikan/' . $programpendidikan->image);
        }

        $programpendidikan->delete();

        return redirect(route('programpendidikan'))->with('success', 'Data berhasil dihapus');
    }
}
