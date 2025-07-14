<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pagamento Annullato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #ffe6e6;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            color: #c62828;
            text-align: center;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        img {
            max-width: 300px;
            margin-bottom: 30px;
        }
        button {
            background-color: #e53935;
            border: none;
            padding: 15px 30px;
            color: white;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #ab000d;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>❌ Pagamento annullato</h1>
    <img src="<?php echo e(url('image/fail.png')); ?>" alt="Pagamento annullato" />
    <a href="<?php echo e(url('home')); ?>">
        <button>Torna alla Home</button>
    </a>
</body>
</html>
<?php /**PATH /Users/andreapagliarello/hw02/resources/views/ordinecancellato.blade.php ENDPATH**/ ?>