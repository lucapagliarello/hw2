<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Registrati</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/iscrizione.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
</head>
<body>
    <div id="logo">Vinted</div>
    <main>
        <section class="main_left"></section>
        <section class="main_right">
            <h1>Iscriviti gratuitamente per comprare tutto quello che vuoi!</h1>

            {{-- Mostra errore da sessione --}}
            @if ($error)
                <div class="errorj">
                    <img src="{{ asset('close.svg') }}" />
                    <span>
                        @switch($error)
                            @case('empty_fields') Riempi tutti i campi obbligatori. @break
                            @case('bad_passwords') Le password non coincidono. @break
                            @case('existing_username') Username già esistente. @break
                            @case('existing_email') Email già utilizzata. @break
                            @case('invalid_username') Username non valido. @break
                            @case('short_password') Password troppo corta (min. 8 caratteri). @break
                            @case('invalid_email') Email non valida. @break
                            @default Errore generico, riprova.
                        @endswitch
                    </span>
                </div>
            @endif

            <form method="POST" autocomplete="off">
                @csrf
                <div class="names">
                    <div class="name">
                        <label for="name">Nome</label>
                        <input type="text" name="name" value="{{ old('name') }}">
                        <div><img src="{{ asset('close.svg') }}"/><span>Devi inserire il tuo nome</span></div>
                    </div>
                    <div class="surname">
                        <label for="surname">Cognome</label>
                        <input type="text" name="surname" value="{{ old('surname') }}">
                        <div><img src="{{ asset('close.svg') }}"/><span>Devi inserire il tuo cognome</span></div>
                    </div>
                </div>

                <div class="username">
                    <label for="username">Nome utente</label>
                    <input type="text" name="username" value="{{ old('username') }}">
                    <div><img src="{{ asset('close.svg') }}"/><span>Nome utente non disponibile</span></div>
                </div>

                <div class="email">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}">
                    <div><img src="{{ asset('close.svg') }}"/><span>Indirizzo email non valido</span></div>
                </div>

                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                    <div><img src="{{ asset('close.svg') }}"/><span>Inserisci almeno 8 caratteri</span></div>
                </div>

                <div class="confirm_password">
                    <label for="conferma">Conferma Password</label>
                    <input type="password" name="conferma">
                    <div><img src="{{ asset('close.svg') }}"/><span>Le password non coincidono</span></div>
                </div>

                <div class="allow">
                    <input type="checkbox" name="allow" value="1" {{ old('allow') ? 'checked' : '' }}>
                    <label for="allow">Accetto i termini e condizioni d'uso di Vinted.</label>
                </div>

                <div class="submit">
                    <input type="submit" value="Registrati" id="submit">
                </div>
            </form>

            <div class="signup">Hai un account? <a href="{{ url('login') }}">Accedi</a></div>
        </section>
    </main>
</body>
</html>
