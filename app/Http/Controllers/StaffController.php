<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller


{
    //
    public function index()
    {
        return view('admin.staff.index', [
            'staffs' => Staff::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.staff.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'jabatan' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',

        ];

        $messages = [
            'nama.required' => 'Judul wajib diisi!',
            'jabatan.required' => 'Judul wajib diisi!',

            'image.required' => 'Image wajib diisi!',

        ];

        $this->validate($request, $rules, $messages);
        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/staff', $fileName);
        # staff
        $storage = "storage/content-staff";
        $dom = new \DOMDocument();
        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        // //desc awale
        // $dom->loadHTML($request->subjudul, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();



        staff::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,

            'image' => $fileName,

        ]);

        return redirect(route('staff'))->with('Success', 'data berhasil di simpan');
    }

    public function edit($id)
    {
        $staff = staff::find($id);
        return view('admin.staff.edit', [
            'staff' => $staff
        ]);
    }


    public function update(Request $request, $id)
    {
        $staff = staff::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'nama' => 'required',
            'jabatan' => 'required',

            'image' => $fileCheck,

        ];

        $messages = [
            'nama.required' => 'Judul wajib diisi!',
            'jabatan.required' => 'Judul wajib diisi!',

            'image.required' => 'Judul wajib diisi!',

        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/staff/' . $staff->image)) {
                \File::delete('storage/staff/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/staff', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // staff
        $storage = "storage/content-staff";
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

        $staff->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,

            'image' => $checkFileName,

        ]);

        return redirect(route('staff'))->with('success', 'data berhasil di update');
    }

    public function destroy($id)
    {
        $staff = staff::find($id);
        if (\File::exists('storage/staff/' . $staff->image)) {
            \File::delete('storage/staff/' . $staff->image);
        }

        $staff->delete();

        return redirect(route('staff'))->with('success', 'Data berhasil dihapus');
    }
}
