<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class SearchController extends BaseController
{
    public function search(Request $request){
        //controllo dell'accesso
        if(!Session::get('user_id')) {
            return redirect('login');
        }

        //Ricerca tramite API di GoogleShopping
        $q = $request->query('q');
        $q = trim($q);

        if (empty($q)) {
            return response()->json(['shopping_results' => []]);
        }

        $api_key = '66cc39a6d9fa6b32eeb43df3e4a04c254d541982277a0477ef9a6f9661a640ef';
        $search_engine = 'google_shopping';

        $url = 'https://serpapi.com/search.json?engine=' . urlencode($search_engine) . '&q=' . urlencode($q) . '&api_key=' . urlencode($api_key);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return response($response)->header('Content-Type', 'application/json');
    }
}
