<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ApiController extends BaseController
{
    public function OpenLibrary(Request $request)
    {
        $q = trim($request->query('q', ''));
        $criterio = $request->query('criterio', 'title');
        $lingua = $request->query('lingua', '');

        if ($q === '') {
            return response()->json(['docs' => [], 'num_found' => 0]);
        }

        $url = 'https://openlibrary.org/search.json?' . urlencode($criterio) . '=' . urlencode($q);
        if ($lingua !== '') {
            $url .= '&language=' . urlencode($lingua);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            curl_close($ch);
            return response()->json(['error' => 'Errore nella richiesta cURL'], 500);
        }

        curl_close($ch);
        return response($result, 200)
               ->header('Content-Type', 'application/json');
    }

    public function Valuta(Request $request)
    {
        $from = $request->query('from', 'USD');
        $apiKey = '524b278bae218fb72665a5b7';

        $url = "https://v6.exchangerate-api.com/v6/{$apiKey}/latest/{$from}";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return response($response, 200)
                ->header('Content-Type', 'application/json');
    }
}
