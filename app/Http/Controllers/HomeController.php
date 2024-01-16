<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Add this line

use Carbon\Carbon;

  
class HomeController extends Controller
{
    public function index()
    {

        return view('home');
    }

    public function home_admin()
    {
        $total_cases = DB::table('data_arsip')->count('perkara');
        return view('home/home-admin', ['total_cases' => $total_cases]); // Pass the variable to the view
        
    }

    public function home_user()
    {
        $total_cases = DB::table('data_arsip')->count('perkara');
        return view('home/home-user', ['total_cases' => $total_cases]);
    }

    
}