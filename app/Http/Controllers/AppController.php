<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Artikel;
use App\Models\Galeri;
use App\Models\ProgramPendidikan;
use App\Models\Staff;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class AppController extends Controller
{
    //

    public function index()
    {
        return view('welcome', [
            'artikels' => Artikel::orderBy('id', 'desc')->get(),
            'program_pendidikans' => ProgramPendidikan::orderBy('id', 'desc')->get(),
            'galeris' => Galeri::orderBy('id', 'desc')->get(),
            'agendas' => Agenda::orderBy('id', 'desc')->get(),
            'staff' => Staff::orderBy('id', 'desc')->get(),
            'testimonis' => Testimoni::orderBy('id', 'desc')->get(),
        ]);
    }
}
