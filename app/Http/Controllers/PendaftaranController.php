<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function DaftarPelayanan()
    {
        $menu = "Daftar Pelayanan";
        return view('pendaftaran.index',compact([
            'menu'
        ]));
    }
}
