<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vinted Replica</title>
  <link rel="stylesheet" href="<?php echo e(url('css/index.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('css/home.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('css/menuhome.css')); ?>">
  <script src="<?php echo e(url('js/home.js')); ?>" defer></script>
  <script src="<?php echo e(url('js/funzione_profilo_carrello.js')); ?>" defer></script>
  <script src="<?php echo e(url('js/funzione_sottomenu.js')); ?>" defer></script>
  <script src="<?php echo e(url('js/api_esterne.js')); ?>" defer></script>
  <script src="<?php echo e(url('js/funzioni_index_home.js')); ?>" defer></script>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
  
</head>
<body>
<header>
  <nav class="nav_sup">
    <div id="logo">
      <strong>Vinted</strong>
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
                <img src="<?php echo e(url('image/tutti.png')); ?>" alt="Icona Tutti" />
                Tutti
            </a>      
            <a data-subsubmenu="abbigliamentogriffati">
                <img src="<?php echo e(url('image/vestiti.png')); ?>" alt="Icona Abbigliamento" />
                Abbigliamento Griffato
            </a>
            <a data-subsubmenu="borsegriffate">
                <img src="<?php echo e(url('image/borse.png')); ?>" alt="Icona Borse" />
                Borse Griffate
            </a>
            <a data-subsubmenu="scarpegriffate">
                <img src="<?php echo e(url('image/scarpe.png')); ?>" alt="Icona Scarpe" />
                Scarpe Griffate
            </a>
            <a data-subsubmenu="accessorigriffati">
                <img src="<?php echo e(url('image/accessori.png')); ?>" alt="Icona Accessori" />
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
            <img src="<?php echo e(url('image/tutti.png')); ?>" alt="Icona Tutti" />
              Tutti
          </a>
          <a data-subsubmenu="abbigliamentobambini">
              <img src="<?php echo e(url('image/vestiti.png')); ?>" alt="Icona Abbigliamento" />
              Abbigliamento
          </a>
          <a data-subsubmenu="scarpebambini">
              <img src="<?php echo e(url('image/scarpe.png')); ?>" alt="Icona Scarpe" />
              Scarpe
          </a>
          <a data-subsubmenu="giocattolibambini">
              <img src="<?php echo e(url('image/giocattoli.png')); ?>" alt="Icona Giocattoli" />
              Giocattoli
          </a>
          <a data-subsubmenu="accessoribambini">
              <img src="<?php echo e(url('image/accessori.png')); ?>" alt="Icona Accessori" />
              Accessori
          </a>
          <a data-subsubmenu="pannibambini">
              <img src="<?php echo e(url('image/pannolini.png')); ?>" alt="Icona Pannolini" />
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
              <img src="<?php echo e(url('image/tutti.png')); ?>" alt="Icona Tutti" />
              Tutti
          </a>
          <a data-subsubmenu="arredamentocasa">
              <img src="<?php echo e(url('image/arredamento.png')); ?>" alt="Icona Arredamento" />
              Arredamento Casa
          </a>
          <a data-subsubmenu="elettrodomesticicasa">
              <img src="<?php echo e(url('image/elettrodomestici.png')); ?>" alt="Icona Elettrodomestici" />
              Elettrodomestici
          </a>
          <a data-subsubmenu="illuminazionecasa">
              <img src="<?php echo e(url('image/illuminazione.png')); ?>" alt="Icona Illuminazione" />
              Illuminazione
          </a>
          <a data-subsubmenu="decocasa">
              <img src="<?php echo e(url('image/decorazioni.png')); ?>" alt="Icona Decorazioni" />
              Decorazioni Casa
          </a>
          <a data-subsubmenu="tavola">
              <img src="<?php echo e(url('image/tavola.png')); ?>" alt="Icona Tavola" />
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
            <img src="<?php echo e(url('image/tutti.png')); ?>" alt="Icona Tutti" />
            Tutti
        </a>
        <a data-subsubmenu="smartphone">
            <img src="<?php echo e(url('image/smartphone.png')); ?>" alt="Icona Smartphone" />
            Smartphone
        </a>
        <a data-subsubmenu="computer">
            <img src="<?php echo e(url('image/computer.png')); ?>" alt="Icona Computer" />
            Computer
        </a>
        <a data-subsubmenu="televisori">
            <img src="<?php echo e(url('image/tv.png')); ?>" alt="Icona Televisori" />
            Televisori
        </a>
        <a data-subsubmenu="audio">
            <img src="<?php echo e(url('image/audio.png')); ?>" alt="Icona Audio" />
            Audio
        </a>
        <a data-subsubmenu="fotocamere">
            <img src="<?php echo e(url('image/fotocamera.png')); ?>" alt="Icona Fotocamere" />
            Fotocamere
        </a>
        <a data-subsubmenu="elettrodomestici">
            <img src="<?php echo e(url('image/elettrodomestici.png')); ?>" alt="Icona Elettrodomestici" />
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
            <img src="<?php echo e(url('image/tutti.png')); ?>" alt="Icona Tutti" />
            Tutti
        </a>
        <a data-subsubmenu="film">
            <img src="<?php echo e(url('image/film.png')); ?>" alt="Icona Film" />
            Film
        </a>
        <a data-subsubmenu="musica">
            <img src="<?php echo e(url('image/musica.png')); ?>" alt="Icona Musica" />
            Musica
        </a>
        <a data-subsubmenu="giochi">
            <img src="<?php echo e(url('image/giochi.png')); ?>" alt="Icona Giochi" />
            Giochi
        </a>
        <a data-subsubmenu="libri">
            <img src="<?php echo e(url('image/libri.png')); ?>" alt="Icona Libri" />
            Libri
        </a>
        <a data-subsubmenu="eventi">
            <img src="<?php echo e(url('image/eventi.png')); ?>" alt="Icona Eventi" />
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
            <img src="<?php echo e(url('image/tutti.png')); ?>" alt="Icona Tutti" />
            Tutti
        </a>
        <a data-subsubmenu="cani">
            <img src="<?php echo e(url('image/cani.png')); ?>" alt="Icona Cani" />
            Cani
        </a>
        <a data-subsubmenu="gatti">
            <img src="<?php echo e(url('image/gatti.png')); ?>" alt="Icona Gatti" />
            Gatti
        </a>
        <a data-subsubmenu="pesci">
            <img src="<?php echo e(url('image/pesci.png')); ?>" alt="Icona Pesci" />
            Pesci
        </a>
        <a data-subsubmenu="uccelli">
            <img src="<?php echo e(url('image/uccelli.png')); ?>" alt="Icona Uccelli" />
            Uccelli
        </a>
        <a data-subsubmenu="piccoli-animali">
            <img src="<?php echo e(url('image/piccoli-animali.png')); ?>" alt="Icona Piccoli Animali" />
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

<section class="section1">
  <img src="<?php echo e(url('image/home2.png')); ?>" class="home">
  <div class="box-interno">
    <p id="libera">E' arrivato il momento di <br/>
        liberare l'armadio!
    </p>
    <a class="button2"><strong>Vendi Subito</strong></a>
    <a id="scopri">Scopri come funziona</a>
  </div>
</section>


<div class="promo-box">
  <div class="promo-testo">
      <p class="novita">NOVITÀ</p>
      <h2>Vendi articoli di elettronica senza costi</h2>
      <button>Inizia a guadagnare</button>
  </div>
</div>

<section id="search-products">
  <form id="form-products" autocomplete="off">
    <div class="search">
      <label for="search-input-products">Cerca prodotto</label>
      <input type="text" id="search-input-products" name="search" class="searchBar">
      <input type="submit" value="Cerca">
    </div>
  </form>
</section>

<section id="results-products">
</section>



<div class="api-search">
  <h2>Non ti ricordi il nome di un Libro? Cerca qui!</h2>
  <form id="form-library">
    <label for="search">Testo da cercare:</label>
    <input type='text' id='search' placeholder="Es. Tolkien o The Hobbit">
    
    <label for="criteria">Cerca per:</label>
    <select id="criteria">
      <option value="author">Autore</option>
      <option value="title">Titolo</option>
    </select>

    <label for="language-api">Lingua (opzionale):</label>
    <input type='text' id='language-api' placeholder="Codice ISO">

    <input type='submit' id='submit' value='Cerca'>
  </form>
</div>

<section id="library-view"></section>


<div class="testo-feed">
  <h2>Feed</h2>
</div>

<div id="flex-container">
  <div class="box">
    <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed1.jpeg')); ?>" />
      <div class="likes" data-likes="43">
        <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
        <span>43</span>
      </div>
    </div>
    <div class="div-testo">
      <p><a>Anello Riviera 5 diamanti oro 18 carati</a></p>
      <p><a>16,9 mm Ø / 13,5 · Ottime</a></p>
      <div class="prezzo">38,00€</div>
      <div class="prezzo-incl">40,60€ incl.</div>
    </div>
  </div>

  <div class="box">
    <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed2.jpeg')); ?>" />
      <div class="likes" data-likes="24">
        <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
        <span>24</span>
      </div>
    </div>
    <div class="div-testo">
      <p><a>GUESS</a></p>
      <p><a>Nuovo con cartellino</a></p>
      <div class="prezzo">35,00€</div>
      <div class="prezzo-incl">37,45€ incl.</div>
    </div>
  </div>

  <div class="box">
    <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed3.jpeg')); ?>" />
      <div class="likes" data-likes="24">
        <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
        <span>24</span>
      </div>
    </div>
    <div class="div-testo">
      <p><a>Max Mara</a></p>
      <p><a>L / IT 44 / EU 40 · Nuovo senza cart...</a></p>
      <div class="prezzo">39,00€</div>
      <div class="prezzo-incl">41,60€ incl.</div>
    </div>
  </div>

  <div class="box">
    <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed4.jpeg')); ?>" />
      <div class="likes" data-likes="48">
        <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
        <span>48</span>
      </div>
    </div>
    <div class="div-testo">
      <p><a>Tommy Hilfiger</a></p>
      <p><a>XL · Ottime</a></p>
      <div class="prezzo">13,00€</div>
      <div class="prezzo-incl">14,35€ incl.</div>
    </div>
  </div>

  <div class="box">
    <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed5.jpeg')); ?>" />
      <div class="likes" data-likes="21">
        <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
        <span>21</span>
      </div>
    </div>
    <div class="div-testo">
      <p><a>Barbie</a></p>
      <p><a>Taglia unica · Ottime</a></p>
      <div class="prezzo">2,00€</div>
      <div class="prezzo-incl">2,80€ incl.</div>
    </div>
  </div>
</div>

<div id="flex-container">
  <div class="box">
    <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed6.jpeg')); ?>" />
      <div class="likes" data-likes="43">
        <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
        <span>43</span>
      </div>
    </div>
    <div class="div-testo">
      <p><a>Nike</a></p>
      <p><a>XS / IT 38 / EU 34 · Ottime</a></p>
      <div class="prezzo">5,00€</div>
      <div class="prezzo-incl">5,95€ incl.</div>
    </div>
  </div>

  <div class="box">
    <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed7.jpeg')); ?>" />
      <div class="likes" data-likes="15">
        <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
        <span>15</span>
      </div>
    </div>
    <div class="div-testo">
      <p><a>Tiffany & Co.</a></p>
      <p><a>Ottime</a></p>
      <div class="prezzo">210,00€</div>
      <div class="prezzo-incl">210,70€ incl.</div>
    </div>
  </div>

  <div class="box">
    <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed8.jpeg')); ?>" />
      <div class="likes" data-likes="14">
        <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
        <span>14</span>
      </div>
    </div>
    <div class="div-testo">
      <p><a>Borsa con tracolla</a></p>
      <p><a>Nuovo senza cartellino</a></p>
      <div class="prezzo">16,00€</div>
      <div class="prezzo-incl">17,50€ incl.</div>
    </div>
  </div>

  <div class="box">
    <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed9.jpeg')); ?>" />
      <div class="likes" data-likes="43">
        <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
        <span>43</span>
      </div>
    </div>
    <div class="div-testo">
      <p><a>Gucci</a></p>
      <p><a>Ottime</a></p>
      <div class="prezzo">150,00€</div>
      <div class="prezzo-incl">158,20€ incl.</div>
    </div>
  </div>

  <div class="box">
    <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed10.jpeg')); ?>" />
      <div class="likes" data-likes="43">
        <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
        <span>43</span>
      </div>
    </div>
    <div class="div-testo">
      <p><a>Replay</a></p>
      <p><a>L / IT 44 / EU 40 · Ottime</a></p>
      <div class="prezzo">14,00€</div>
      <div class="prezzo-incl">15,40€ incl.</div>
    </div>
  </div>
</div>

<div class="hidden">
  <div id="flex-container-extra">
    <div class="box">
      <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed11.jpeg')); ?>" />
        <div class="likes" data-likes="3">
          <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
          <span>3</span>
        </div>
      </div>
      <div class="div-testo">
        <p><a>Playstation</a></p>
        <p><a>Ottime</a></p>
        <div class="prezzo">60,00€</div>
        <div class="prezzo-incl">63,70€ incl.</div>
      </div>
    </div>

    <div class="box">
      <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed12.jpeg')); ?>" />
        <div class="likes" data-likes="7">
          <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
          <span>7</span>
        </div>
      </div>
      <div class="div-testo">
        <p><a>LEGO</a></p>
        <p><a>Nuovo senza cartellino</a></p>
        <div class="prezzo">35,00€</div>
        <div class="prezzo-incl">37,45€ incl.</div>
      </div>
    </div>

    <div class="box">
      <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed13.jpeg')); ?>" />
        <div class="likes" data-likes="14">
          <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
          <span>14</span>
        </div>
      </div>
      <div class="div-testo">
        <p><a>Nike</a></p>
        <p><a>XXL · Ottime</a></p>
        <div class="prezzo">150,00€</div>
        <div class="prezzo-incl">158,20€ incl.</div>
      </div>
    </div>

    <div class="box">
      <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed14.jpeg')); ?>" />
        <div class="likes" data-likes="37">
          <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
          <span>37</span>
        </div>
      </div>
      <div class="div-testo">
        <p><a>Clementoni</a></p>
        <p><a>8 anni / 128 cm · Ottime</a></p>
        <div class="prezzo">8,00€</div>
        <div class="prezzo-incl">9,10€ incl.</div>
      </div>
    </div>

    <div class="box">
      <div class="div-img">
      <img src="<?php echo e(url('image/fotofeed15.jpeg')); ?>" />
        <div class="likes" data-likes="4">
          <img src="<?php echo e(url('image/like.png')); ?>" alt="cuore" />
          <span>4</span>
        </div>
      </div>
      <div class="div-testo">
        <p><a>Nike</a></p>
        <p><a>L · Nuovo con cartellino</a></p>
        <div class="prezzo">20,00€</div>
        <div class="prezzo-incl">21,70€ incl.</div>
      </div>
    </div>
  </div>
</div>

<div id="mostra-altro">
  <a>Mostra altri articoli</a>
</div>

<div class="box-recensioni">
  <h3>Lascia la tua opinione</h3>
  <a href="<?php echo e(url('recensioni')); ?>" class="link-recensioni">Scrivi una recensione</a>
</div>


<div class="cerchio-vinted">
  <img src="<?php echo e(url('image/soldi.png')); ?>" alt="Icona Soldi" />
</div>

  <div class="wrapper hidden">
    <form id="currency-form">
      <div class="app-details">
        <h1 class="app-title">Cambio di Valuta</h1>
      </div>
      <label for="amount">Prezzo:</label>
      <input type="number" id="amount" value="100" />
      <div class="dropdowns">
        <select id="from-currency-select"></select>
        <select id="to-currency-select"></select>
      </div>
      <button type="submit" id="convert-button">Converti</button>
      <p id="result"></p>
    </form>
  </div>

<footer>
    <div class="footer-top">
        <div class="footer-section">
          <h3>Vinted</h3>
          <p><a>Chi siamo</a></p>
          <p><a>Lavori</a></p>
          <p><a>La sostenibilità</a></p>
          <p><a>Stampa</a></p>
          <p><a>Pubblicità</a></p>
        </div>

      <div class="footer-section">
        <h3>Scopri</h3>
        <p><a>Come funziona</a></p>
        <p><a>Verifica dell'articolo</a></p>
        <p><a>App mobili</a></p>
        <p><a>Notizie</a></p>
        <p><a>Vinted Pro</a></p>
        <p><a>Guida a Vinted Pro</a></p>
      </div>

      <div class="footer-section">
        <h3>Assistenza</h3>
        <p><a>Centro assistenza</a></p>
        <p><a>Vendere</a></p>
        <p><a>Acquistare</a></p>
        <p><a>Sicurezza e affidabilità</a></p>
      </div>
  </div>

  <div class="footer-divisore"></div>

  <div class="footer-middle">
    <div class="social-icons">
      <a href="https://www.facebook.com/vinted">
        <img src="<?php echo e(url('image/facebook.png')); ?>" alt="Facebook" />
      </a>
      <a href="https://www.linkedin.com/company/vinted">
        <img src="<?php echo e(url('image/linkedin.png')); ?>" alt="LinkedIn" />
      </a>
      <a href="https://www.instagram.com/vinted/">
        <img src="<?php echo e(url('image/instagram.png')); ?>" alt="Instagram" />
      </a>
    </div>
    <div class="app-download">
      <a href="https://play.google.com/store/apps/details?id=fr.vinted&referrer=adjust_reftag%3DcELWNEws5VQE6%26utm_source%3DDesktop_vinted.fr%257Capp_landing%257Clongterm%257Cbadge_android%257Cdownload%26utm_medium%3Dapp_landing">
        <img src="<?php echo e(url('image/googleplay.png')); ?>" class="app-badge" alt="Google Play Store" />
      </a>
      <a href="https://apps.apple.com/us/app/vinted-sell-vintage-clothes/id632064380?mt=8&pt=1493347&ct=Desktop_vinted.fr%7Capp_landing%7Clongterm%7Cbadge_ios%7Cdownload">
        <img src="<?php echo e(url('image/appstore.png')); ?>" class="app-badge" alt="App Store" />
      </a>
    </div>
  </div>


  <div class="footer-divisore"></div>

  <div class="footer-bottom">
    <a>Informativa sulla privacy</a>
    <a>Informativa sui cookie</a>
    <a>Impostazioni cookie</a>
    <a>Termini e condizioni</a>
    <a>La nostra piattaforma</a>
    <a>Termini e condizioni di Vinted Pro</a>
  </div>

</footer>
  
</body>
</html><?php /**PATH /Users/andreapagliarello/hw02/resources/views/home.blade.php ENDPATH**/ ?>