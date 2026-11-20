<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Veyrani Aisyah';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}