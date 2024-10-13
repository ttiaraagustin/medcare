<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokterController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = [
            'title' => 'MedCare | Dokter',
            'user' => $user
        ];

        return view('pages.dokter.index', $data);
    }
}
