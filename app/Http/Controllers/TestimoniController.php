<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    //
    public function index()
    {
        return view('admin.testimoni.index', [
            'testimonis' => Testimoni::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.testimoni.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'katakata' => 'required',
            'nama' => 'required',
            'hubungan' => 'required',

            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',

        ];

        $messages = [
            'nama.required' => 'Judul wajib diisi!',
            'katakata.required' => 'Judul wajib diisi!',
            'hubungan.required' => 'Judul wajib diisi!',

            'image.required' => 'Image wajib diisi!',

        ];

        $this->validate($request, $rules, $messages);
        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/testimoni', $fileName);
        # testimoni
        $storage = "storage/content-testimoni";
        $dom = new \DOMDocument();
        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        // //desc awale
        // $dom->loadHTML($request->subjudul, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();



        testimoni::create([
            'nama' => $request->nama,
            'katakata' => $request->katakata,
            'hubungan' => $request->hubungan,

            'image' => $fileName,

        ]);

        return redirect(route('testimoni'))->with('Success', 'data berhasil di simpan');
    }

    public function edit($id)
    {
        $testimoni = testimoni::find($id);
        return view('admin.testimoni.edit', [
            'testimoni' => $testimoni
        ]);
    }


    public function update(Request $request, $id)
    {
        $testimoni = testimoni::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'nama' => 'required',
            'katakata' => 'required',
            'hubungan' => 'required',

            'image' => $fileCheck,

        ];

        $messages = [
            'nama.required' => 'Judul wajib diisi!',
            'katakata.required' => 'Judul wajib diisi!',
            'hubungan.required' => 'Judul wajib diisi!',

            'image.required' => 'Judul wajib diisi!',

        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/testimoni/' . $testimoni->image)) {
                \File::delete('storage/testimoni/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/testimoni', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // testimoni
        $storage = "storage/content-testimoni";
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

        $testimoni->update([
            'nama' => $request->nama,
            'katakata' => $request->katakata,
            'hubungan' => $request->hubungan,

            'image' => $checkFileName,

        ]);

        return redirect(route('testimoni'))->with('success', 'data berhasil di update');
    }

    public function destroy($id)
    {
        $testimoni = testimoni::find($id);
        if (\File::exists('storage/testimoni/' . $testimoni->image)) {
            \File::delete('storage/testimoni/' . $testimoni->image);
        }

        $testimoni->delete();

        return redirect(route('testimoni'))->with('success', 'Data berhasil dihapus');
    }
}
