<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return redirect('login');
});

//registrazione - login - logout
Route::get('login', 'App\Http\Controllers\LoginController@login_form');
Route::post('login', 'App\Http\Controllers\LoginController@do_login');

Route::get('register', 'App\Http\Controllers\LoginController@register_form');
Route::post('register', 'App\Http\Controllers\LoginController@do_register');

Route::get('logout', 'App\Http\Controllers\LoginController@logout');

// Home
Route::get('home', 'App\Http\Controllers\HomeController@home');

Route::get('/search', 'App\Http\Controllers\SearchController@search'); //barra di ricerca con GoogleShopping API
Route::post('/save-product', 'App\Http\Controllers\ProductController@saveProduct'); //Salvataggio nei preferiti
Route::post('/add-to-cart', 'App\Http\Controllers\CartController@addToCart'); //Aggiungi al carrello
Route::get('/search-book', 'App\Http\Controllers\ApiController@OpenLibrary'); //Ricerca libri tramite OpenLibrary API
Route::get('/valuta', 'App\Http\Controllers\ApiController@Valuta'); //Convertitore della valuta con API

// Profilo
Route::get('profilo', 'App\Http\Controllers\HomeController@profilo');
Route::get('/fetch-prodotti', 'App\Http\Controllers\ProfiloController@FetchProdotti'); //caricamento dei prodotti salvati

// Carrello
Route::get('carrello', 'App\Http\Controllers\HomeController@carrello');
Route::get('/fetch-cart', 'App\Http\Controllers\CartController@FetchCarrello'); //caricamento prodotti nel carrello
Route::post('/remove-from-cart', 'App\Http\Controllers\CartController@rimuoviElemento'); //rimozione prodotto dal carrello
Route::post('/create-checkout-session', 'App\Http\Controllers\CheckoutController@sessione'); //pagamento con API Stripe
Route::get('/success', 'App\Http\Controllers\CheckoutController@success'); //Pagamento riuscito
Route::get('/cancel', 'App\Http\Controllers\CheckoutController@cancel'); //Pagamento non riuscito o abortito


// Recensioni
Route::get('recensioni', 'App\Http\Controllers\HomeController@recensioni'); //Visualizzazione delle recensioni
Route::post('/aggiungi', 'App\Http\Controllers\RecensioniController@aggiungiRecensione'); //aggiunta della Recensione