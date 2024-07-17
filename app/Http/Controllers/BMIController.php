<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function index()
    {
        return view('bmi'); // Pastikan view 'bmi.blade.php' ada di folder 'resources/views'
    }
}
