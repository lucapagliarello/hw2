<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Recensione;

class RecensioniController extends BaseController
{
    public function aggiungiRecensione(Request $request)
    {
        $userId = $request->session()->get('user_id');

        if (!$userId) {
            return redirect('/login')->with('error', 'Devi essere loggato per inviare una recensione.');
        }

        $user = User::find($userId);

        if (!$user) {
            return redirect()->back()->with('error', 'Utente non trovato.');
        }

        $qualita = (int) $request->input('qualita');
        $spedizione = (int) $request->input('spedizione');
        $assistenza = (int) $request->input('assistenza');
        $commento = trim($request->input('commento'));

        if (
            !$qualita || $qualita < 1 || $qualita > 5 ||
            !$spedizione || $spedizione < 1 || $spedizione > 5 ||
            !$assistenza || $assistenza < 1 || $assistenza > 5 ||
            empty($commento)
        ) {
            return redirect()->back()->with('error', 'Compila tutti i campi correttamente.');
        }

        Recensione::create([
            'username' => $user->username,
            'qualita' => $qualita,
            'spedizione' => $spedizione,
            'assistenza' => $assistenza,
            'commento' => $commento,
        ]);

        return redirect()->back()->with('success', 'Recensione inviata con successo.');
    }

}