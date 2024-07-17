<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonversiController extends Controller
{
    public function index()
    {
        return view('konversi'); // Pastikan view 'konversi.blade.php' ada di folder 'resources/views'
    }
}
