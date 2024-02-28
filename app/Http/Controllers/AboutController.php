<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $nim = '2241720082';
        $name = 'Raffy Jamil Octavialdy';
        return 'Nim: ' . $nim . ', Nama: ' . $name;
    }
}
