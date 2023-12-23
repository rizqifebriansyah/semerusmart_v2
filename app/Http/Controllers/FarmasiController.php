<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmasiController extends Controller
{
    public function Layananresep()
    {
        $menu = "Layanan Resep";
        return view('farmasi.index',compact([
            'menu'
        ]));
    }
}
