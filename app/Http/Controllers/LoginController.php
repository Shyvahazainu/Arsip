<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    // Change the method name to match the route definition
    public function login()
    {
        if (Auth::check()) {
            return $this->redirectHome();
        } else {
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'nip' => $request->input('nip'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            // Check user level after successful login
            $user = Auth::user();
                // Handle other levels as needed
                return $this->redirectHome();
        } else {
            Session::flash('error', 'NIP atau Password Salah');
            return redirect('/');
        }
    }

    protected function redirectHome()
    {
        // Get the authenticated user
        $user = Auth::user();
            // Handle other levels as needed
            return redirect('home');
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
