<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Registrati</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(asset('css/iscrizione.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo e(asset('favicon.png')); ?>" type="image/png">
</head>
<body>
    <div id="logo">Vinted</div>
    <main>
        <section class="main_left"></section>
        <section class="main_right">
            <h1>Iscriviti gratuitamente per comprare tutto quello che vuoi!</h1>

            
            <?php if($error): ?>
                <div class="errorj">
                    <img src="<?php echo e(asset('close.svg')); ?>" />
                    <span>
                        <?php switch($error):
                            case ('empty_fields'): ?> Riempi tutti i campi obbligatori. <?php break; ?>
                            <?php case ('bad_passwords'): ?> Le password non coincidono. <?php break; ?>
                            <?php case ('existing_username'): ?> Username già esistente. <?php break; ?>
                            <?php case ('existing_email'): ?> Email già utilizzata. <?php break; ?>
                            <?php case ('invalid_username'): ?> Username non valido. <?php break; ?>
                            <?php case ('short_password'): ?> Password troppo corta (min. 8 caratteri). <?php break; ?>
                            <?php case ('invalid_email'): ?> Email non valida. <?php break; ?>
                            <?php default: ?> Errore generico, riprova.
                        <?php endswitch; ?>
                    </span>
                </div>
            <?php endif; ?>

            <form method="POST" autocomplete="off">
                <?php echo csrf_field(); ?>
                <div class="names">
                    <div class="name">
                        <label for="name">Nome</label>
                        <input type="text" name="name" value="<?php echo e(old('name')); ?>">
                        <div><img src="<?php echo e(asset('close.svg')); ?>"/><span>Devi inserire il tuo nome</span></div>
                    </div>
                    <div class="surname">
                        <label for="surname">Cognome</label>
                        <input type="text" name="surname" value="<?php echo e(old('surname')); ?>">
                        <div><img src="<?php echo e(asset('close.svg')); ?>"/><span>Devi inserire il tuo cognome</span></div>
                    </div>
                </div>

                <div class="username">
                    <label for="username">Nome utente</label>
                    <input type="text" name="username" value="<?php echo e(old('username')); ?>">
                    <div><img src="<?php echo e(asset('close.svg')); ?>"/><span>Nome utente non disponibile</span></div>
                </div>

                <div class="email">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo e(old('email')); ?>">
                    <div><img src="<?php echo e(asset('close.svg')); ?>"/><span>Indirizzo email non valido</span></div>
                </div>

                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                    <div><img src="<?php echo e(asset('close.svg')); ?>"/><span>Inserisci almeno 8 caratteri</span></div>
                </div>

                <div class="confirm_password">
                    <label for="conferma">Conferma Password</label>
                    <input type="password" name="conferma">
                    <div><img src="<?php echo e(asset('close.svg')); ?>"/><span>Le password non coincidono</span></div>
                </div>

                <div class="allow">
                    <input type="checkbox" name="allow" value="1" <?php echo e(old('allow') ? 'checked' : ''); ?>>
                    <label for="allow">Accetto i termini e condizioni d'uso di Vinted.</label>
                </div>

                <div class="submit">
                    <input type="submit" value="Registrati" id="submit">
                </div>
            </form>

            <div class="signup">Hai un account? <a href="<?php echo e(url('login')); ?>">Accedi</a></div>
        </section>
    </main>
</body>
</html>
<?php /**PATH /Users/andreapagliarello/hw02/resources/views/register.blade.php ENDPATH**/ ?>