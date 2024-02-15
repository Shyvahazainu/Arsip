<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Models\DataArsip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{

    public function showDataPenyidikan()
    {
        $name = DB::table('users')->get('name');

        $dataArsip = DB::table('data_arsip')
        ->orderByDesc('created_at')
        ->where('bidang', 'LIKE', 'penyidikan')
        ->paginate(5);
        $total_locus_values = DB::table('data_arsip')->distinct()->pluck('locus')->toArray();


        return view('nav.penyidikan', [
            'name'=> $name,
            'dataArsip' => $dataArsip, 
            'total_locus_values' => $total_locus_values
        ]);
    }
    public function showDataPenuntutan()
    {
        $name = DB::table('users')->get('name');
        $created_at = DB::table('data_arsip')->get('created_at')->toArray();
        $dataArsip = DB::table('data_arsip')        
        ->where('bidang', 'LIKE', 'penuntutan')
        ->paginate(5);
        $total_locus_values = DB::table('data_arsip')->distinct()->pluck('locus')->toArray();
        sort($created_at);


        return view('nav.penuntutan', [
            'dataArsip' => $dataArsip,             
            'name'=> $name,

            'total_locus_values' => $total_locus_values
        ]);
    }

    public function upload(){
        $total_locus_values = DB::table('data_arsip')->distinct()->pluck('locus')->toArray();

        return view ('home.upload',
    [

        'total_locus_values' => $total_locus_values]);
    }

    public function uploading(Request $request)
{

    $user = Auth::user();

    $data = [
        'pengupload' => $user->name,
        'bidang' => $request->input('bidang'),
        'dok' => $request->input('dokumen'), // Updated from 'dok' to 'dokumen'
        'perkara' => $request->input('perkara'),
        'locus' => $request->input('locus'),
        'tahun' => $request->input('tahun'),
        'file' => $request->file('file') ? $request->file('file')->store('uploads', 'public') : null,
        'jenis_file' => $request->input('jenis_file'),
    ];

    // Validate the file
    $request->validate([
        'file' => 'nullable|mimes:pdf,xlsx,jpg|max:2048',
    ]);

    // Create a new record in the 'data_arsip' table
    DataArsip::create($data);

    // Redirect or respond as needed
    return redirect()->route('home', )->with('success', 'Data uploaded successfully');
}


}
