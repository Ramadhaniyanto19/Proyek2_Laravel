<?php

namespace App\Http\Controllers;

use App\Models\Alam;
use App\Models\Cafe;
use App\Models\Taman;
use App\Models\Edukasi;
use App\Models\Angkringan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{
    public function index(){
    return view ('dashboard.dashboard', [
            'tittle' => 'Halaman Dashboard',
            'jmlalam' => Alam::all()->count(),
            'jmledukasi' => Edukasi::all()->count(),
            'jmlangkringan' => Angkringan::all()->count(),
            'jmltaman' => Taman::all()->count(),
            'jmlcafe' => Cafe::all()->count(),
            'jmlpengunjung' => User::where('is_admin', '0')->count()
        ]);
    }
}
