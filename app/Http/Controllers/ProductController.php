<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends BaseController
{
    // Salva prodotto nei preferiti
    public function saveProduct(Request $request)
    {
        $userId = session('user_id');
        if (!$userId) {
            return response()->json(['ok' => false, 'error' => 'Utente non autenticato']);
        }

        $title = $request->input('title');
        $snippet = $request->input('snippet');
        $price = $request->input('price');
        $thumbnail = $request->input('thumbnail');

        // Verifica duplicato
        $exists = Product::where('user_id', $userId)->where('title', $title)->exists();
        if ($exists) {
            return response()->json(['ok' => true, 'message' => 'Già salvato']);
        }

        $item = Product::create([
            'user_id' => $userId,
            'title' => $title,
            'snippet' => $snippet,
            'price' => $price,
            'thumbnail' => $thumbnail,
        ]);

        return response()->json(['ok' => true, 'id' => $item->id]);
    }
}