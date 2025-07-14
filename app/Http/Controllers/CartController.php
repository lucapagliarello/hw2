<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;

class CartController extends BaseController
{
    public function addToCart(Request $request)
    {
        $userId = session('user_id');
        if (!$userId) {
            return response()->json(['ok' => false, 'error' => 'Utente non autenticato']);
        }

        $title = $request->input('title');
        $snippet = $request->input('snippet');
        $price = $request->input('price');
        $thumbnail = $request->input('thumbnail');

        // Controlla duplicato: lo stesso prodotto già nel carrello per lo stesso utente
        $exists = Cart::where('user_id', $userId)->where('title', $title)->exists();
        if ($exists) {
            return response()->json(['ok' => true, 'message' => 'Prodotto già nel carrello']);
        }

        // Crea nuova voce nel carrello
        $item = Cart::create([
            'user_id' => $userId,
            'title' => $title,
            'snippet' => $snippet,
            'price' => $price,
            'thumbnail' => $thumbnail,
        ]);

        return response()->json(['ok' => true, 'id' => $item->id]);
    }

    public function FetchCarrello(Request $request)
    {
        $userId = $request->session()->get('user_id');

        if (!$userId) {
            return redirect('login');
        }

        $cart = Cart::where('user_id', $userId)
            ->select('id', 'title', 'snippet', 'price', 'thumbnail')
            ->get();

        return response()->json($cart);
    }

    public function rimuoviElemento(Request $request)
    {
        $userId = $request->session()->get('user_id');

        if (!$userId) {
            return redirect('/login')->with('error', 'Devi essere loggato per entrare nel carrello.');
        }

        $id = $request->input('id');

        $elemento = Cart::where('id', $id)
            ->where('user_id', $userId)
            ->delete();

        if ($elemento) {
            return response()->json(['ok' => true]);
        } else {
            return response()->json(['ok' => false, 'error' => 'Nessuna riga corrispondente trovata']);
        }
    }
}
