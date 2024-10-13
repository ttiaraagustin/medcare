<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'MedCare | Admin',
            'users'     =>  User::count(),
            'pasiens'   =>  Pasien::count(),
            'obats'     =>  Obat::count(),
            'admins'    =>  User::where('level', 'ADMIN')->count(),
            'dokters'   =>  User::where('level', 'DOKTER')->count(),
        ];

        return view('pages.admin.index', $data);
    }
}
