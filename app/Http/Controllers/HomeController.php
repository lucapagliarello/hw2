<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Recensione;
use App\Models\Cart;

class HomeController extends BaseController
{
    public function home()
    {
        if(!Session::get('user_id')) {
            return redirect('login');
        }
        return view('home');
    }

    public function profilo(Request $request)
    {
        // Prendo l'user_id dalla sessione
        $userId = $request->session()->get('user_id');

        if (!$userId) {
            return redirect('login');
        }

        $user = User::find($userId);

        // Passo i dati utente alla view 'profile'
        return view('profilo', ['user' => $user]);
    }

    public function recensioni(Request $request)
    {
        $userId = $request->session()->get('user_id');

        if (!$userId) {
            return redirect('login');
        }

        $user = User::find($userId);

        // Recupera le recensioni ordinate per data
        $recensioni = Recensione::orderBy('data', 'desc')->get();

        return view('recensioni', [
            'user' => $user,
            'recensioni' => $recensioni,
        ]);
    }

    public function carrello(Request $request)
    {
        $userId = $request->session()->get('user_id');

        if (!$userId) {
            return redirect('login');
        }

        $user = User::find($userId);

        // Passo i dati utente alla view 'profile'
        return view('carrello', ['user' => $user]);
    }

}
