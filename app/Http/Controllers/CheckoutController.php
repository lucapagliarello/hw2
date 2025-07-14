<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\User;
use App\Models\Cart;

class CheckoutController extends BaseController
{
    public function sessione(Request $request)
    {
        $totale = $request->input('amount');

        Stripe::setApiKey(config('services.stripe.secret'));

        $sessione = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Ordine dal sito',
                    ],
                    'unit_amount' => $totale,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => url('/success'),
            'cancel_url' => url('/cancel'),
            ]);
        
        return response()->json(['id' => $sessione->id]);
    }

    public function success(Request $request)
    {
        $userId = $request->session()->get('user_id');

        if ($userId) {
            Cart::where('user_id', $userId)->delete();
        }

        return view('ordinefatto');
    }

    public function cancel(Request $request)
    {
        return view('ordinecancellato');
    }
}