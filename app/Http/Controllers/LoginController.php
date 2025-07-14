<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends BaseController
{
    public function login_form()
    {
        if (Session::get('user_id')) {
            return redirect('home');
        }

        $error = Session::get('error');
        Session::forget('error');
        return view('login')->with('error', $error);
    }

    public function do_login()
    {
        if (Session::get('user_id')) {
            return redirect('home');
        }

        // Prendo i dati del form
        $username = request('username');
        $password = request('password');

        if(strlen($username) == 0 || strlen($password) == 0)
        {
            Session::put('error', 'empty_fields');
            return redirect('login');
        }
        $user = User::where('username', $username)->first();
        if(!$user || !password_verify($password, $user->password))
        {
            Session::put('error', 'wrong');
            return redirect('login');
        }

        Session::put('user_id', $user->id);
        return redirect('home');
    }


    public function register_form()
    {
        if (Session::get('user_id')) {
            return redirect('home');
        }

        $error = Session::get('error');
        Session::forget('error');
        return view('register')->with('error', $error);
    }

    public function do_register()
    {
        if (Session::get('user_id')) {
            return redirect('home');
        }

        // Prendo i dati del form
        $username = request('username');
        $password = request('password');
        $confirm = request('conferma');
        $email = request('email');
        $name = request('name');
        $surname = request('surname');
        $allow = request('allow');

        // Validazioni manuali come nel file PHP originale
        if (!$username || !$password || !$confirm || !$email || !$name || !$surname || !$allow) {
            Session::put('error', 'empty_fields');
            return redirect('register');
        }

        if (!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $username)) {
            Session::put('error', 'invalid_username');
            return redirect('register');
        }

        if (strlen($password) < 8) {
            Session::put('error', 'short_password');
            return redirect('register');
        }

        if ($password !== $confirm) {
            Session::put('error', 'bad_passwords');
            return redirect('register');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            Session::put('error', 'invalid_email');
            return redirect('register');
        }

        // Controlli su DB
        if (User::where('username', $username)->first()) {
            Session::put('error', 'existing_username');
            return redirect('register');
        }

        if (User::where('email', $email)->first()) {
            Session::put('error', 'existing_email');
            return redirect('register');
        }

        // Registrazione
        $user = new User;
        $user->username = $username;
        $user->password = password_hash($password, PASSWORD_BCRYPT);
        $user->email = strtolower($email);
        $user->name = $name;
        $user->surname = $surname;
        $user->save();

        Session::put('user_id', $user->id);
        return redirect('home');
    }

    public function logout()
    {
        Session::flush();
        return redirect('login');    
    }
}
