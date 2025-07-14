<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Product;

class ProfiloController extends BaseController
{
    public function FetchProdotti(Request $request)
    {
        $userId = $request->session()->get('user_id');

        if (!$userId) {
            return redirect('login');
        }

        $products = Product::where('user_id', $userId)
            ->orderByDesc('id')
            ->limit(10)
            ->select('id', 'title', 'snippet', 'price', 'thumbnail')
            ->get();

        return response()->json($products);
    }
}