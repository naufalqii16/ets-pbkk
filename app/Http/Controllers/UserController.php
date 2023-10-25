<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only([
            'dashboard',
            'edit',
            'editPost',
            'delete',
            'deletePost',
        ]);
    }

    public function login() {
        return view('user.login');
    }

    public function dashboard() {
        return view('user.dashboard');
    }


    public function loginPost(Request $request) {
        $validated = $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Please enter your email',
                'password.required' => 'Please enter your password',
            ]
        );

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            Session::flash('message-success', 'Logged in successfully');
            return Redirect::intended(route('user.dashboard'));
        }

        return Redirect::back()->withErrors(
            [
                'email,password' => 'Invalid email or password',
            ]
        )->onlyInput('email');
    }

    // membuat fungsi untuk menginputkan rekam medis
    public function input() {
        return view('rekam_medis.input');
    }

    // membuat fungsi untuk menyimpan rekam medis



}
