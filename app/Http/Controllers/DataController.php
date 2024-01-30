<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{

    public function showDataPenyidikan()
    {
        $dataArsip = DB::table('data_arsip')
        ->where('bidang', 'LIKE', 'penyidikan')
        ->paginate(5);
        $total_locus_values = DB::table('data_arsip')->distinct()->pluck('locus')->toArray();

        sort($total_locus_values);

        return view('nav.penyidikan', [
            'dataArsip' => $dataArsip, 
            'total_locus_values' => $total_locus_values
        ]);
    }
    public function showDataPenuntutan()
    {
        $dataArsip = DB::table('data_arsip')
        ->where('bidang', 'LIKE', 'penuntutan')
        ->paginate(5);
        $total_locus_values = DB::table('data_arsip')->distinct()->pluck('locus')->toArray();
        sort($total_locus_values);


        return view('nav.penuntutan', [
            'dataArsip' => $dataArsip, 
            'total_locus_values' => $total_locus_values
        ]);
    }
}
