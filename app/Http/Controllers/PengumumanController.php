<?php

namespace App\Http\Controllers;

use App\Models\SantriVerifiedUjian;
use Illuminate\Support\Facades\DB;

class PengumumanController extends Controller
{
    public function index()
    {
        return view('pengumuman');
    }

    public function indexKelulusan()
    {
        $ujianSubQuery = SantriVerifiedUjian::select(DB::raw('MAX(id) as id'))
            ->groupBy('santri_id');

        $students = SantriVerifiedUjian::whereIn('id', $ujianSubQuery)
            ->where('panitia_done', '1')
            ->where('penguji_done', '1')
            ->get();

        return view('pengumuman-kelulusan', compact('students'));
    }

}
