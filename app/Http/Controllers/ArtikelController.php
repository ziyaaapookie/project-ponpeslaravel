<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    //
    public function index()
    {
        return view('admin.artikel.index', [
            'artikels' => Artikel::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'kategoriartikel' => 'required',
            'judulartikel' => 'required',
            'deskripsi' => 'required',
            'namapembuat' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',

        ];

        $messages = [
            'judulartikel.required' => 'Judul wajib diisi!',
            'kategoriartikel.required' => 'Judul wajib diisi!',
            'deskripsi.required' => 'Judul wajib diisi!',
            'namapembuat.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',

        ];

        $this->validate($request, $rules, $messages);
        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/artikel', $fileName);
        # Artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();
        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        // //desc awale
        // $dom->loadHTML($request->subjudul, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();



        artikel::create([
            'judulartikel' => $request->judulartikel,
            'kategoriartikel' => $request->kategoriartikel,
            'deskripsi' => $request->deskripsi,
            'namapembuat' => $request->namapembuat,
            'image' => $fileName,

        ]);

        return redirect(route('artikel'))->with('Success', 'data berhasil di simpan');
    }

    public function edit($id)
    {
        $artikel = artikel::find($id);
        return view('admin.artikel.edit', [
            'artikel' => $artikel
        ]);
    }


    public function update(Request $request, $id)
    {
        $artikel = artikel::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judulartikel' => 'required',
            'kategoriartikel' => 'required',
            'deskripsi' => 'required',
            'namapembuat' => 'required',
            'image' => $fileCheck,

        ];

        $messages = [
            'judulartikel.required' => 'Judul wajib diisi!',
            'kategoriartikel.required' => 'Judul wajib diisi!',
            'deskripsi.required' => 'Judul wajib diisi!',
            'namapembuat.required' => 'Judul wajib diisi!',
            'image.required' => 'Judul wajib diisi!',

        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/artikel/' . $artikel->image)) {
                \File::delete('storage/artikel/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/artikel', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // Artikel
        $storage = "storage/content-artikel";
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

        $artikel->update([
            'judulartikel' => $request->judulartikel,
            'kategoriartikel' => $request->kategoriartikel,
            'deskripsi' => $request->deskripsi,
            'namapembuat' => $request->namapembuat,
            'image' => $checkFileName,

        ]);

        return redirect(route('artikel'))->with('success', 'data berhasil di update');
    }

    public function destroy($id)
    {
        $artikel = artikel::find($id);
        if (\File::exists('storage/artikel/' . $artikel->image)) {
            \File::delete('storage/artikel/' . $artikel->image);
        }

        $artikel->delete();

        return redirect(route('artikel'))->with('success', 'Data berhasil dihapus');
    }
}
