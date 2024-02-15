<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataArsip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Add this line

use Carbon\Carbon;

  
class HomeController extends Controller
{
    public function index()
    {
        $dataArsip = DB::table('data_arsip')->orderByDesc('created_at')->get();
        $jk = DB::table('users')->get('gender');
        $total_cases = DB::table('data_arsip')->distinct()->count('perkara');
        $total_file = DB::table('data_arsip')->count('kode');
        $total_locus = DB::table('data_arsip')->distinct()->count('locus');
        $total_dik = DB::table('data_arsip')->distinct()->pluck('rak')->toArray();

        $total_locus_values = DB::table('data_arsip')->distinct();

        return view('home/home', [
            'dataArsip' => $dataArsip,
            'total_file' => $total_file, 
            'jk' => $jk, 
            'total_cases' => $total_cases,
            'total_locus' => $total_locus,
            'total_locus_values' => $total_locus_values,
            'total_dik' => $total_dik
        ]); // Pass the variable to the view
        
    }

    
}