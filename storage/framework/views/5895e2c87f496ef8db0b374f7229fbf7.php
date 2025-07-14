<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' href="<?php echo e(url('css/accesso.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accedi con Vinted</title>
</head>
<body>
    <div id="logo">Vinted</div>
    <main class="login">
        <section class="main">
            <h5>Per continuare, accedi a Vinted.</h5>

            
            <?php if(isset($error)): ?>
                <p class="error">
                    <?php switch($error):
                        case ('empty_fields'): ?>
                            Inserisci username e password.
                            <?php break; ?>
                        <?php case ('wrong'): ?>
                            Username e/o password errati.
                            <?php break; ?>
                        <?php default: ?>
                            Errore generico.
                    <?php endswitch; ?>
                </p>
            <?php endif; ?>

            <form name="login" method="post" action="<?php echo e(url('login')); ?>">
                <?php echo csrf_field(); ?>

                <div class="username">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo e(old('username')); ?>">
                </div>

                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>

                <div class="submit-container">
                    <div class="login-btn">
                        <input type="submit" value="ACCEDI">
                    </div>
                </div>
            </form>

            <div class="signup"><h4>Non hai un account?</h4></div>
            <div class="signup-btn-container">
                <a class="signup-btn" href="<?php echo e(url('register')); ?>">ISCRIVITI A VINTED</a>
            </div>
        </section>
    </main>
</body>
</html>

<?php /**PATH /Users/andreapagliarello/hw02/resources/views/login.blade.php ENDPATH**/ ?>