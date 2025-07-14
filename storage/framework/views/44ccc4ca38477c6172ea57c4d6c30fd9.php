<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Recensioni sul sito</title>
    <link rel="stylesheet" href="<?php echo e(url('css/recensioni.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('css/index.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('css/menuhome.css')); ?>">
    <script src="<?php echo e(url('js/funzione_profilo_carrello.js')); ?>" defer></script>
    <script src="<?php echo e(url('js/funzione_sottomenu.js')); ?>" defer></script>
    </head>
    <body>

    <header>
        <nav class="nav_sup">
            <div id="logo">
            <a href="<?php echo e(url('home')); ?>"><strong>Vinted</strong></a>
            </div>
            <div id="ricerca">
            <select class="seleziona_catalogo">
            <option>Catalogo</option>
            </select>
            <input type="text" placeholder="🔍 Cerca articoli">
            </div>

            <div id="accesso">
            <div class="button-profilo">
                <?php if(session('user_id')): ?>
                <a id="profilo-btn">Profilo</a>
                <?php else: ?>
                <a>Iscriviti |</a>
                <a>Accedi</a>
                <?php endif; ?>
            </div>

            <div id="collegamento-menu" class="hidden">
                <?php if(session('user_id')): ?>
                <div class="menu-item">
                    <a href="<?php echo e(url('profilo')); ?>">Il mio profilo</a>
                </div>
                <div class="menu-item">
                    <a href="<?php echo e(url('carrello')); ?>">Il mio carrello</a>
                </div>
                <?php else: ?>
                <div class="modal-content">
                    <a id="X"><img src="<?php echo e(url('image/chiudi.png')); ?>"/></a>
                    <p id="titolo_iscr">Iscriviti e vendi i vestiti che non metti più, senza commissioni</p>
                    <div class="accedi-con">
                    <div class="accedi-con-titolo">
                        <div>
                        <img src="https://static.tacdn.com/img2/google/G_color_40x40.png" />
                        <p>Accedi con Google</p>
                        </div>
                    </div>
                    <div class="accedi-con-titolo">
                        <div>
                        <img src="<?php echo e(url('image/ios-apple.svg')); ?>" />
                        <p>Accedi con Apple</p>
                        </div>
                    </div>
                    <div class="accedi-con-titolo">
                        <div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/2023_Facebook_icon.svg" />
                        <p>Accedi con Facebook</p>
                        </div>
                    </div>
                    <div class="testo_altro">
                        <p>Oppure iscriviti con <a href="<?php echo e(url('register')); ?>">E-mail</a></p>
                    </div>
                    <div class="testo_account">
                        <p>Hai già un account? <a href="<?php echo e(url('login')); ?>">Accedi</a></p>
                    </div>
                    <div id="divisore"></div>
                    <div class="testo_attività">
                        <p>Hai un'attività? <a><link href=""/>Scopri di più</a></p>
                    </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php if(session('user_id')): ?>
                <a href="<?php echo e(url('logout')); ?>" class="button-vendita">Logout</a>
            <?php else: ?>
                <a class="button-vendita">Vendi Subito</a>
            <?php endif; ?>
            </div>


            <div id="help">
            <a>?</a>
            </div>

            <div id="language">
            <a>IT ▼</a>
            </div>

            <div id="menu">
            <div></div>
            <div></div>
            <div></div>
            </div>

            <div id="mobile-menu" class="hidden">
            <div class="button-mobile">Vendi subito</div>
            <div class="auth-links">Iscriviti | Accedi</div>
            <div class="guide">La tua guida a Vinted</div>
        
            <section class="altre_info">
                <h3>Categorie</h3>
                <div class="category-item"><i>👗</i>Donna</div>
                <div class="category-item"><i>👕</i>Uomo</div>
                <div class="category-item"><i>💎</i>Articoli griffati</div>
                <div class="category-item"><i>😊</i>Bambini</div>
                <div class="category-item"><i>🏠</i>Casa</div>
                <div class="category-item"><i>🔌</i>Elettronica</div>
            </section>
        
            <section class="altre_info">
                <h3>Lingua</h3>
                <div class="lang"><i>🌐</i> Italiano</div>
            </section>
        
            <section class="altre_info">
                <h3>Scopri</h3>
                <a href="#">Come funziona</a>
                <a href="#">Verifica dell'articolo</a>
                <a href="#">App mobili</a>
                <a href="#">Centro assistenza</a>
                <a href="#">Notizie</a>
                <a href="#">Vinted Pro</a>
                <a href="#">Guida a Vinted Pro</a>
            </section>
        
            <section class="altre_info">
                <h3>Assistenza</h3>
                <a href="#">Centro assistenza</a>
                <a href="#">Vendere</a>
                <a href="#">Acquistare</a>
                <a href="#">Sicurezza e affidabilità</a>
            </section>

            <section class="altre_info">
                <a href="#">Informativa sulla privacy</a>
                <a href="#">Informativa sui cookie</a>
                <a href="#">Impostazioni cookie</a>
                <a href="#">Termini e condizioni</a>
                <a href="#">La nostra piattaforma</a>
                <a href="#">Termini e condizioni di Vinted Pro</a>
            </section>
        </nav>

        <nav class="nav_inf">
            <div id="links">
            <div class="link-tutti"><a>Tutti</a></div>

            <div class="link-singolo" data-button="donna"><a>Donna</a></div>

            <div class="link-singolo" data-button="uomo"><a>Uomo</a></div>

            <div class="link-mobile" data-button="articoli"><a>Articoli griffati</a></div>
            <div class="link-singolo" data-button="bambini"><a>Bambini</a></div>
            <div class="link-singolo" data-button="casa"><a>Casa</a></div>
            <div class="link-mobile" data-button="elettronica"><a>Elettronica</a></div>
            <div class="link-singolo" data-button="intrattenimento"><a>Intrattenimento</a></div>
            <div class="link-singolo" data-button="animali"><a>Animali</a></div>
            <div class="link-singolo"><a>Informazioni</a></div>
            <div class="link-singolo"><a>La nostra piattaforma</a></div>
            </div>

            <div class="hidden" data-submenu="donna">
            <div class="submenu">
                <div class="submenu-left">
                <a data-subsubmenu="tuttidonna" class="active">
                    <img src="<?php echo e(url('image/tutti.png')); ?>" alt="Icona Tutti" />
                    Tutti
                </a>      
                <a data-subsubmenu="abbigliamentodonna">
                    <img src="<?php echo e(url('image/vestiti.png')); ?>" alt="Icona Abbigliamento" />
                    Abbigliamento
                </a>
                <a data-subsubmenu="scarpeedonna">
                    <img src="<?php echo e(url('image/scarpe.png')); ?>" alt="Icona Scarpe" />
                    Scarpe
                </a>
                <a data-subsubmenu="borseaccessoridonna">
                    <img src="<?php echo e(url('image/borse.png')); ?>" alt="Icona Borse" />
                    Borse e Accessori
                </a>
                <a data-subsubmenu="intimodonna">
                    <img src="<?php echo e(url('image/intimo.png')); ?>" alt="Icona Intimo" />
                    Intimo e Pigiami
                </a>
                <a data-subsubmenu="beautydonna">
                    <img src="<?php echo e(url('image/beauty.png')); ?>" alt="Icona Beauty" />
                    Bellezza
                </a>
                </div>
            
                <div class="submenu-right">
                <div class="hidden" data-submenu-right="tuttidonna">
                    <div class="subsubmenu-content" id="subsubmenu-tutti"></div>
                </div>
            
                <div class="hidden" data-submenu-right="abbigliamentodonna">
                    <div class="subsubmenu-content" id="subsubmenu-abbigliamento">
                    <div>Maglioni e Cardigan</div>
                    <div>Top e Bluse</div>
                    <div>Abiti da giorno</div>
                    <div>Gonne e Pantaloni</div>
                    <div>Pigiami e Lingerie</div>
                    <div>Camice e Tuniche</div>
                    <div>Trench e Cappotti</div>
                    <div>Felpe e Giacche leggere</div>
                    <div>Leggings e Tights</div>
                    <div>Abbigliamento premaman</div>
                    <div>Moda curvy</div>
                    <div>Vestiti da cerimonia</div>
                    <div>Giubbini e Giacche invernali</div>
                    <div>Jeans e Denim</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="scarpeedonna">
                    <div class="subsubmenu-content" id="subsubmenu-scarpe">
                    <div>Sneakers sportive</div>
                    <div>Stivali e Stivaletti</div>
                    <div>Sandali estivi</div>
                    <div>Pantofole e Ciabatte</div>
                    <div>Scarpe eleganti</div>
                    <div>Décolleté e Tacchi alti</div>
                    <div>Scarpe da ginnastica basse</div>
                    <div>Scarpe da jogging</div>
                    <div>Scarpe con tacco grosso</div>
                    <div>Scarpe basse</div>
                    <div>Espadrillas</div>
                    <div>Mocassini e Loafers</div>
                    <div>Ballerine</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="borseaccessoridonna">
                    <div class="subsubmenu-content" id="subsubmenu-borse">
                    <div>Borse a tracolla</div>
                    <div>Borse a mano</div>
                    <div>Satchel e Zaini</div>
                    <div>Valigie e trolley</div>
                    <div>Pochette e Clutch</div>
                    <div>Borse da viaggio</div>
                    <div>Borse da shopping</div>
                    <div>Borse con catena</div>
                    <div>Borse crossbody</div>
                    <div>Borse da lavoro</div>
                    <div>Mini borse</div>
                    <div>Borse vintage</div>
                    </div>
            
                    <div class="subsubmenu-content" id="subsubmenu-accessori">
                    <div>Cinture eleganti</div>
                    <div>Cappelli e Fascette</div>
                    <div>Guanti invernali</div>
                    <div>Occhiali da sole</div>
                    <div>Sciarpe e Foulard</div>
                    <div>Orologi e Bijoux</div>
                    <div>Portafogli e Portachiavi</div>
                    <div>Maschere da sole</div>
                    <div>Paragocce</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="intimodonna">
                    <div class="subsubmenu-content" id="subsubmenu-intimo">
                    <div>Reggiseni</div>
                    <div>Slip e Boxer</div>
                    <div>Corpetti e Guêpières</div>
                    <div>Reggiseni sportivi</div>
                    <div>Intimo modellante</div>
                    <div>Collant e Calzini</div>
                    <div>Pigiami e Accappatoi</div>
                    <div>Body e Tute intime</div>
                    <div>Calze autoreggenti</div>
                    <div>Reggicalze</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="beautydonna">
                    <div class="subsubmenu-content" id="subsubmenu-beauty">
                    <div>Trucco e cosmetici</div>
                    <div>Trattamenti per la pelle</div>
                    <div>Profumi e Deodoranti</div>
                    <div>Cura dei capelli</div>
                    <div>Cura delle unghie</div>
                    <div>Make-up occhi</div>
                    <div>Trattamenti per il corpo</div>
                    <div>Accessori beauty</div>
                    <div>Set regalo beauty</div>
                    <div>Creme antirughe</div>
                    <div>Trattamenti anti-età</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            

            <div class="hidden" data-submenu="uomo">
            <div class="submenu">
                <div class="submenu-left">
                <a data-subsubmenu="tuttiuomo" class="active">
                    <img src="<?php echo e(url('image/tutti.png')); ?>" alt="Icona Tutti" />
                    Tutti
                </a>      
                <a data-subsubmenu="abbigliamentouomo">
                    <img src="<?php echo e(url('image/vestiti.png')); ?>" alt="Icona Abbigliamento" />
                    Abbigliamento
                </a>
                <a data-subsubmenu="scarpeuomo">
                    <img src="<?php echo e(url('image/scarpe.png')); ?>" alt="Icona Scarpe" />
                    Scarpe
                </a>
                <a data-subsubmenu="accessoriuomo">
                    <img src="<?php echo e(url('image/accessori.png')); ?>" alt="Icona Accessori" />
                    Accessori
                </a>
                <a data-subsubmenu="intimouomo">
                    <img src="<?php echo e(url('image/intimo.png')); ?>" alt="Icona Intimo" />
                    Intimo
                </a>
                </div>
            
                <div class="submenu-right">
                <div class="hidden" data-submenu-right="tuttiuomo">
                    <div class="subsubmenu-content" id="subsubmenu-tutti">
                    </div>
                </div>
                
                <div class="hidden" data-submenu-right="abbigliamentouomo">
                    <div class="subsubmenu-content" id="subsubmenu-abbigliamento">
                    <div>Tutti</div>
                    <div>Maglioni e Pullover</div>
                    <div>T-shirt e Polo</div>
                    <div>Pantaloni e Jeans</div>
                    <div>Giacche e Blazer</div>
                    <div>Felpe e Hoodie</div>
                    <div>Shorts e Bermuda</div>
                    <div>Giubbotti e Parka</div>
                    <div>Camicia casual</div>
                    <div>Pantaloni chinos</div>
                    <div>Giubbotti in pelle</div>
                    <div>Cardigan e Maglioni girocollo</div>
                    <div>Piumini e Giacche imbottite</div>
                    <div>Capispalla in lana</div>
                    <div>Camice e Tuniche</div>
                    </div>
                </div>
                
                <div class="hidden" data-submenu-right="scarpeuomo">
                    <div class="subsubmenu-content" id="subsubmenu-scarpe">
                    <div>Tutti</div>
                    <div>Sneakers</div>
                    <div>Scarpe eleganti</div>
                    <div>Stivali</div>
                    <div>Sandali</div>
                    <div>Mocassini</div>
                    <div>Scarpe da ginnastica</div>
                    <div>Scarpe da trekking</div>
                    <div>Infradito</div>
                    <div>Scarpe casual</div>
                    <div>Stivaletti di pelle</div>
                    <div>Scarpe da corsa</div>
                    <div>Scarpe da skate</div>
                    <div>Scarpe con tacco</div>
                    <div>Scarpe con lacci</div>
                    </div>
                </div>
                
                <div class="hidden" data-submenu-right="accessoriuomo">
                    <div class="subsubmenu-content" id="subsubmenu-accessori">
                    <div>Tutti</div>
                    <div>Cinture</div>
                    <div>Cravatte e Papillon</div>
                    <div>Cappelli e Berretti</div>
                    <div>Sciarpe e Foulard</div>
                    <div>Guanti</div>
                    <div>Portafogli</div>
                    <div>Orologi</div>
                    <div>Occhiali da sole</div>
                    <div>Zaini e Borse</div>
                    <div>Portachiavi</div>
                    <div>Gemelli da polso</div>
                    <div>Accessori per capelli</div>
                    <div>Portamonete</div>
                    <div>Gioielli e Collane</div>
                    <div>Guanti in pelle</div>
                    </div>
                </div>
                
                <div class="hidden" data-submenu-right="intimouomo">
                    <div class="subsubmenu-content" id="subsubmenu-intimo">
                    <div>Tutti</div>
                    <div>Boxer e Slip</div>
                    <div>Canotte e Maglie intime</div>
                    <div>Pigiami</div>
                    <div>Calzini</div>
                    <div>Calzamaglia</div>
                    <div>Accappatoi e Teli da bagno</div>
                    <div>Intimo sportivo</div>
                    <div>Maglie termiche</div>
                    <div>Slip e Tanga</div>
                    <div>Boxer alla moda</div>
                    <div>Completi intimi da uomo</div>
                    <div>Pantaloni da notte</div>
                    <div>Leggings uomo</div>
                    </div>
                </div>
                </div>         
            </div>  
            </div>
            
            <div class="hidden" data-submenu="articoli">
            <div class="submenu">
                <div class="submenu-left">
                <a data-subsubmenu="tuttigriffati" class="active">
                    <img src="tutti.png" alt="Icona Tutti" />
                    Tutti
                </a>      
                <a data-subsubmenu="abbigliamentogriffati">
                    <img src="vestiti.png" alt="Icona Abbigliamento" />
                    Abbigliamento Griffato
                </a>
                <a data-subsubmenu="borsegriffate">
                    <img src="borse.png" alt="Icona Borse" />
                    Borse Griffate
                </a>
                <a data-subsubmenu="scarpegriffate">
                    <img src="scarpe.png" alt="Icona Scarpe" />
                    Scarpe Griffate
                </a>
                <a data-subsubmenu="accessorigriffati">
                    <img src="accessori.png" alt="Icona Accessori" />
                    Accessori Griffati
                </a>
                </div>
            
                <div class="submenu-right">
                <div class="hidden" data-submenu-right="tuttigriffati">
                    <div class="subsubmenu-content" id="subsubmenu-tutti">
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="abbigliamentogriffati">
                    <div class="subsubmenu-content" id="subsubmenu-abbigliamento">
                    <div>Abiti da cerimonia</div>
                    <div>Giubbotti e Cappotti di lusso</div>
                    <div>Giacche e Blazer</div>
                    <div>Abbigliamento casual</div>
                    <div>Tute e Completi griffati</div>
                    <div>Maglioni e Cardigan di alta moda</div>
                    <div>Camicie e Bluse di designer</div>
                    <div>Abiti da cocktail</div>
                    <div>Giubbini e Parka</div>
                    <div>Jeans e Denim di lusso</div>
                    <div>Stivali in pelle</div>
                    <div>Pantaloni e Leggings firmati</div>
                    <div>Abbigliamento sportivo griffato</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="borsegriffate">
                    <div class="subsubmenu-content" id="subsubmenu-borse">
                    <div>Borse in pelle pregiata</div>
                    <div>Borse a mano di lusso</div>
                    <div>Borse da viaggio griffate</div>
                    <div>Borse a tracolla di alta moda</div>
                    <div>Pochette e Clutch di designer</div>
                    <div>Borse shopping oversize</div>
                    <div>Borse con dettagli in metallo</div>
                    <div>Borse da sera eleganti</div>
                    <div>Mini borse griffate</div>
                    <div>Valigie e trolley di lusso</div>
                    <div>Borse hobo e boho chic</div>
                    <div>Borse in materiali innovativi</div>
                    <div>Borse a secchiello</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="scarpegriffate">
                    <div class="subsubmenu-content" id="subsubmenu-scarpe">
                    <div>Sneakers di lusso</div>
                    <div>Scarpe con tacco alto firmate</div>
                    <div>Stivali in pelle di alta moda</div>
                    <div>Stivaletti griffati</div>
                    <div>Scarpe da cerimonia</div>
                    <div>Sandali griffati da sera</div>
                    <div>Scarpe da ginnastica di lusso</div>
                    <div>Décolleté firmati</div>
                    <div>Mocassini di alta moda</div>
                    <div>Ballerine eleganti</div>
                    <div>Pantofole griffate</div>
                    <div>Scarpe da running griffate</div>
                    <div>Scarpe da sposa</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="accessorigriffati">
                    <div class="subsubmenu-content" id="subsubmenu-accessori">
                    <div>Orologi di lusso</div>
                    <div>Occhiali da sole firmati</div>
                    <div>Cinture in pelle di alta moda</div>
                    <div>Guanti in pelle pregiata</div>
                    <div>Cravatte e Foulard di lusso</div>
                    <div>Collane e Braccialetti griffati</div>
                    <div>Portafogli e Borsellini di design</div>
                    <div>Maschere da sole griffate</div>
                    <div>Scialli e Stole di lusso</div>
                    <div>Portachiavi firmati</div>
                    <div>Cappelli eleganti</div>
                    <div>Accessori da viaggio di alta moda</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        
            <div class="hidden" data-submenu="bambini">
            <div class="submenu">
                <div class="submenu-left">
                <a data-subsubmenu="tuttibambini" class="active">
                    <img src="tutti.png" alt="Icona Tutti" />
                    Tutti
                </a>
                <a data-subsubmenu="abbigliamentobambini">
                    <img src="vestiti.png" alt="Icona Abbigliamento" />
                    Abbigliamento
                </a>
                <a data-subsubmenu="scarpebambini">
                    <img src="scarpe.png" alt="Icona Scarpe" />
                    Scarpe
                </a>
                <a data-subsubmenu="giocattolibambini">
                    <img src="giocattoli.png" alt="Icona Giocattoli" />
                    Giocattoli
                </a>
                <a data-subsubmenu="accessoribambini">
                    <img src="accessori.png" alt="Icona Accessori" />
                    Accessori
                </a>
                <a data-subsubmenu="pannibambini">
                    <img src="pannolini.png" alt="Icona Pannolini" />
                    Pannolini e Cura
                </a>
                </div>
            
                <div class="submenu-right">
                <div class="hidden" data-submenu-right="tuttibambini">
                    <div class="subsubmenu-content" id="subsubmenu-tutti">
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="abbigliamentobambini">
                    <div class="subsubmenu-content" id="subsubmenu-abbigliamento">
                    <div>Body e tutine</div>
                    <div>Maglioni e felpe</div>
                    <div>Pantaloni e leggings</div>
                    <div>Camicie e bluse</div>
                    <div>Giubbotti e giacche</div>
                    <div>Vestiti da cerimonia</div>
                    <div>Top e t-shirt</div>
                    <div>Completini neonati</div>
                    <div>Gonne e abiti</div>
                    <div>Abbigliamento per scuola</div>
                    <div>Set coordinati</div>
                    <div>Abbigliamento per sport</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="scarpebambini">
                    <div class="subsubmenu-content" id="subsubmenu-scarpe">
                    <div>Scarpe da bambino</div>
                    <div>Stivaletti bambini</div>
                    <div>Sneakers bambini</div>
                    <div>Scarpe da cerimonia</div>
                    <div>Sandali e infradito bambini</div>
                    <div>Ciabattine bambini</div>
                    <div>Scarpe da ginnastica bambini</div>
                    <div>Pantofole bambini</div>
                    <div>Scarpe primi passi</div>
                    <div>Scarpe sportive bambini</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="giocattolibambini">
                    <div class="subsubmenu-content" id="subsubmenu-giocattoli">
                    <div>Giochi educativi</div>
                    <div>Giochi in legno</div>
                    <div>Peluches e bambole</div>
                    <div>Giocattoli per neonati</div>
                    <div>Giochi di costruzione</div>
                    <div>Piste e macchinine</div>
                    <div>Giocattoli di musica e suoni</div>
                    <div>Libri e puzzle per bambini</div>
                    <div>Giocattoli da esterno</div>
                    <div>Giocattoli per attività creative</div>
                    <div>Giochi per la psicomotricità</div>
                    <div>Set di cucina e roleplay</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="accessoribambini">
                    <div class="subsubmenu-content" id="subsubmenu-accessori">
                    <div>Cappellini e berrettini</div>
                    <div>Guanti e sciarpe per bambini</div>
                    <div>Zaini e borse scuola</div>
                    <div>Occhiali da sole bambini</div>
                    <div>Foulard e bandane</div>
                    <div>Porta pannolini e borsa cambio</div>
                    <div>Scarpette da corsa</div>
                    <div>Braccialetti e collane bambini</div>
                    <div>Orecchini per bambini</div>
                    <div>Orologi per bambini</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="pannibambini">
                    <div class="subsubmenu-content" id="subsubmenu-panni">
                    <div>Pannolini usa e getta</div>
                    <div>Pannolini ecologici</div>
                    <div>Pannolini per neonati</div>
                    <div>Salviettine per bambini</div>
                    <div>Creams e lozioni per bambini</div>
                    <div>Fasciatoi e lettini cambio</div>
                    <div>Oli e bagnetti per bambini</div>
                    <div>Kit di igiene neonati</div>
                    <div>Asciugamani per bambini</div>
                    <div>Protezione solare bambini</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            
            <div class="hidden" data-submenu="casa">
            <div class="submenu">
                <div class="submenu-left">
                <a data-subsubmenu="tutticasa" class="active">
                    <img src="tutti.png" alt="Icona Tutti" />
                    Tutti
                </a>
                <a data-subsubmenu="arredamentocasa">
                    <img src="arredamento.png" alt="Icona Arredamento" />
                    Arredamento Casa
                </a>
                <a data-subsubmenu="elettrodomesticicasa">
                    <img src="elettrodomestici.png" alt="Icona Elettrodomestici" />
                    Elettrodomestici
                </a>
                <a data-subsubmenu="illuminazionecasa">
                    <img src="illuminazione.png" alt="Icona Illuminazione" />
                    Illuminazione
                </a>
                <a data-subsubmenu="decocasa">
                    <img src="decorazioni.png" alt="Icona Decorazioni" />
                    Decorazioni Casa
                </a>
                <a data-subsubmenu="tavola">
                    <img src="tavola.png" alt="Icona Tavola" />
                    Tavola e Cucina
                </a>
                </div>
            
                <div class="submenu-right">
                <div class="hidden" data-submenu-right="tutticasa">
                    <div class="subsubmenu-content" id="subsubmenu-tutti">
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="arredamentocasa">
                    <div class="subsubmenu-content" id="subsubmenu-arredamento">
                    <div>Soggiorno</div>
                    <div>Cucina</div>
                    <div>Camera da letto</div>
                    <div>Camera dei bambini</div>
                    <div>Ufficio</div>
                    <div>Bagno</div>
                    <div>Hall e ingresso</div>
                    <div>Complementi d'arredo</div>
                    <div>Sedie e poltrone</div>
                    <div>Tavoli e scrivanie</div>
                    <div>Letti e divani</div>
                    <div>Mensole e scaffali</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="elettrodomesticicasa">
                    <div class="subsubmenu-content" id="subsubmenu-elettrodomestici">
                    <div>Frigoriferi</div>
                    <div>Lavatrici e asciugatrici</div>
                    <div>Lavastoviglie</div>
                    <div>Forni e microonde</div>
                    <div>Macchine da caffè</div>
                    <div>Fornetti elettrici</div>
                    <div>Ventilatori e condizionatori</div>
                    <div>Strumenti per la cucina</div>
                    <div>Macchine per il pane</div>
                    <div>Aspirapolvere</div>
                    <div>Robot da cucina</div>
                    <div>Frullatori e mixer</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="illuminazionecasa">
                    <div class="subsubmenu-content" id="subsubmenu-illuminazione">
                    <div>Lampadari e sospensioni</div>
                    <div>Abajur e lampade da tavolo</div>
                    <div>Illuminazione da esterno</div>
                    <div>Faretti e spot</div>
                    <div>Applique e plafoniere</div>
                    <div>Lampade LED</div>
                    <div>Lampade da terra</div>
                    <div>Lampade a batteria</div>
                    <div>Strisce LED</div>
                    <div>Illuminazione per il giardino</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="decocasa">
                    <div class="subsubmenu-content" id="subsubmenu-decorazioni">
                    <div>Quadri e poster</div>
                    <div>Cuscini e coperte</div>
                    <div>Vasi e piante finte</div>
                    <div>Specchi</div>
                    <div>Orologi da parete</div>
                    <div>Candele e lanterne</div>
                    <div>Sculture decorative</div>
                    <div>Fioriere e vasi da esterno</div>
                    <div>Accessori per il camino</div>
                    <div>Poster vintage</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="tavola">
                    <div class="subsubmenu-content" id="subsubmenu-tavola">
                    <div>Set di piatti</div>
                    <div>Posate</div>
                    <div>Piatti da dessert</div>
                    <div>Ciotole e insalatiere</div>
                    <div>Bicchieri e calici</div>
                    <div>Tovaglie e runner</div>
                    <div>Decori per la tavola</div>
                    <div>Accessori per la cucina</div>
                    <div>Carafes e brocche</div>
                    <div>Vassoi</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            
            <div class="hidden" data-submenu="elettronica">
            <div class="submenu">
                <div class="submenu-left">
                <a data-subsubmenu="tuttielettronica" class="active">
                    <img src="tutti.png" alt="Icona Tutti" />
                    Tutti
                </a>
                <a data-subsubmenu="smartphone">
                    <img src="smartphone.png" alt="Icona Smartphone" />
                    Smartphone
                </a>
                <a data-subsubmenu="computer">
                    <img src="computer.png" alt="Icona Computer" />
                    Computer
                </a>
                <a data-subsubmenu="televisori">
                    <img src="tv.png" alt="Icona Televisori" />
                    Televisori
                </a>
                <a data-subsubmenu="audio">
                    <img src="audio.png" alt="Icona Audio" />
                    Audio
                </a>
                <a data-subsubmenu="fotocamere">
                    <img src="fotocamera.png" alt="Icona Fotocamere" />
                    Fotocamere
                </a>
                <a data-subsubmenu="elettrodomestici">
                    <img src="elettrodomestici.png" alt="Icona Elettrodomestici" />
                    Elettrodomestici
                </a>
                </div>
            
                <div class="submenu-right">
                <div class="hidden" data-submenu-right="tuttielettronica">
                    <div class="subsubmenu-content" id="subsubmenu-tutti">
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="smartphone">
                    <div class="subsubmenu-content" id="subsubmenu-smartphone">
                    <div>Smartphone Android</div>
                    <div>Smartphone iOS</div>
                    <div>Smartphone Huawei</div>
                    <div>Smartphone Samsung</div>
                    <div>Smartphone Xiaomi</div>
                    <div>Smartphone economici</div>
                    <div>Smartphone di fascia alta</div>
                    <div>Accessori per smartphone</div>
                    <div>Custodie e cover</div>
                    <div>Caricabatterie e cavi</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="computer">
                    <div class="subsubmenu-content" id="subsubmenu-computer">
                    <div>PC Desktop</div>
                    <div>PC Portatili</div>
                    <div>Accessori per PC</div>
                    <div>Monitor</div>
                    <div>Notebook gaming</div>
                    <div>Workstation</div>
                    <div>Stampanti e scanner</div>
                    <div>Hard disk e SSD</div>
                    <div>Memorie RAM</div>
                    <div>Mouse e tastiere</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="televisori">
                    <div class="subsubmenu-content" id="subsubmenu-televisori">
                    <div>Televisori 4K</div>
                    <div>Smart TV</div>
                    <div>Televisori LED</div>
                    <div>Televisori OLED</div>
                    <div>Televisori QLED</div>
                    <div>Televisori Curvi</div>
                    <div>Accessori per TV</div>
                    <div>Soundbar</div>
                    <div>Supporti e staffe TV</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="audio">
                    <div class="subsubmenu-content" id="subsubmenu-audio">
                    <div>Cuffie wireless</div>
                    <div>Cuffie con cavo</div>
                    <div>Casse bluetooth</div>
                    <div>Altoparlanti portatili</div>
                    <div>Impianti audio per casa</div>
                    <div>Microfoni</div>
                    <div>Amplificatori</div>
                    <div>Home theater</div>
                    <div>Accessori audio</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="fotocamere">
                    <div class="subsubmenu-content" id="subsubmenu-fotocamere">
                    <div>Fotocamere digitali</div>
                    <div>Fotocamere reflex</div>
                    <div>Fotocamere mirrorless</div>
                    <div>Fotocamere compatte</div>
                    <div>Fotocamere istantanee</div>
                    <div>Obiettivi</div>
                    <div>Accessori fotocamera</div>
                    <div>Treppiedi e supporti</div>
                    <div>Schede di memoria</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="elettrodomestici">
                    <div class="subsubmenu-content" id="subsubmenu-elettrodomestici">
                    <div>Frigoriferi</div>
                    <div>Lavatrici</div>
                    <div>Lavastoviglie</div>
                    <div>Microonde</div>
                    <div>Forni</div>
                    <div>Macchine per il caffè</div>
                    <div>Aspirapolvere</div>
                    <div>Macchine per il pane</div>
                    <div>Frullatori e mixer</div>
                    <div>Climatizzatori</div>
                    <div>Stufe e riscaldamento</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            
            <div class="hidden" data-submenu="intrattenimento">
            <div class="submenu">
                <div class="submenu-left">
                <a data-subsubmenu="tuttiintrattenimento" class="active">
                    <img src="tutti.png" alt="Icona Tutti" />
                    Tutti
                </a>
                <a data-subsubmenu="film">
                    <img src="film.png" alt="Icona Film" />
                    Film
                </a>
                <a data-subsubmenu="musica">
                    <img src="musica.png" alt="Icona Musica" />
                    Musica
                </a>
                <a data-subsubmenu="giochi">
                    <img src="giochi.png" alt="Icona Giochi" />
                    Giochi
                </a>
                <a data-subsubmenu="libri">
                    <img src="libri.png" alt="Icona Libri" />
                    Libri
                </a>
                <a data-subsubmenu="eventi">
                    <img src="eventi.png" alt="Icona Eventi" />
                    Eventi
                </a>
                </div>
            
                <div class="submenu-right">
                <div class="hidden" data-submenu-right="tuttiintrattenimento">
                    <div class="subsubmenu-content" id="subsubmenu-tutti">
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="film">
                    <div class="subsubmenu-content" id="subsubmenu-film">
                    <div>Film in uscita</div>
                    <div>Film d'azione</div>
                    <div>Film drammatici</div>
                    <div>Film di fantascienza</div>
                    <div>Film comici</div>
                    <div>Film horror</div>
                    <div>Film d'animazione</div>
                    <div>Film romantici</div>
                    <div>Film storici</div>
                    <div>Film premiati</div>
                    <div>Film per bambini</div>
                    <div>Film classici</div>
                    <div>Film Netflix e streaming</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="musica">
                    <div class="subsubmenu-content" id="subsubmenu-musica">
                    <div>Musica pop</div>
                    <div>Musica rock</div>
                    <div>Musica jazz</div>
                    <div>Musica elettronica</div>
                    <div>Musica classica</div>
                    <div>Musica rap e hip-hop</div>
                    <div>Musica indie</div>
                    <div>Album d'oro e platino</div>
                    <div>Playlist top 10</div>
                    <div>Artisti emergenti</div>
                    <div>Musica per bambini</div>
                    <div>Soundtrack di film</div>
                    <div>Concerti e live</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="giochi">
                    <div class="subsubmenu-content" id="subsubmenu-giochi">
                    <div>Giochi per PC</div>
                    <div>Giochi per console</div>
                    <div>Giochi per smartphone</div>
                    <div>Giochi multiplayer</div>
                    <div>Giochi di ruolo</div>
                    <div>Giochi di strategia</div>
                    <div>Giochi sportivi</div>
                    <div>Giochi d'azione</div>
                    <div>Giochi di avventura</div>
                    <div>Giochi per bambini</div>
                    <div>Accessori per giochi</div>
                    <div>Consolle retro</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="libri">
                    <div class="subsubmenu-content" id="subsubmenu-libri">
                    <div>Libri di narrativa</div>
                    <div>Libri di saggistica</div>
                    <div>Libri di fantascienza</div>
                    <div>Libri di mistero e gialli</div>
                    <div>Libri storici</div>
                    <div>Libri per bambini</div>
                    <div>Libri di cucina</div>
                    <div>Libri di poesia</div>
                    <div>Libri di viaggio</div>
                    <div>Libri di autoaiuto</div>
                    <div>Libri per ragazzi</div>
                    <div>Libri di fotografia e arte</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="eventi">
                    <div class="subsubmenu-content" id="subsubmenu-eventi">
                    <div>Eventi musicali</div>
                    <div>Festival musicali</div>
                    <div>Teatro e spettacoli dal vivo</div>
                    <div>Eventi cinematografici</div>
                    <div>Concerti e tour</div>
                    <div>Eventi sportivi</div>
                    <div>Eventi culturali</div>
                    <div>Fiere e mostre</div>
                    <div>Eventi online</div>
                    <div>Eventi per bambini</div>
                    <div>Eventi locali</div>
                    <div>Eventi esclusivi</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            
            <div class="hidden" data-submenu="animali">
            <div class="submenu">
                <div class="submenu-left">
                <a data-subsubmenu="tuttianimali" class="active">
                    <img src="tutti.png" alt="Icona Tutti" />
                    Tutti
                </a>
                <a data-subsubmenu="cani">
                    <img src="cani.png" alt="Icona Cani" />
                    Cani
                </a>
                <a data-subsubmenu="gatti">
                    <img src="gatti.png" alt="Icona Gatti" />
                    Gatti
                </a>
                <a data-subsubmenu="pesci">
                    <img src="pesci.png" alt="Icona Pesci" />
                    Pesci
                </a>
                <a data-subsubmenu="uccelli">
                    <img src="uccelli.png" alt="Icona Uccelli" />
                    Uccelli
                </a>
                <a data-subsubmenu="piccoli-animali">
                    <img src="piccoli-animali.png" alt="Icona Piccoli Animali" />
                    Piccoli Animali
                </a>
                </div>
            
                <div class="submenu-right">
                <div class="hidden" data-submenu-right="tuttianimali">
                    <div class="subsubmenu-content" id="subsubmenu-tutti"></div>
                </div>
            
                <div class="hidden" data-submenu-right="cani">
                    <div class="subsubmenu-content" id="subsubmenu-cani">
                    <div>Alimenti per cani</div>
                    <div>Giocattoli per cani</div>
                    <div>Accessori per cani</div>
                    <div>Collari e guinzagli</div>
                    <div>Cure e salute</div>
                    <div>Letti e cuscini per cani</div>
                    <div>Trasportini per cani</div>
                    <div>Abbigliamento per cani</div>
                    <div>Educazione e addestramento</div>
                    <div>Gabbie e recinzioni</div>
                    <div>Cani di razza</div>
                    <div>Accessori per passeggiata</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="gatti">
                    <div class="subsubmenu-content" id="subsubmenu-gatti">
                    <div>Alimenti per gatti</div>
                    <div>Giocattoli per gatti</div>
                    <div>Accessori per gatti</div>
                    <div>Letti e cuscini per gatti</div>
                    <div>Gabbie e trasportini per gatti</div>
                    <div>Cure e salute</div>
                    <div>Collari per gatti</div>
                    <div>Accessori per letti</div>
                    <div>Abbigliamento per gatti</div>
                    <div>Gatti di razza</div>
                    <div>Giochi interattivi per gatti</div>
                    <div>Alimentazione speciale per gatti</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="pesci">
                    <div class="subsubmenu-content" id="subsubmenu-pesci">
                    <div>Acquari</div>
                    <div>Alimenti per pesci</div>
                    <div>Accessori per acquari</div>
                    <div>Filtro per acquari</div>
                    <div>Illuminazione acquari</div>
                    <div>Pesci tropicali</div>
                    <div>Pesci d'acqua fredda</div>
                    <div>Piante per acquari</div>
                    <div>Giochi e decorazioni per acquari</div>
                    <div>Accessori per acquario marino</div>
                    <div>Kit di manutenzione acquari</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="uccelli">
                    <div class="subsubmenu-content" id="subsubmenu-uccelli">
                    <div>Gabbie per uccelli</div>
                    <div>Alimenti per uccelli</div>
                    <div>Giocattoli per uccelli</div>
                    <div>Accessori per uccelli</div>
                    <div>Uccelli da compagnia</div>
                    <div>Gabbie da esterno</div>
                    <div>Cure e salute</div>
                    <div>Abbigliamento per uccelli</div>
                    <div>Alimentazione speciale per uccelli</div>
                    <div>Uccelli da allevamento</div>
                    <div>Accessori per voliere</div>
                    </div>
                </div>
            
                <div class="hidden" data-submenu-right="piccoli-animali">
                    <div class="subsubmenu-content" id="subsubmenu-piccoli-animali">
                    <div>Piccoli animali da compagnia</div>
                    <div>Cavie e criceti</div>
                    <div>Conigli e porcellini d'India</div>
                    <div>Alimenti per piccoli animali</div>
                    <div>Gabbie e accessori</div>
                    <div>Giocattoli per piccoli animali</div>
                    <div>Letti e cuscini per piccoli animali</div>
                    <div>Salute e cura per piccoli animali</div>
                    <div>Abbigliamento per piccoli animali</div>
                    <div>Accessori per trasporto</div>
                    <div>Piccoli animali in vendita</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            
            
        </nav> 
        </header>
    <div class="rc">
        <h1>Lascia una recensione sul sito</h1>

        <div class="btn-home-container">
            <a href="<?php echo e(url('home')); ?>" class="btn-home">Torna alla Home</a>
        </div>

        <form method="POST" action="<?php echo e(url('/aggiungi')); ?>">
            <?php echo csrf_field(); ?>

            <label>Qualità del servizio:
                <input type="range" name="qualita" min="1" max="5" required value="<?php echo e(old('qualita')); ?>">
            </label><br>

            <label>Spedizione:
                <input type="range" name="spedizione" min="1" max="5" required value="<?php echo e(old('spedizione')); ?>">
            </label><br>

            <label>Assistenza clienti:
                <input type="range" name="assistenza" min="1" max="5" required value="<?php echo e(old('assistenza')); ?>">
            </label><br>

            <label>Commento:
                <textarea name="commento" rows="5" cols="40" required><?php echo e(old('commento')); ?></textarea>
            </label><br>

            <button type="submit">Invia recensione</button>
        </form>

        <hr>

        <h2>Recensioni degli utenti</h2>

        <div id="recensioni-container">
            <?php $__empty_1 = true; $__currentLoopData = $recensioni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recensione): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="recensione">
                    <h4>Utente: <?php echo e($recensione->username); ?></h4>
                    <p>
                        Qualità: <?php echo e($recensione->qualita); ?> |
                        Spedizione: <?php echo e($recensione->spedizione); ?> |
                        Assistenza: <?php echo e($recensione->assistenza); ?>

                    </p>
                    <p>Commento: <?php echo e($recensione->commento); ?></p>
                    <p><small>Data: <?php echo e($recensione->data->format('d/m/Y H:i')); ?></small></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>Nessuna recensione ancora.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html><?php /**PATH /Users/andreapagliarello/hw02/resources/views/recensioni.blade.php ENDPATH**/ ?>