<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset("/css/app.css")}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <title>Netflix Italia - Guarda serie TV online, Guarda film online</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container-fluid border-b">
            <!-- inizio main section (NAVBAR + CORPO CENTRALE PAGINA) -->
            <div class="main-section">
                <div class="img-gradient"></div>
                <!-- inizio navbar -->
                <nav class="navbar navbar-light">
          <span class="svg-nfLogo our-story-logo nfLogo" data-uia="netflix-header-svg-logo-noclick">
            <svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="false">
              <g id="netflix-logo">
                <path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14">
                </path>
              </g>
            </svg>
            <span class="screen-reader-text" style="display:none">Netflix</span>
          </span>

            </nav>
            <!-- TERMINE HEADER CON LA NAVBAR -->
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="authLinks redButton" data-uia="header-login-link">Accedi</a>
                </div>

            <!-- INIZIO CORPO CENTRALE  -->
                    <div class="central-text">
                        <h1 class="central-text-title">Intrattenimento totale. <br>0,99 € per i primi 30 giorni.</h1>
                        <h2 class="central-text-title-subtitle">Guarda ciò che vuoi ovunque. Disdici quando vuoi.</h2>

                        <form class="cta-form-email-reg" action="index.html" method="post" style="padding-top:13px">
                            <h3 class="email-form-title">Vuoi guardare Netflix? Inserisci l'indirizzo email per abbonarti o riattivare il tuo abbonamento.</h3>
                            <div class="email-form-box">
                                <label class="input_id" placeholder="email">
                                    <input type="email" data-uia="field-email" name="email" class="nfTextField" placeholder="Indirizzo email" tabindex="0" autocomplete="email" maxlength="50" minlength="5" dir="">
                                </label>

                            @if (Route::has('register'))
                                    <div class="button-cta">
                                        <button type="submit" name="button" class="cta-btn">
                                        <a href="{{ route('register') }}">
                                        <span id="" class="cta-btn-txt" data-uia="">INIZIA<i class="fa fa-lg fa-angle-right"></i></span>
                                    </a>
                                </button>
                            </div>

                        @endif
                        @endif

                        @endif

                    </div>
                </form>
                    </div> <!--FINE CORPO CENTRALE PAGINA   -->
            </div>  <!--FINE main section   -->
        </div>

        <div class="tv-container border-b container-fluid flex-prop-class">

            <div class="tv-container-text container-fluid">
                <h1 id="" class="our-story-card-title" data-uia="animation-card-title">Goditi Netflix sulla tua TV.</h1>
                <h2 id="" class="our-story-card-subtitle" data-uia="our-story-card-subtitle">Guarda Netflix su smart TV, Playstation, Xbox, Chromecast, Apple TV, lettori Blu-ray e molti altri dispositivi.</h2>
            </div>

            <div class="tv-container-fav container-fluid">
                <img class="tv-box-img"src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png" alt="">
                <div class="our-story-card-video">
                    <video class="our-story-card-video" autoplay="" playsinline="" muted="" loop="">
                        <source src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-tv-0819.m4v" type="video/mp4"></video>
                </div>
            </div>
        </div>

        <div class="stranger-things-box border-b container-fluid flex-prop-class">
            <div class="millie-bobby container-fluid">
                <img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/mobile-0819.jpg" alt="">
                <div class="animated-card">
                    <div class="image-amimated-card" style="width:57px">
                        <img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/boxshot.png"  alt="">
                    </div>
                    <div class="our-story-card-animation-text" style="width:auto">
                        <div id="" class="text-0" data-uia="">Stranger Things</div>
                        <div id="" class="text-1" data-uia="">Download in corso...</div>
                    </div>
                </div>
            </div>

            <div class="our-story-card-text">
                <h1 id="" class="our-story-card-title" data-uia="animation-card-title">Scarica le tue serie da guardare offline.</h1>
                <h2 id="" class="our-story-card-subtitle" data-uia="our-story-card-subtitle">Salva facilmente i tuoi preferiti così avrai <br>sempre qualcosa da guardare.</h2>
            </div>
        </div>

        <div class="tv-container border-b container-fluid flex-prop-class">
            <div class="tv-container-text container-fluid">
                <h1 id="" class="our-story-card-title" data-uia="animation-card-title">Guarda Netflix <br>ovunque.</h1>
                <h2 id="" class="our-story-card-subtitle" data-uia="our-story-card-subtitle">Cellulare, tablet, laptop e TV: scegli tu cosa usare per guardare in streaming film e serie TV senza limiti e senza spendere di più.</h2>
            </div>

            <div class="tv-container-fav container-fluid">
                <img class="mac-box-img"src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/device-pile.png" alt="">
                <video class="our-story-card-video stranger-vid" autoplay="" playsinline="" muted="" loop="">
                    <source src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-devices.m4v" type="video/mp4"></video>
            </div>
        </div>


        <div class="faq-container container-fluid">
            <div class="faq-list-box">
                <h1 class="faq-title">Domande Frequenti</h1>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-faq-item" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cos'è Netflix?
                    </button>
                    <div class="dropdown-menu btn-faq-item" aria-labelledby="dropdownMenu2">
          <span id="" class="faq-answer" data-uia="" style="width:100%">Netflix è un servizio di streaming che offre una varietà di serie TV, film, documentari pluripremiati e tanto altro su una vasta gamma di dispositivi connessi a Internet.<br><br>Guarda quello che vuoi, in qualsiasi momento e senza interruzioni pubblicitarie. Il tutto a una quota mensile ridotta. C'è sempre qualcosa di nuovo da scoprire: aggiungiamo nuovi film e serie TV ogni settimana!
          </span>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-faq-item" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quanto costa Netflix?
                    </button>
                    <div class="dropdown-menu btn-faq-item" aria-labelledby="dropdownMenu2">
          <span id="" class="faq-answer" data-uia="" style="width:100%">Guarda Netflix su smartphone, tablet, Smart TV, laptop o dispositivi per lo streaming, il tutto per un importo mensile fisso. Piani da 7,99 € a 15,99 € al mese. Nessun costo aggiuntivo, nessun contratto.
          </span>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-faq-item" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dove posso guardare Netflix?
                    </button>
                    <div class="dropdown-menu btn-faq-item" aria-labelledby="dropdownMenu2">
                        <span id="" class="faq-answer" data-uia="" style="width:100%">Guarda ciò che vuoi, dove vuoi, quando vuoi su un numero illimitato di dispositivi. Accedi al tuo account per guardare subito Netflix dal tuo computer su netflix.com oppure da qualsiasi dispositivo connesso a Internet che supporta l'app Netflix, come smart TV, smartphone, tablet, lettori multimediali per streaming e console per videogiochi.<br><br>Con l'app per iOS, Android e Windows 10 puoi anche scaricare i tuoi programmi preferiti. Usa la funzionalità di download per guardare i contenuti mentre sei in viaggio e senza connessione a Internet. Porta Netflix sempre con te.  </span>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-faq-item" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Come posso disdire Netflix?
                    </button>
                    <div class="dropdown-menu btn-faq-item" aria-labelledby="dropdownMenu2">
          <span id="" class="faq-answer" data-uia="" style="width:100%">Netflix è flessibile. Nessun contratto fastidioso e nessun impegno. Puoi facilmente disdire il tuo contratto online con due clic. Nessuna penale: attiva o disdici il tuo account in qualsiasi momento.
          </span>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-faq-item" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cosa posso guardare su Netflix?
                    </button>
                    <div class="dropdown-menu btn-faq-item" aria-labelledby="dropdownMenu2">
          <span id="" class="faq-answer" data-uia="" style="width:100%">Netflix ha un nutrito catalogo di lungometraggi, documentari, serie TV, anime, originali Netflix pluripremiati e tanto altro. Guarda tutto quello che vuoi, in qualsiasi momento.
          </span>
                    </div>
                </div>
            </div>


            <form class="cta-form-email-reg border-b central-text" action="index.html" method="post" style="padding-top:13px">
                <h3 class="email-form-title">Vuoi guardare Netflix? Inserisci l'indirizzo email per abbonarti o riattivare il tuo abbonamento.</h3>
                <div class="email-form-box">
                    <label class="input_id" placeholder="email">
                        <input type="email" data-uia="field-email" name="email" class="nfTextField" placeholder="Indirizzo email" tabindex="0" autocomplete="email" maxlength="50" minlength="5" dir="">
                    </label>
                    <div class="button-cta">
                        <button type="submit" name="button" class="cta-btn">
                            <span id="" class="cta-btn-txt" data-uia="">INIZIA</span>
                        </button>
                    </div>
                </div>
                <h3 class="behind-form-disclaimer">Solo i nuovi abbonati hanno diritto a questa offerta.</h3>
            </form>

            <div class="footer">
                <div class="sub-footer">
                    <p class="footer-top">Domande? Chiama
                        <a class="footer-top-a" data-uia="footer-link" href="tel:800-130-364">800-130-364</a>
                    </p>
                    <ul class="footer-link">
                        <li class="footer-link-item" placeholder="footer_responsive_link_faq_item"><a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/support/412" placeholder="footer_responsive_link_faq"><span id="" data-uia="data-uia-footer-label">Domande frequenti</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_help_item"><a class="footer-link" data-uia="footer-link" href="https://help.netflix.com" placeholder="footer_responsive_link_help"><span id="" data-uia="data-uia-footer-label" class="">Centro assistenza</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_account_item"><a class="footer-link" data-uia="footer-link" href="/youraccount" placeholder="footer_responsive_link_account"><span id="" data-uia="data-uia-footer-label">Account</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_media_center_item"><a class="footer-link" data-uia="footer-link" href="https://media.netflix.com/" placeholder="footer_responsive_link_media_center"><span id="" data-uia="data-uia-footer-label">Media Center</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_relations_item"><a class="footer-link" data-uia="footer-link" href="http://ir.netflix.com/" placeholder="footer_responsive_link_relations"><span id="" data-uia="data-uia-footer-label" class="">Rapporti con gli investitori</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_jobs_item"><a class="footer-link" data-uia="footer-link" href="https://jobs.netflix.com/jobs" placeholder="footer_responsive_link_jobs"><span id="" data-uia="data-uia-footer-label" class="">Opportunità di lavoro</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_gift_redeem_item"><a class="footer-link" data-uia="footer-link" href="/redeem" placeholder="footer_responsive_link_gift_redeem"><span id="" data-uia="data-uia-footer-label" class="">Riscatta carte regalo</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_gift_buy_item"><a class="footer-link" data-uia="footer-link" href="/gift-cards" placeholder="footer_responsive_link_gift_buy"><span id="" data-uia="data-uia-footer-label">Acquista carte regalo</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_waysToWatch_item"><a class="footer-link" data-uia="footer-link" href="/watch" placeholder="footer_responsive_link_waysToWatch"><span id="" data-uia="data-uia-footer-label" class="">Come guardare Netflix</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_terms_item"><a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/termsofuse" placeholder="footer_responsive_link_terms"><span id="" data-uia="data-uia-footer-label" class="">Condizioni di utilizzo</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_privacy_separate_link_item"><a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/privacy" placeholder="footer_responsive_link_privacy_separate_link"><span id="" data-uia="data-uia-footer-label">Privacy</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_cookies_separate_link_item"><a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_cookies_separate_link"><span id="" data-uia="data-uia-footer-label">Preferenze per i cookie</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_corporate_information_item"><a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/it/node/2101" placeholder="footer_responsive_link_corporate_information"><span id="" data-uia="data-uia-footer-label" class="">Informazioni sull'azienda</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_contact_us_item"><a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/contactus" placeholder="footer_responsive_link_contact_us"><span id="" data-uia="data-uia-footer-label">Contattaci</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_speed_test_item"><a class="footer-link" data-uia="footer-link" href="https://fast.com" placeholder="footer_responsive_link_speed_test"><span id="" data-uia="data-uia-footer-label">Test di velocità</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_legal_notices_item"><a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/notices" placeholder="footer_responsive_link_legal_notices"><span id="" data-uia="data-uia-footer-label">Note legali</span></a></li>
                        <li class="footer-link-item originals-link" placeholder="footer_responsive_link_netflix_originals_item"><a class="footer-link" data-uia="footer-link" href="https://www.netflix.com/it/browse/genre/839338" placeholder="footer_responsive_link_netflix_originals"><span id="" data-uia="data-uia-footer-label">Originali Netflix</span></a></li>
                    </ul>
                    <div class="dropdown-btn">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe"></i>Italiano</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Italiano</a>
                            <a class="dropdown-item" href="#">Inglese</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
        <script src="js\script.js" charset="utf-8"></script>

    </body>
</html>
