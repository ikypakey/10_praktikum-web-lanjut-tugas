<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class ViewController extends Controller
{
    public function view(){
        return view ('mahasiswa.view',['Mahasiswa' => Mahasiswa::take(3)->get()
    ]);
    }
}
