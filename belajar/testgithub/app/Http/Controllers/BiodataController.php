<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
    $namaLengkap = "kalananti";
        $nim = "2105";

        return $namaLengkap . ", dengan " . $nim;
    }
}
