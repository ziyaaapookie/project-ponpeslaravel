<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    //
    public function index()
    {
        return view('admin.galeri.index', [
            'galeris' => Galeri::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $rules = [

            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',

        ];

        $messages = [

            'image.required' => 'Image wajib diisi!',

        ];

        $this->validate($request, $rules, $messages);
        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/galeri', $fileName);
        # galeri
        $storage = "storage/content-galeri";
        $dom = new \DOMDocument();
        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        // //desc awale
        // $dom->loadHTML($request->subjudul, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();



        galeri::create([

            'image' => $fileName,

        ]);

        return redirect(route('galeri'))->with('Success', 'data berhasil di simpan');
    }

    public function edit($id)
    {
        $galeri = galeri::find($id);
        return view('admin.galeri.edit', [
            'galeri' => $galeri
        ]);
    }


    public function update(Request $request, $id)
    {
        $galeri = galeri::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [

            'image' => $fileCheck,

        ];

        $messages = [

            'image.required' => 'Judul wajib diisi!',

        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/galeri/' . $galeri->image)) {
                \File::delete('storage/galeri/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/galeri', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // galeri
        $storage = "storage/content-galeri";
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

        $galeri->update([

            'image' => $checkFileName,

        ]);

        return redirect(route('galeri'))->with('success', 'data berhasil di update');
    }

    public function destroy($id)
    {
        $galeri = galeri::find($id);
        if (\File::exists('storage/galeri/' . $galeri->image)) {
            \File::delete('storage/galeri/' . $galeri->image);
        }

        $galeri->delete();

        return redirect(route('galeri'))->with('success', 'Data berhasil dihapus');
    }
}
