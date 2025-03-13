<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KFZ Service Ryborz</title>

    <link rel="stylesheet" href="{{ asset("css/uikit.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    <link rel="icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">

    <!--@yield('css')-->

</head>

<body>
    <header>
        <nav class="uk-navbar-container nav-responsive" uk-navbar
            uk-sticky="top: 0; animation: uk-animation-slide-top;">
            <!-- Only show logo on left for mobile -->
            <div>
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo uk-navbar-item uk-hidden@m">
            </div>
            <!-- Add mobile-specific title -->
            <div class="mobile-title uk-hidden@m">
                KFZ Service Ryborz
            </div>
            <div class="nav-flex">
                <div class="header-curve-container uk-visible@m">
                    <a class="header_text uk-navbar-item uk-logo" href="/">KFZ Service Ryborz</a>
                </div>
                <!-- Desktop menu -->
                <ul class="uk-navbar-nav navblock uk-visible@m">
                    <li class="navelement"><a href="#about">Über uns</a></li>
                    <li class="navelement"><a href="#cars">Fahrzeuge</a></li>
                    <li class="navelement"><a href="#services">Dienstleistungen</a></li>
                    <li class="navelement"><a href="#team">Das Team</a></li>
                    <li class="navelement"><a href="#projects">Unsere Projekte</a></li>
                    <li class="navelement"><a href="#hours">Öffnungszeiten</a></li>
                    <li class="navelement"><a href="#contact">Kontakt</a></li>
                </ul>
            </div>
            <div>
                <!-- Desktop logo -->
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo uk-navbar-item uk-visible@m">
                <!-- Mobile burger menu -->
                <a class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon href="#"
                    uk-toggle="target: #mobile-menu"></a>
            </div>
        </nav>

        <!-- Mobile menu offcanvas -->
        <div id="mobile-menu" uk-offcanvas="overlay: true; flip: true">
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <ul class="uk-nav uk-nav-default">
                    <li><a href="#about" uk-scroll uk-toggle="target: #mobile-menu">Über uns</a></li>
                    <li><a href="#cars" uk-scroll uk-toggle="target: #mobile-menu">Fahrzeuge</a></li>
                    <li><a href="#services" uk-scroll uk-toggle="target: #mobile-menu">Dienstleistungen</a></li>
                    <li><a href="#team" uk-scroll uk-toggle="target: #mobile-menu">Das Team</a></li>
                    <li><a href="#projects" uk-scroll uk-toggle="target: #mobile-menu">Unsere Projekte</a></li>
                    <li><a href="#hours" uk-scroll uk-toggle="target: #mobile-menu">Öffnungszeiten</a></li>
                    <li><a href="#contact" uk-scroll uk-toggle="target: #mobile-menu">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
        uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 8000; min-height: 300; max-height: 500;">

        <ul class="uk-slideshow-items">
            <li>
                <img src="{{ asset('images/slide1.jpg') }}" alt="" uk-cover class="blur-image">
                <div class="uk-position-center uk-position-small uk-text-center">
                    <h2 class="uk-margin-remove slideshow-text">Ihr Fahrzeug, unsere Leidenschaft</h2>
                    <p class="uk-margin-remove slideshow-subtext">Verlassen Sie sich auf unsere jahrelange Erfahrung
                        und
                        unser Engagement,<br>
                        um Ihr Auto in Topform zu bringen. Qualität, die Sie sehen und fühlen können.</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('images/slide2.jpg') }}" alt="" uk-cover class="blur-image">
                <div class="uk-position-center uk-position-small uk-text-center">
                    <h2 class="uk-margin-remove slideshow-text">Service, der Vertrauen schafft</h2>
                    <p class="uk-margin-remove slideshow-subtext">Ob Inspektion, Reparatur oder Unfallinstandsetzung –
                        unser Team sorgt
                        dafür, dass Sie schnell und sicher wieder auf der Straße sind.<br>Wir sind immer für Sie da.</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('images/slide3.jpg') }}" alt="" uk-cover class="blur-image">
                <div class="uk-position-center uk-position-small uk-text-center">
                    <h2 class="uk-margin-remove slideshow-text">Technologie trifft Handwerkskunst</h2>
                    <p class="uk-margin-remove slideshow-subtext">Moderne Diagnosetechnik kombiniert mit klassischer
                        Handwerkskunst –<br>für
                        Ergebnisse, die überzeugen. Wir bringen Ihr Fahrzeug auf den neuesten Stand.</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('images/slide4.jpg') }}" alt="" uk-cover class="blur-image">
                <div class="uk-position-center uk-position-small uk-text-center">
                    <h2 class="uk-margin-remove slideshow-text">Individuelle Lösungen</h2>
                    <p class="uk-margin-remove slideshow-subtext">Jedes Fahrzeug ist einzigartig - genau wie unsere
                        Lösungen.<br>
                        Von der Standardwartung bis zum Spezialumbau finden wir den richtigen Weg für Sie.</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('images/slide5.jpg') }}" alt="" uk-cover class="blur-image">
                <div class="uk-position-center uk-position-small uk-text-center">
                    <h2 class="uk-margin-remove slideshow-text">Oldtimer & Youngtimer</h2>
                    <p class="uk-margin-remove slideshow-subtext">Klassiker verdienen besondere Aufmerksamkeit.<br>
                        Mit Fachwissen und Leidenschaft pflegen wir Ihre automobilen Schätze.</p>
                </div>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
            uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
            uk-slideshow-item="next"></a>

    </div>

    <section id="about" class="uk-section uk-section-default">
        <div class="uk-container">
            <h1 class="uk-text-center"><span>Über uns</span></h1>
            <p class="uk-margin uk-text-center uk-margin-large-left uk-margin-large-right">
                Willkommen bei KFZ Service Waldemar Ryborz, Ihrer freundlichen Kfz-Werkstatt in Untermeitingen.<br>
                Seit über 14 Jahren sind wir Ihr verlässlicher Partner rund um Ihr Auto. Unser Ziel ist es, Ihnen den
                besten Service zu bieten –
                schnell, professionell und fair.<br><br>Egal, ob es um regelmäßige Wartungen, Reparaturen oder spezielle
                Anliegen geht – wir sind für Sie da.
            </p>
            <div class="uk-margin-medium-top uk-margin-medium-bottom uk-flex uk-flex-center">
                <img src="{{ asset('images/team/gruppe.jpg') }}" alt="Unser Team"
                    class="uk-width-2-3@m uk-border-rounded about-team-image">
            </div>
            <p class="uk-margin uk-text-center uk-margin-large-left uk-margin-large-right">
                Unser Team besteht aus erfahrenen Mechanikern und Fachleuten, die sich mit Herzblut um Ihr Fahrzeug
                kümmern. Wir kombinieren modernste Technologie mit traditioneller Handwerkskunst, um sicherzustellen,
                dass
                Ihr Auto in den besten Händen ist. Bei uns stehen Qualität und Kundenzufriedenheit an erster Stelle.

                Kommen Sie vorbei und überzeugen Sie sich selbst! Wir freuen uns, Sie und Ihr Fahrzeug kennenzulernen.
            </p>
        </div>
    </section>
    <section id="cars" class="uk-section uk-section-cars">
        <div class="uk-container">
            <h1 class="uk-heading-line uk-text-center"><span>Fahrzeuge</span></h1>
            <div class="uk-text-center">
                <p class="uk-text-large">
                    Auf der Suche nach einem neuen Fahrzeug? Entdecken Sie unser aktuelles Angebot an ausgewählten
                    Fahrzeugen.
                    Wir bieten regelmäßig gepflegte Gebrauchtwagen zu fairen Preisen an.
                </p>
                <div class="uk-margin-medium-top uk-flex uk-flex-center">
                    <a href="https://home.mobile.de/KFZSERVICETEILEZUBEHOER#ses" target="_blank"
                        class="uk-link-heading">
                        <img src="{{ asset('images/mobile_logo.png') }}" alt="Mobile.de" class="mobile-logo">
                        <p class="uk-text-large uk-text-bold uk-margin-small-top">Klicken Sie hier, um unser aktuelles
                            Fahrzeugangebot auf Mobile.de zu sehen</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="uk-section uk-section-default">
        <div class="uk-container">
            <h1 class="uk-heading-line uk-text-center"><span>Dienstleistungen</span></h1>
            <div class="uk-grid uk-grid-large uk-child-width-1-2@m uk-flex-center uk-flex-middle" uk-grid>
                <div class="uk-flex uk-flex-center uk-flex-middle"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/unfallinstandsetzung.png') }}" alt="Wartung"
                        class="service_img_left">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="service-container">
                        <h3>Unfallinstandsetzung</h3>
                        <p>Unsere erfahrenen Spezialisten setzen Ihr Fahrzeug nach einem Unfall fachgerecht instand –
                            von Karosseriearbeiten bis zur Lackierung. Wir sorgen dafür, dass Ihr Auto wieder sicher und
                            in Top-Zustand auf die Straße kommt.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="service-container">
                        <h3>PKW-Instandsetzung aller Fabrikate</h3>
                        <p>Wir reparieren Fahrzeuge aller Marken und Modelle mit Sorgfalt und Expertise. Unser Team
                            sorgt dafür, dass Ihr Auto wieder sicher und zuverlässig fährt.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/reperatur.png') }}" alt="Reparaturen"
                        class="service_img_right">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/lackierung.png') }}" alt="Inspektionen"
                        class="service_img_left">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="service-container">
                        <h3>Fahrzeuglackierung</h3>
                        <p>Egal ob Kratzer oder eine komplette Neulackierung – unsere Lackiererei sorgt für
                            professionelle Ergebnisse und brillante Farben. Wir verwenden hochwertige Materialien für
                            eine langanhaltende, makellose Optik.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="service-container">
                        <h3>Klimaanlagenservice</h3>
                        <p>Wir prüfen, warten und befüllen Ihre Klimaanlage, damit sie stets einwandfrei funktioniert.
                            So genießen Sie jederzeit ein angenehmes Klima in Ihrem Fahrzeug.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/klimaanlage.png') }}" alt="Reparaturen"
                        class="service_img_right">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/diagnose.png') }}" alt="Inspektionen"
                        class="service_img_left">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="service-container">
                        <h3>Fahrzeugdiagnose</h3>
                        <p>Mit modernster Diagnosetechnik spüren wir Fehler im Fahrzeug schnell und präzise auf. So
                            lassen sich Probleme frühzeitig erkennen und beheben.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="service-container">
                        <h3>HU-/AU-Service</h3>
                        <p>Wir bereiten Ihr Fahrzeug für die Hauptuntersuchung (HU) und die Abgasuntersuchung (AU) vor
                            und führen diese direkt bei uns durch. So bleibt Ihr Auto zuverlässig und straßentauglich.
                        </p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/untersuchung.png') }}" alt="Reparaturen"
                        class="service_img_right">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/reifenservice.png') }}" alt="Inspektionen"
                        class="service_img_left">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="service-container">
                        <h3>Reifenservice</h3>
                        <p>Unser Reifenservice umfasst Montage, Auswuchten und Einlagerung Ihrer Sommer- und
                            Winterreifen. Damit sorgen wir für optimale Fahrsicherheit und Komfort zu jeder Jahreszeit.
                        </p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="service-container">
                        <h3>Achsvermessung</h3>
                        <p>Mit einer präzisen Achsvermessung stellen wir sicher, dass Ihre Räder optimal ausgerichtet
                            sind. Das verbessert die Fahrstabilität und sorgt für gleichmäßigen Reifenverschleiß.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/achsvermessung.png') }}" alt="Reparaturen"
                        class="service_img_right">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/verkauf.png') }}" alt="Inspektionen"
                        class="service_img_left">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="service-container">
                        <h3>PKW An- und Verkauf</h3>
                        <p>Wir bieten Ihnen eine unkomplizierte Möglichkeit, Ihr Fahrzeug zu verkaufen oder ein neues zu
                            erwerben. Dabei legen wir Wert auf faire Preise und eine transparente Abwicklung.
                        </p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="service-container">
                        <h3>Stoßdämpfertest</h3>
                        <p>Mit modernster Prüftechnik testen wir Ihre Stoßdämpfer auf Funktion und Sicherheit. So
                            stellen wir sicher, dass Ihr Fahrwerk optimal arbeitet und maximale Sicherheit bietet.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/stossdaempfer.png') }}" alt="Stoßdämpfertest"
                        class="service_img_right">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/oldtimer.png') }}" alt="Inspektionen"
                        class="service_img_left">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="service-container">
                        <h3>H-Kennzeichen Abnahme</h3>
                        <p>Wir unterstützen Sie bei der Erlangung des H-Kennzeichens für Ihren Oldtimer. Unsere Experten
                            prüfen Ihr Fahrzeug auf die erforderlichen Kriterien und begleiten Sie durch den gesamten
                            Prozess.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="service-container">
                        <h3>Abschleppservice</h3>
                        <p>Bei einer Panne oder einem Unfall sind wir rund um die Uhr für Sie da. Unser professioneller
                            Abschleppservice bringt Ihr Fahrzeug sicher in unsere Werkstatt oder an den gewünschten
                            Zielort.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/abschleppdienst.png') }}" alt="Reparaturen"
                        class="service_img_right">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/hifi.png') }}" alt="Inspektionen"
                        class="service_img_left">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="service-container">
                        <h3>Car-Hifi-Einbau</h3>
                        <p>Von der einfachen Radio-Installation bis zur kompletten Sound-Anlage - wir realisieren Ihre
                            Car-Hifi Wünsche. Professionelle Installation und perfekte Integration in Ihr Fahrzeug
                            garantiert.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="uk-section uk-section-primary">
        <div class="uk-container">
            <h1 class="uk-heading-line uk-text-center"><span>Das Team</span></h1>
            <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-match uk-flex-center" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <img src="{{ asset('images/team/mitarbeiter1.png') }}" alt="Waldemar Ryborz"
                            class="uk-border-circle team-img">
                        <h3>Waldermar Ryborz</h3>
                        <p>Geschäftsinhaber</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <img src="{{ asset('images/team/mitarbeiter3.png') }}" alt="Manuel Würflingsdobler"
                            class="uk-border-circle team-img">
                        <h3>Manuel Würflingsdobler</h3>
                        <p>KFZ-Meister</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <img src="{{ asset('images/team/mitarbeiter2.png') }}" alt="Sebastian Wardenga"
                            class="uk-border-circle team-img">
                        <h3>Sebastian Wardenga</h3>
                        <p>Geselle</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <img src="{{ asset('images/team/mitarbeiter4.png') }}" alt="Christian Przegendza"
                            class="uk-border-circle team-img">
                        <h3>Christian Przegendza</h3>
                        <p>Geselle</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add this section between team and hours sections -->
    <section id="projects" class="uk-section uk-section-default">
        <div class="uk-container">
            <h1 class="uk-heading-line uk-text-center"><span>Unsere Projekte</span></h1>
            <div class="uk-position-relative" tabindex="-1">
                <div class="uk-slider uk-slider-container" uk-slider>
                    <div class="uk-position-relative">
                        <ul class="uk-slider-items uk-grid uk-grid-match">
                            <li class="uk-width-1-1">
                                <div class="uk-flex uk-flex-center">
                                    <div class="image-compare-container">
                                        <div class="comparison-container">
                                            <img class="before-image"
                                                src="{{ asset('images/projekte/projekt1old.jpg') }}" alt="Vorher">
                                            <img class="after-image"
                                                src="{{ asset('images/projekte/projekt1new.jpg') }}" alt="Nachher">
                                            <input type="range" min="0" max="100" value="50" class="slider">
                                            <div class="slider-button"></div>
                                            <div class="before-label">Vorher</div>
                                            <div class="after-label">Nachher</div>
                                        </div>
                                        <div class="uk-text-center uk-margin-small-top">
                                            <h3>Pontiac Firebird Trans Am</h3>
                                            <p>Beschreibung des Projekts</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-1-1">
                                <div class="uk-flex uk-flex-center">
                                    <div class="image-compare-container">
                                        <div class="comparison-container">
                                            <img class="before-image"
                                                src="{{ asset('images/projekte/projekt2old.jpg') }}" alt="Vorher">
                                            <img class="after-image"
                                                src="{{ asset('images/projekte/projekt2new.jpg') }}" alt="Nachher">
                                            <input type="range" min="0" max="100" value="50" class="slider">
                                            <div class="slider-button"></div>
                                            <div class="before-label">Vorher</div>
                                            <div class="after-label">Nachher</div>
                                        </div>
                                        <div class="uk-text-center uk-margin-small-top">
                                            <h3>Bus</h3>
                                            <p>Beschreibung des Projekts</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-1-1">
                                <div class="uk-flex uk-flex-center">
                                    <div class="image-compare-container">
                                        <div class="comparison-container">
                                            <img class="before-image"
                                                src="{{ asset('images/projekte/projekt3old.jpg') }}" alt="Vorher">
                                            <img class="after-image"
                                                src="{{ asset('images/projekte/projekt3new.jpg') }}" alt="Nachher">
                                            <input type="range" min="0" max="100" value="50" class="slider">
                                            <div class="slider-button"></div>
                                            <div class="before-label">Vorher</div>
                                            <div class="after-label">Nachher</div>
                                        </div>
                                        <div class="uk-text-center uk-margin-small-top">
                                            <h3>BMW</h3>
                                            <p>Beschreibung des Projekts</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-1-1">
                                <div class="uk-flex uk-flex-center">
                                    <div class="image-compare-container">
                                        <div class="comparison-container">
                                            <img class="before-image"
                                                src="{{ asset('images/projekte/projekt4old.jpg') }}" alt="Vorher">
                                            <img class="after-image"
                                                src="{{ asset('images/projekte/projekt4new.jpg') }}" alt="Nachher">
                                            <input type="range" min="0" max="100" value="50" class="slider">
                                            <div class="slider-button"></div>
                                            <div class="before-label">Vorher</div>
                                            <div class="after-label">Nachher</div>
                                        </div>
                                        <div class="uk-text-center uk-margin-small-top">
                                            <h3>Corvette C6</h3>
                                            <p>Beschreibung des Projekts</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-1-1">
                                <div class="uk-flex uk-flex-center">
                                    <div class="image-compare-container">
                                        <div class="comparison-container">
                                            <img class="before-image"
                                                src="{{ asset('images/projekte/projekt5old.jpg') }}" alt="Vorher">
                                            <img class="after-image"
                                                src="{{ asset('images/projekte/projekt5new.jpg') }}" alt="Nachher">
                                            <input type="range" min="0" max="100" value="50" class="slider">
                                            <div class="slider-button"></div>
                                            <div class="before-label">Vorher</div>
                                            <div class="after-label">Nachher</div>
                                        </div>
                                        <div class="uk-text-center uk-margin-small-top">
                                            <h3>Chevrolet Camaro V8</h3>
                                            <p>Beschreibung des Projekts</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Add more projects here with the same structure -->
                        </ul>
                    </div>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                        uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                        uk-slider-item="next"></a>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                </div>
            </div>
        </div>
    </section>

    <section id="hours" class="uk-section uk-section-muted">
        <div class="uk-container">
            <h1 class="uk-heading-line uk-text-center"><span>Öffnungszeiten</span></h1>
            <div class="uk-flex uk-flex-center">
                <table class="uk-table uk-table-divider uk-flex uk-flex-center">
                    <tr>
                        <td class="uk-width-small" style="font-weight: bold;">Montag</td>
                        <td>08:00 - 13:00 Uhr<br>14:00 - 18:00 Uhr</td>
                    </tr>
                    <tr>
                        <td class="uk-width-small" style="font-weight: bold;">Dienstag</td>
                        <td>08:00 - 13:00 Uhr<br>14:00 - 18:00 Uhr</td>
                    </tr>
                    <tr>
                        <td class="uk-width-small" style="font-weight: bold;">Mittwoch</td>
                        <td>08:00 - 13:00 Uhr<br>14:00 - 18:00 Uhr</td>
                    </tr>
                    <tr>
                        <td class="uk-width-small" style="font-weight: bold;">Donnerstag</td>
                        <td>08:00 - 13:00 Uhr<br>14:00 - 18:00 Uhr</td>
                    </tr>
                    <tr>
                        <td class="uk-width-small" style="font-weight: bold;">Freitag</td>
                        <td>08:00 - 13:00 Uhr<br>14:00 - 16:00 Uhr</td>
                    </tr>
                    <tr>
                        <td class="uk-width-small" style="font-weight: bold;">Samstag</td>
                        <td>Geschlossen</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <section id="contact" class="uk-section uk-section-secondary">
        <div class="uk-container">
            <h1 class="uk-heading-line uk-text-center"><span>Kontakt</span></h1>
            <div class="uk-grid uk-child-width-1-2@m uk-flex-center" uk-grid>
                <div>
                    <h3>Termin gefällig? Rufen Sie uns gerne an.</h3>
                    <p>
                        KFZ Service Waldemar Ryborz<br>
                        Schwabenstraße 48<br>
                        86836 Untermeitingen<br>
                        Telefon: <a href="tel:+4982321846279">+498232 1846279</a><br>
                        Mobil: <a href="tel:+491728446064">+49172 8446064</a><br>
                        E-Mail: <a href="mailto:kfz.ryborz@t-online.de">kfz.ryborz@t-online.de</a>
                    </p>
                </div>
                <div class="uk-flex uk-flex-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5322.345021763969!2d10.814533676613335!3d48.164756349268494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479c1f79709806af%3A0xaa36f0e77ea54516!2sKFZ%20Service%20Waldemar%20Ryborz!5e0!3m2!1sen!2sde!4v1731340143613!5m2!1sen!2sde"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <div id="cookie-banner" class="cookie-banner uk-position-fixed uk-position-bottom uk-width-1-1">
        <div class="uk-container uk-padding-small">
            <div class="uk-grid uk-flex-middle" uk-grid>
                <div class="uk-width-3-4@m">
                    <p class="uk-margin-remove">Diese Website verwendet Cookies, um Ihnen die bestmögliche
                        Funktionalität bieten zu können. Durch die weitere Nutzung der Webseite stimmen Sie der
                        Verwendung von Cookies zu.</p>
                </div>
                <div class="uk-width-1-4@m uk-flex uk-flex-middle uk-flex-center">
                    <button class="uk-button uk-button-primary" onclick="acceptCookies()">Akzeptieren</button>
                    <a href="#privacy-modal" class="uk-button uk-button-link uk-margin-small-left" uk-toggle>Mehr
                        erfahren</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset("js/uikit.min.js") }}"></script>
    <script src="{{ asset("js/uikit-icons.min.js") }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var navbarHeight = document.querySelector("nav.uk-navbar-container").offsetHeight;
            document.querySelectorAll("a[href^='#']").forEach(anchor => {
                anchor.addEventListener("click", function (e) {
                    e.preventDefault();
                    var target = document.querySelector(this.getAttribute("href"));
                    var offsetTop = target.offsetTop - navbarHeight;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: "smooth"
                    });
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll("a[href^='#']").forEach(anchor => {
                anchor.addEventListener("click", function (e) {
                    e.preventDefault();
                    var target = document.querySelector(this.getAttribute("href"));
                    target.scrollIntoView({ behavior: 'smooth' });
                });
            });
        });

        // Cookie consent handling
        function acceptCookies() {
            document.getElementById('cookie-banner').style.display = 'none';
            // Set cookie for 1 year
            let date = new Date();
            date.setFullYear(date.getFullYear() + 1);
            document.cookie = "cookieConsent=accepted; expires=" + date.toUTCString() + "; path=/";
        }

        // Add this function to delete the cookie (for testing)
        function deleteCookieConsent() {
            document.cookie = "cookieConsent=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            document.getElementById('cookie-banner').style.display = 'block';
        }

        // Check if cookie consent already given
        window.addEventListener('load', function () {
            if (!document.cookie.includes('cookieConsent=accepted')) {
                document.getElementById('cookie-banner').style.display = 'block';
            }
        });
    </script>

    <!-- Add this somewhere for testing (you can remove it later) -->
    <button onclick="deleteCookieConsent()" style="position: fixed; bottom: 10px; right: 10px; z-index: 1001;">
        Reset Cookie Consent
    </button>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <h2 class="uk-modal-title">Datenschutzerklärung</h2>
            <div class="uk-margin-medium-bottom uk-height-large uk-overflow-auto">
                <h3>1. Datenschutz auf einen Blick</h3>
                <h4>Allgemeine Hinweise</h4>
                <p>Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren personenbezogenen Daten
                    passiert, wenn Sie diese Website besuchen. Personenbezogene Daten sind alle Daten, mit denen Sie
                    persönlich identifiziert werden können.</p>

                <h4>Datenerfassung auf dieser Website</h4>
                <p><strong>Wer ist verantwortlich für die Datenerfassung auf dieser Website?</strong></p>
                <p>Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten
                    können Sie dem Impressum dieser Website entnehmen.</p>

                <h4>Wie erfassen wir Ihre Daten?</h4>
                <p>Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen. Hierbei kann es sich z. B.
                    um Daten handeln, die Sie in ein Kontaktformular eingeben.</p>
                <p>Andere Daten werden automatisch oder nach Ihrer Einwilligung beim Besuch der Website durch unsere
                    IT-Systeme erfasst. Das sind vor allem technische Daten (z. B. Internetbrowser, Betriebssystem oder
                    Uhrzeit des Seitenaufrufs).</p>

                <h4>Wofür nutzen wir Ihre Daten?</h4>
                <p>Ein Teil der Daten wird erhoben, um eine fehlerfreie Bereitstellung der Website zu gewährleisten.
                    Andere Daten können zur Analyse Ihres Nutzerverhaltens verwendet werden.</p>

                <h4>Welche Rechte haben Sie bezüglich Ihrer Daten?</h4>
                <p>Sie haben jederzeit das Recht, unentgeltlich Auskunft über Herkunft, Empfänger und Zweck Ihrer
                    gespeicherten personenbezogenen Daten zu erhalten. Sie haben außerdem ein Recht, die Berichtigung
                    oder Löschung dieser Daten zu verlangen. Wenn Sie eine Einwilligung zur Datenverarbeitung erteilt
                    haben, können Sie diese Einwilligung jederzeit für die Zukunft widerrufen. Außerdem haben Sie das
                    Recht, unter bestimmten Umständen die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten
                    zu verlangen.</p>

                <h3>2. Cookies</h3>
                <p>Unsere Website verwendet Cookies. Das sind kleine Textdateien, die Ihr Webbrowser auf Ihrem Endgerät
                    speichert. Cookies helfen uns dabei, unser Angebot nutzerfreundlicher, effektiver und sicherer zu
                    machen.</p>
                <p>Einige Cookies sind "Session-Cookies." Solche Cookies werden nach Ende Ihrer Browser-Sitzung von
                    selbst gelöscht. Hingegen bleiben andere Cookies auf Ihrem Endgerät bestehen, bis Sie diese selbst
                    löschen. Solche Cookies helfen uns, Sie bei Rückkehr auf unserer Website wiederzuerkennen.</p>
                <p>Mit einem modernen Webbrowser können Sie das Setzen von Cookies überwachen, einschränken oder
                    unterbinden. Viele Webbrowser lassen sich so konfigurieren, dass Cookies mit dem Schließen des
                    Programms von selbst gelöscht werden.</p>

                <h3>3. Kontaktformular und E-Mail-Kontakt</h3>
                <p>Wenn Sie uns per Kontaktformular oder E-Mail Anfragen zukommen lassen, werden Ihre Angaben aus dem
                    Anfrageformular inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung der Anfrage
                    und für den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre
                    Einwilligung weiter.</p>
            </div>
            <div class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Schließen</button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sliders = document.querySelectorAll('.slider');

            sliders.forEach(slider => {
                const container = slider.closest('.comparison-container');
                const afterImage = container.querySelector('.after-image');
                const sliderButton = container.querySelector('.slider-button');

                function updateImage(e) {
                    let pos = 0;

                    if (e.type === 'input') {
                        pos = e.target.value;
                    } else {
                        const rect = container.getBoundingClientRect();
                        pos = ((e.pageX - rect.left) / rect.width) * 100;
                    }

                    pos = Math.min(Math.max(pos, 0), 100);
                    afterImage.style.clipPath = `polygon(0 0, ${pos}% 0, ${pos}% 100%, 0 100%)`;
                    sliderButton.style.left = `${pos}%`;
                }

                // Initial position - set to 0 for left side
                updateImage({ type: 'input', target: { value: 0 } });
                slider.value = 0; // Set slider value to 0

                // Event listeners
                slider.addEventListener('input', updateImage);
                slider.addEventListener('change', updateImage);
                slider.addEventListener('mousemove', function (e) {
                    if (e.buttons > 0) {
                        updateImage(e);
                    }
                });

                // Touch event support
                slider.addEventListener('touchmove', function (e) {
                    const touch = e.touches[0];
                    const rect = container.getBoundingClientRect();
                    const pos = ((touch.pageX - rect.left) / rect.width) * 100;
                    updateImage({ pageX: touch.pageX });
                });
            });
        });
    </script>
</body>

<footer class="footer">
    <div class="uk-container uk-container-expand">
        <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid>
            <div>
                <h4>Gehe zu</h4>
                <ul class="uk-list">
                    <li><a href="#about">Über uns</a></li>
                    <li><a href="#services">Dienstleistungen</a></li>
                    <li><a href="#team">Das Team</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                    <li><a href="#hours">Öffnungszeiten</a></li>
                </ul>
            </div>
            <div>
                <h4>Kontakt</h4>
                <p>
                    KFZ Service Waldemar Ryborz<br>
                    Schwabenstraße 48<br>
                    86836 Untermeitingen<br>
                    Telefon: <a href="tel:+4982321846279">+498232 1846279</a><br>
                    E-Mail: <a href="mailto:kfz.ryborz@t-online.de">kfz.ryborz@t-online.de</a>
                </p>
            </div>
            <div>
                <h4>Öffnungszeiten</h4>
                <table class="uk-table uk-table-divider">
                    <tr>
                        <td class="uk-width-small" style="font-weight: bold;">Montag - Donnerstag</td>
                        <td>08:00 - 13:00 Uhr<br>14:00 - 18:00 Uhr</td>
                    </tr>
                    <tr>
                        <td class="uk-width-small" style="font-weight: bold;">Freitag</td>
                        <td>08:00 - 13:00 Uhr<br>14:00 - 16:00 Uhr</td>
                    </tr>
                    <tr>
                        <td class="uk-width-small" style="font-weight: bold;">Samstag</td>
                        <td>Geschlossen</td>
                    </tr>
                </table>
            </div>
            <div>
                <h4>Folgen Sie uns</h4>
                <div class="uk-flex uk-flex-middle">
                    <a href="https://www.instagram.com/kfz_ryborz/" target="_blank">
                        <img src="{{ asset('images/insta_logo.png') }}" alt="Instagram" class="social-icon">
                    </a>
                    <a href="https://home.mobile.de/KFZSERVICETEILEZUBEHOER#ses" target="_blank">
                        <img src="{{ asset('images/mobile_logo_small.png') }}" alt="Mobile" class="social-icon">
                    </a>
                </div>
                <h4>Rechtliches</h4>
                <ul class="uk-list">
                    <li><a href="#impressum">Impressum</a></li>
                    <li><a href="#privacy">Datenschutz</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>



</html>