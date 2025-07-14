<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pagamento Riuscito</title>
    <link rel="stylesheet" href="{{ url('css/success.css') }}">
</head>
<body>
    <h1>✅ Pagamento riuscito!</h1>
    <img src="{{ url('image/success.png') }}" alt="Pagamento riuscito" />
    <a href="{{ url('home') }}">
        <button>Torna alla Home</button>
    </a>
</body>
</html>
