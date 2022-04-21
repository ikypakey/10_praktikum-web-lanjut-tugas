<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa_matakuliah;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use PDF;

class nilaiController extends Controller
{
    public function nilai(Mahasiswa $mahasiswa){

        $Mahasiswa = Mahasiswa::where('nim', $mahasiswa -> nim) -> first();
        // ddd($Mahasiswa -> matakuliah);
        
        return view('mahasiswa.detailNilai', [
            'mhs' => $Mahasiswa
        ]);
    }
    public function pdf(Mahasiswa $mahasiswa)
    {
        $mhs = $mahasiswa;
        $pdf = PDF::loadview('mahasiswa.export', compact('mhs'));
        return $pdf->stream();
    }
}
