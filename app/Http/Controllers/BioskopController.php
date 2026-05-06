<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioskopController extends Controller
{
    public function index()
    {
        $bioskops = [
            [
                'nama' => 'Suzuya Tanjung Morawa XXI',
                'alamat' => 'Jl. Medan - Lubuk Pakam KM 17, Deli Serdang',
                'telp' => '(061) 79740330',
                'tipe' => 'XXI'
            ],
            [
                'nama' => 'Thamrin XXI',
                'alamat' => 'Jl. MH Thamrin No.75, Medan',
                'telp' => '(061) 7366855',
                'tipe' => 'XXI'
            ],
            [
                'nama' => 'Cambridge City Square XXI',
                'alamat' => 'Jl. S. Parman No.217, Medan',
                'telp' => '(061) 88815121',
                'tipe' => 'XXI'
            ],
            [
                'nama' => 'Centre Point XXI',
                'alamat' => 'Jl. Jawa No.8, Medan',
                'telp' => '(061) 80510321',
                'tipe' => 'XXI'
            ],
            [
                'nama' => 'Delipark XXI',
                'alamat' => 'Jl. Guru Patimpus, Medan',
                'telp' => '(061) 62007774',
                'tipe' => 'XXI'
            ],
            [
                'nama' => 'Hermes XXI',
                'alamat' => 'Jl. Monginsidi No.45, Medan',
                'telp' => '(061) 80501121',
                'tipe' => 'XXI'
            ],
            [
                'nama' => 'Manhattan XXI',
                'alamat' => 'Jl. Gatot Subroto No.217, Medan',
                'telp' => '(061) 80867821',
                'tipe' => 'XXI'
            ],
            [
                'nama' => 'Millennium XXI',
                'alamat' => 'Jl. Kapten Muslim No.111, Medan',
                'telp' => '(061) 80867221',
                'tipe' => 'XXI'
            ],
            [
                'nama' => 'Ringroad Citywalks XXI',
                'alamat' => 'Jl. Gagak Hitam No.28, Medan',
                'telp' => '(061) 80026553',
                'tipe' => 'XXI'
            ],
            [
                'nama' => 'Suzuya Plaza XXI',
                'alamat' => 'Jl. Marelan Raya No.207, Medan',
                'telp' => '(061) 88810788',
                'tipe' => 'XXI'
            ],
        ];

        return view('bioskop.index', compact('bioskops'));
    }
}