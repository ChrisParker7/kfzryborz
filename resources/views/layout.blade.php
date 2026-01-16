<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>KFZ Service Waldemar Ryborz - Meisterwerkstatt in Untermeitingen | Auto Reparatur & Lackierung</title>
    <meta name="title" content="KFZ Service Waldemar Ryborz - Meisterwerkstatt in Untermeitingen">
    <meta name="description"
        content="KFZ Meisterwerkstatt in Untermeitingen ✓ Reparatur ✓ Lackierung ✓ Karosseriearbeiten ✓ TÜV/AU ✓ Unfallinstandsetzung. Professioneller Service für Ihr Fahrzeug. Jetzt Termin vereinbaren!">
    <meta name="keywords"
        content="KFZ Werkstatt Untermeitingen, Auto Reparatur Augsburg, Lackierung, Karosseriearbeiten, TÜV, HU, AU, Unfallinstandsetzung, Meisterwerkstatt, Fahrzeuglackierung, Waldemar Ryborz">
    <meta name="author" content="KFZ Service Waldemar Ryborz">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://kfz-ryborz.de/">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://kfz-ryborz.de/">
    <meta property="og:title" content="KFZ Service Waldemar Ryborz - Meisterwerkstatt in Untermeitingen">
    <meta property="og:description"
        content="KFZ Meisterwerkstatt in Untermeitingen ✓ Reparatur ✓ Lackierung ✓ Karosseriearbeiten ✓ TÜV/AU. Professioneller Service für Ihr Fahrzeug.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:locale" content="de_DE">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://kfz-ryborz.de/">
    <meta property="twitter:title" content="KFZ Service Waldemar Ryborz - Meisterwerkstatt in Untermeitingen">
    <meta property="twitter:description"
        content="KFZ Meisterwerkstatt in Untermeitingen ✓ Reparatur ✓ Lackierung ✓ Karosseriearbeiten ✓ TÜV/AU">
    <meta property="twitter:image" content="{{ asset('images/logo.png') }}">

    <!-- Geo Tags -->
    <meta name="geo.region" content="DE-BY">
    <meta name="geo.placename" content="Untermeitingen">
    <meta name="geo.position" content="48.1764;10.8558">
    <meta name="ICBM" content="48.1764, 10.8558">

    <!-- Schema.org structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "AutomotiveBusiness",
        "name": "KFZ Service Waldemar Ryborz",
        "image": "{{ asset('images/logo.png') }}",
        "description": "KFZ Meisterwerkstatt in Untermeitingen - Reparatur, Lackierung, Karosseriearbeiten, TÜV/AU, Unfallinstandsetzung",
        "@id": "https://kfz-ryborz.de",
        "url": "https://kfz-ryborz.de",
        "telephone": "+4982321846279",
        "email": "kfz.ryborz@t-online.de",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Schwabenstraße 48",
            "addressLocality": "Untermeitingen",
            "postalCode": "86836",
            "addressCountry": "DE"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 48.1764,
            "longitude": 10.8558
        },
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday"],
                "opens": "08:00",
                "closes": "18:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Friday",
                "opens": "08:00",
                "closes": "16:00"
            }
        ],
        "priceRange": "$$",
        "areaServed": {
            "@type": "GeoCircle",
            "geoMidpoint": {
                "@type": "GeoCoordinates",
                "latitude": 48.1764,
                "longitude": 10.8558
            },
            "geoRadius": "50000"
        },
        "sameAs": [
            "https://www.instagram.com/kfz_ryborz/",
            "https://home.mobile.de/KFZSERVICETEILEZUBEHOER"
        ]
    }
    </script>

    <link rel="stylesheet" href="{{ asset("css/uikit.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/main.css") }}?v={{ filemtime(public_path('css/main.css')) }}">
    <link rel="icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">

    <!--@yield('css')-->

</head>

<body>
    <header>
        <nav class="uk-navbar-container nav-responsive" uk-navbar uk-sticky="top: 0; animation: uk-animation-slide-top;"
            role="navigation" aria-label="Hauptnavigation">
            <!-- Mobile: Logo left -->
            <div class="uk-hidden@l">
                <img src="{{ asset('images/logo.png') }}" alt="KFZ Service Ryborz Logo" class="logo uk-navbar-item">
            </div>

            <!-- Mobile: Title center -->
            <div class="mobile-title uk-hidden@l">
                KFZ Service Ryborz
            </div>

            <!-- Desktop: Brand and Nav -->
            <div class="nav-flex uk-visible@l">
                <a class="header_text uk-navbar-item uk-logo" href="/">KFZ Service Ryborz</a>
                <ul class="uk-navbar-nav navblock">
                    <li class="navelement"><a href="#about">Über uns</a></li>
                    <li class="navelement"><a href="#cars">Fahrzeuge</a></li>
                    <li class="navelement"><a href="#services">Dienstleistungen</a></li>
                    <li class="navelement"><a href="#team">Das Team</a></li>
                    <li class="navelement"><a href="#jobs">Jobs</a></li>
                    <li class="navelement"><a href="#projects">Unsere Projekte</a></li>
                    <li class="navelement"><a href="#hours">Öffnungszeiten</a></li>
                    <li class="navelement"><a href="#contact">Kontakt</a></li>
                </ul>
            </div>

            <!-- Right side: Logo (desktop) / Burger (mobile) -->
            <div>
                <img src="{{ asset('images/logo.png') }}" alt="KFZ Service Ryborz Logo"
                    class="logo uk-navbar-item uk-visible@l">
                <a class="uk-navbar-toggle uk-hidden@l" uk-navbar-toggle-icon href="#" uk-toggle="target: #mobile-menu"
                    aria-label="Navigation öffnen"></a>
            </div>
        </nav>

        <!-- Mobile menu offcanvas -->
        <div id="mobile-menu" class="mobile-drawer" uk-offcanvas="overlay: true; flip: true">
            <div class="uk-offcanvas-bar mobile-drawer-bar">
                <div class="mobile-drawer-header">
                    <img src="{{ asset('images/logo.png') }}" alt="KFZ Service Ryborz Logo" class="mobile-drawer-logo">
                    <h3 class="mobile-drawer-title">KFZ Service Ryborz</h3>
                    <button class="uk-offcanvas-close mobile-drawer-close" type="button" uk-close></button>
                </div>
                <nav class="mobile-drawer-nav">
                    <ul class="mobile-drawer-list">
                        <li class="mobile-drawer-item">
                            <a href="#about" uk-scroll uk-toggle="target: #mobile-menu">
                                <span uk-icon="icon: info; ratio: 1.1"></span>
                                <span>Über uns</span>
                            </a>
                        </li>
                        <li class="mobile-drawer-item">
                            <a href="#cars" uk-scroll uk-toggle="target: #mobile-menu">
                                <span uk-icon="icon: play; ratio: 1.1"></span>
                                <span>Fahrzeuge</span>
                            </a>
                        </li>
                        <li class="mobile-drawer-item">
                            <a href="#services" uk-scroll uk-toggle="target: #mobile-menu">
                                <span uk-icon="icon: cog; ratio: 1.1"></span>
                                <span>Dienstleistungen</span>
                            </a>
                        </li>
                        <li class="mobile-drawer-item">
                            <a href="#team" uk-scroll uk-toggle="target: #mobile-menu">
                                <span uk-icon="icon: users; ratio: 1.1"></span>
                                <span>Das Team</span>
                            </a>
                        </li>
                        <li class="mobile-drawer-item">
                            <a href="#jobs" uk-scroll uk-toggle="target: #mobile-menu">
                                <span uk-icon="icon: file-text; ratio: 1.1"></span>
                                <span>Jobs</span>
                            </a>
                        </li>
                        <li class="mobile-drawer-item">
                            <a href="#projects" uk-scroll uk-toggle="target: #mobile-menu">
                                <span uk-icon="icon: image; ratio: 1.1"></span>
                                <span>Unsere Projekte</span>
                            </a>
                        </li>
                        <li class="mobile-drawer-item">
                            <a href="#hours" uk-scroll uk-toggle="target: #mobile-menu">
                                <span uk-icon="icon: clock; ratio: 1.1"></span>
                                <span>Öffnungszeiten</span>
                            </a>
                        </li>
                        <li class="mobile-drawer-item">
                            <a href="#contact" uk-scroll uk-toggle="target: #mobile-menu">
                                <span uk-icon="icon: receiver; ratio: 1.1"></span>
                                <span>Kontakt</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="mobile-drawer-footer">
                    <a href="tel:+4982321846279" class="mobile-drawer-contact">
                        <span uk-icon="icon: phone; ratio: 0.9"></span>
                        <span>+49 8232 1846279</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
        uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 8000; min-height: 300; max-height: 500;">

        <ul class="uk-slideshow-items">
            <li>
                <img src="{{ asset('images/slide1.jpg') }}"
                    alt="KFZ Werkstatt Untermeitingen - Professionelle Fahrzeugreparatur" uk-cover class="blur-image">
                <div class="uk-position-center uk-position-small uk-text-center">
                    <h2 class="uk-margin-remove slideshow-text">Ihr Fahrzeug, unsere Leidenschaft</h2>
                    <p class="uk-margin-remove slideshow-subtext">Verlassen Sie sich auf unsere jahrelange Erfahrung
                        und
                        unser Engagement,<br>
                        um Ihr Auto in Topform zu bringen. Qualität, die Sie sehen und fühlen können.</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('images/slide2.jpg') }}"
                    alt="Fahrzeuglackierung und Karosseriearbeiten in Untermeitingen" uk-cover class="blur-image">
                <div class="uk-position-center uk-position-small uk-text-center">
                    <h2 class="uk-margin-remove slideshow-text">Service, der Vertrauen schafft</h2>
                    <p class="uk-margin-remove slideshow-subtext">Ob Inspektion, Reparatur oder Unfallinstandsetzung –
                        unser Team sorgt
                        dafür, dass Sie schnell und sicher wieder auf der Straße sind.<br>Wir sind immer für Sie da.</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('images/slide3.jpg') }}" alt="Meisterwerkstatt für alle Fahrzeugmarken" uk-cover
                    class="blur-image">
                <div class="uk-position-center uk-position-small uk-text-center">
                    <h2 class="uk-margin-remove slideshow-text">Technologie trifft Handwerkskunst</h2>
                    <p class="uk-margin-remove slideshow-subtext">Moderne Diagnosetechnik kombiniert mit klassischer
                        Handwerkskunst –<br>für
                        Ergebnisse, die überzeugen. Wir bringen Ihr Fahrzeug auf den neuesten Stand.</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('images/slide4.jpg') }}" alt="TÜV und Hauptuntersuchung - Ihr Prüfstützpunkt"
                    uk-cover class="blur-image">
                <div class="uk-position-center uk-position-small uk-text-center">
                    <h2 class="uk-margin-remove slideshow-text">Individuelle Lösungen</h2>
                    <p class="uk-margin-remove slideshow-subtext">Jedes Fahrzeug ist einzigartig - genau wie unsere
                        Lösungen.<br>
                        Von der Standardwartung bis zum Spezialumbau finden wir den richtigen Weg für Sie.</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('images/slide5.jpg') }}" alt="Unfallinstandsetzung und Versicherungsabwicklung"
                    uk-cover class="blur-image">
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

            <div class="about-content-wrapper">
                <!-- Intro Card -->
                <div class="about-intro-card">
                    <h2 class="about-intro-title">Willkommen bei KFZ Service Waldemar Ryborz</h2>
                    <p class="about-intro-subtitle">Ihre freundliche Kfz-Werkstatt in Untermeitingen</p>
                    <p class="about-intro-text">
                        Seit über 15 Jahren sind wir Ihr verlässlicher Partner rund um Ihr Auto. Unser Ziel ist es,
                        Ihnen den besten Service zu bieten – schnell, professionell und fair. Egal, ob es um regelmäßige
                        Wartungen, Reparaturen oder spezielle Anliegen geht – wir sind für Sie da.
                    </p>
                    <!-- Team Image Inside Card -->
                    <div class="about-intro-image-container">
                        <img src="{{ asset('images/team/gruppe.jpg') }}" alt="Unser Team" class="about-intro-team-img">
                        <div class="about-intro-image-overlay">
                            <span>Unser Team für Sie</span>
                        </div>
                    </div>
                </div>

                <!-- Values Grid -->
                <div class="about-values-grid">
                    <div class="about-value-card">
                        <div class="about-value-icon">
                            <span uk-icon="icon: users; ratio: 1.5"></span>
                        </div>
                        <h3>Erfahrenes Team</h3>
                        <p>Unsere Mechaniker und Fachleute kümmern sich mit Herzblut um Ihr Fahrzeug.</p>
                    </div>
                    <div class="about-value-card">
                        <div class="about-value-icon">
                            <span uk-icon="icon: cog; ratio: 1.5"></span>
                        </div>
                        <h3>Moderne Technik</h3>
                        <p>Wir kombinieren modernste Technologie mit traditioneller Handwerkskunst.</p>
                    </div>
                    <div class="about-value-card">
                        <div class="about-value-icon">
                            <span uk-icon="icon: star; ratio: 1.5"></span>
                        </div>
                        <h3>Höchste Qualität</h3>
                        <p>Bei uns stehen Qualität und Kundenzufriedenheit an erster Stelle.</p>
                    </div>
                </div>

                <!-- CTA -->
                <div class="about-cta">
                    <p>Kommen Sie vorbei und überzeugen Sie sich selbst!</p>
                    <a href="#contact" class="about-cta-button" uk-scroll>
                        <span uk-icon="icon: location; ratio: 1"></span>
                        Jetzt Kontakt aufnehmen
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="cars" class="uk-section uk-section-cars">
        <div class="uk-container">
            <h1 class="uk-heading-line uk-text-center"><span>Fahrzeuge</span></h1>
            <div class="cars-content-wrapper">
                <div class="cars-intro">
                    <p>Auf der Suche nach einem neuen Fahrzeug? Entdecken Sie unser aktuelles Angebot an ausgewählten
                        Fahrzeugen. Wir bieten regelmäßig gepflegte Gebrauchtwagen zu fairen Preisen an.</p>
                </div>

                <div class="cars-features">
                    <div class="cars-feature-item">
                        <div class="cars-feature-icon">
                            <span uk-icon="icon: check; ratio: 1.3"></span>
                        </div>
                        <span>Werkstattgeprüft</span>
                    </div>
                    <div class="cars-feature-item">
                        <div class="cars-feature-icon">
                            <span uk-icon="icon: heart; ratio: 1.3"></span>
                        </div>
                        <span>Faire Preise</span>
                    </div>
                </div>

                <div class="cars-cta-card">
                    <a href="https://home.mobile.de/KFZSERVICETEILEZUBEHOER#ses" target="_blank"
                        rel="noopener noreferrer" class="cars-cta-link">
                        <div class="cars-cta-content">
                            <img src="{{ asset('images/mobile_logo.png') }}" alt="Mobile.de" class="cars-mobile-logo">
                            <div class="cars-cta-text">
                                <h3>Unser Fahrzeugangebot auf Mobile.de</h3>
                                <p>Klicken Sie hier, um alle verfügbaren Fahrzeuge zu entdecken</p>
                            </div>
                            <div class="cars-cta-arrow">
                                <span uk-icon="icon: arrow-right; ratio: 1.5"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="uk-section uk-section-default">
        <div class="uk-container">
            <h1 class="uk-heading-line uk-text-center"><span>Dienstleistungen</span></h1>

            <!-- Desktop & Tablet Grid -->
            <div class="uk-grid uk-grid-large uk-child-width-1-2@m uk-flex-center uk-flex-middle" uk-grid>
                <!-- Service 1: Unfallinstandsetzung -->
                <div class="uk-flex uk-flex-center uk-flex-middle services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/unfallinstandsetzung.png') }}"
                        alt="Unfallinstandsetzung" class="service_img_left">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="service-container">
                        <h3>Unfallinstandsetzung</h3>
                        <p>Unsere erfahrenen Spezialisten setzen Ihr Fahrzeug nach einem Unfall fachgerecht instand –
                            von Karosseriearbeiten bis zur Lackierung. Wir sorgen dafür, dass Ihr Auto wieder sicher und
                            in Top-Zustand auf die Straße kommt.</p>
                    </div>
                </div>

                <!-- Service 2: PKW-Instandsetzung -->
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="service-container">
                        <h3>PKW-Instandsetzung aller Fabrikate</h3>
                        <p>Wir reparieren Fahrzeuge aller Marken und Modelle mit Sorgfalt und Expertise. Unser Team
                            sorgt dafür, dass Ihr Auto wieder sicher und zuverlässig fährt.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/reperatur.png') }}" alt="Reparaturen"
                        class="service_img_right">
                </div>

                <!-- Service 3: Fahrzeuglackierung -->
                <div class="uk-flex uk-flex-center uk-flex-middle services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/lackierung.png') }}" alt="Lackierung"
                        class="service_img_left">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="service-container">
                        <h3>Fahrzeuglackierung</h3>
                        <p>Egal ob Kratzer oder eine komplette Neulackierung – in Zusammenarbeit mit unserer
                            Partnerlackiererei sorgen wir für professionelle Ergebnisse und brillante Farben. Wir
                            verwenden hochwertige Materialien für
                            eine langanhaltende, makellose Optik.</p>
                    </div>
                </div>

                <!-- Service 4: Klimaanlagenservice -->
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="service-container">
                        <h3>Klimaanlagenservice</h3>
                        <p>Wir prüfen, warten und befüllen Ihre Klimaanlage, damit sie stets einwandfrei funktioniert.
                            So genießen Sie jederzeit ein angenehmes Klima in Ihrem Fahrzeug.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/klimaanlage.png') }}" alt="Klimaanlage"
                        class="service_img_right">
                </div>

                <!-- Service 5: Fahrzeugdiagnose -->
                <div class="uk-flex uk-flex-center uk-flex-middle services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/diagnose.png') }}" alt="Diagnose"
                        class="service_img_left">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="service-container">
                        <h3>Fahrzeugdiagnose</h3>
                        <p>Mit modernster Diagnosetechnik spüren wir Fehler im Fahrzeug schnell und präzise auf. So
                            lassen sich Probleme frühzeitig erkennen und beheben.</p>
                    </div>
                </div>

                <!-- Service 6: HU-/AU-Service -->
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="service-container">
                        <h3>HU-/AU-Service</h3>
                        <p>Wir bereiten Ihr Fahrzeug für die Hauptuntersuchung (HU) und die Abgasuntersuchung (AU) vor
                            und führen diese direkt bei uns durch. So bleibt Ihr Auto zuverlässig und straßentauglich.
                            In Zusammenarbeit mit anerkannter Prüforganisation.
                        </p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/untersuchung.png') }}" alt="Untersuchung"
                        class="service_img_right">
                </div>

                <!-- Service 7: Reifenservice -->
                <div class="uk-flex uk-flex-center uk-flex-middle services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/reifenservice.png') }}" alt="Reifenservice"
                        class="service_img_left">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="service-container">
                        <h3>Reifenservice</h3>
                        <p>Unser Reifenservice umfasst Montage und Auswuchten ihrer Sommer- und
                            Winterreifen. Damit sorgen wir für optimale Fahrsicherheit und Komfort zu jeder Jahreszeit.
                        </p>
                    </div>
                </div>

                <!-- Service 8: Achsvermessung -->
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="service-container">
                        <h3>Achsvermessung</h3>
                        <p>Mit einer präzisen Achsvermessung stellen wir sicher, dass Ihre Räder optimal ausgerichtet
                            sind. Das verbessert die Fahrstabilität und sorgt für gleichmäßigen Reifenverschleiß.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/achsvermessung.png') }}" alt="Achsvermessung"
                        class="service_img_right">
                </div>

                <!-- Service 9: PKW An- und Verkauf -->
                <div class="uk-flex uk-flex-center uk-flex-middle services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/verkauf.png') }}" alt="Verkauf"
                        class="service_img_left">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="service-container">
                        <h3>PKW An- und Verkauf</h3>
                        <p>Wir bieten Ihnen eine unkomplizierte Möglichkeit, Ihr Fahrzeug zu verkaufen oder ein neues zu
                            erwerben. Dabei legen wir Wert auf faire Preise und eine transparente Abwicklung.
                        </p>
                    </div>
                </div>

                <!-- Service 10: Stoßdämpfertest -->
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="service-container">
                        <h3>Stoßdämpfertest</h3>
                        <p>Mit modernster Prüftechnik testen wir Ihre Stoßdämpfer auf Funktion und Sicherheit. So
                            stellen wir sicher, dass Ihr Fahrwerk optimal arbeitet und maximale Sicherheit bietet.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/stossdaempfer.png') }}" alt="Stoßdämpfertest"
                        class="service_img_right">
                </div>

                <!-- Service 11: H-Kennzeichen -->
                <div class="uk-flex uk-flex-center uk-flex-middle services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/oldtimer.png') }}" alt="Oldtimer"
                        class="service_img_left">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="service-container">
                        <h3>H-Kennzeichen Abnahme</h3>
                        <p>Wir unterstützen Sie bei der Erlangung des H-Kennzeichens für Ihren Oldtimer. Unsere Experten
                            prüfen Ihr Fahrzeug auf die erforderlichen Kriterien und begleiten Sie durch den gesamten
                            Prozess.</p>
                    </div>
                </div>

                <!-- Service 12: Abschleppservice -->
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="service-container">
                        <h3>Abschleppservice</h3>
                        <p>Für unsere Kunden sind wir bei einer Panne oder einem Unfall zu unseren Geschäftszeiten immer
                            für Sie da. Unser
                            professioneller
                            Abschleppservice bringt Ihr Fahrzeug sicher in unsere Werkstatt oder an den gewünschten
                            Zielort.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/abschleppdienst.png') }}" alt="Abschleppdienst"
                        class="service_img_right">
                </div>

                <!-- Service 13: Car-Hifi -->
                <div class="uk-flex uk-flex-center uk-flex-middle services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="{{ asset('images/dienstleistungen/hifi.png') }}" alt="Car-Hifi" class="service_img_left">
                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-text-center services-grid-item"
                    uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="service-container">
                        <h3>Car-Hifi-Einbau</h3>
                        <p>Von der einfachen Radio-Installation bis zur kompletten Sound-Anlage - wir realisieren Ihre
                            Car-Hifi Wünsche. Professionelle Installation und perfekte Integration in Ihr Fahrzeug
                            garantiert.</p>
                    </div>
                </div>
            </div>

            <!-- Mobile-only Cards -->
            <div class="service-mobile-card">
                <img src="{{ asset('images/dienstleistungen/unfallinstandsetzung.png') }}" alt="Unfallinstandsetzung"
                    class="service-mobile-img">
                <h3>Unfallinstandsetzung</h3>
                <p>Unsere erfahrenen Spezialisten setzen Ihr Fahrzeug nach einem Unfall fachgerecht instand – von
                    Karosseriearbeiten bis zur Lackierung. Wir sorgen dafür, dass Ihr Auto wieder sicher und in
                    Top-Zustand auf die Straße kommt.</p>
            </div>

            <div class="service-mobile-card">
                <img src="{{ asset('images/dienstleistungen/reperatur.png') }}" alt="PKW-Instandsetzung"
                    class="service-mobile-img">
                <h3>PKW-Instandsetzung aller Fabrikate</h3>
                <p>Wir reparieren Fahrzeuge aller Marken und Modelle mit Sorgfalt und Expertise. Unser Team sorgt dafür,
                    dass Ihr Auto wieder sicher und zuverlässig fährt.</p>
            </div>

            <div class="service-mobile-card">
                <img src="{{ asset('images/dienstleistungen/lackierung.png') }}" alt="Fahrzeuglackierung"
                    class="service-mobile-img">
                <h3>Fahrzeuglackierung</h3>
                <p>Egal ob Kratzer oder eine komplette Neulackierung – in Zusammenarbeit mit unserer
                    Partnerlackiererei sorgen wir für professionelle Ergebnisse und brillante Farben. Wir
                    verwenden hochwertige Materialien für
                    eine langanhaltende, makellose Optik.</p>
            </div>

            <div class="service-mobile-card">
                <img src="{{ asset('images/dienstleistungen/klimaanlage.png') }}" alt="Klimaanlagenservice"
                    class="service-mobile-img">
                <h3>Klimaanlagenservice</h3>
                <p>Wir prüfen, warten und befüllen Ihre Klimaanlage, damit sie stets einwandfrei funktioniert. So
                    genießen Sie jederzeit ein angenehmes Klima in Ihrem Fahrzeug.</p>
            </div>

            <div class="service-mobile-card">
                <img src="{{ asset('images/dienstleistungen/diagnose.png') }}" alt="Fahrzeugdiagnose"
                    class="service-mobile-img">
                <h3>Fahrzeugdiagnose</h3>
                <p>Mit modernster Diagnosetechnik spüren wir Fehler im Fahrzeug schnell und präzise auf. So lassen sich
                    Probleme frühzeitig erkennen und beheben.</p>
            </div>

            <div class="service-mobile-card">
                <img src="{{ asset('images/dienstleistungen/untersuchung.png') }}" alt="HU-/AU-Service"
                    class="service-mobile-img">
                <h3>HU-/AU-Service</h3>
                <p>Wir bereiten Ihr Fahrzeug für die Hauptuntersuchung (HU) und die Abgasuntersuchung (AU) vor
                    und führen diese direkt bei uns durch. So bleibt Ihr Auto zuverlässig und straßentauglich.
                    In Zusammenarbeit mit anerkannter Prüforganisation.</p>
            </div>

            <div class="service-mobile-card">
                <img src="{{ asset('images/dienstleistungen/reifenservice.png') }}" alt="Reifenservice"
                    class="service-mobile-img">
                <h3>Reifenservice</h3>
                <p>Unser Reifenservice umfasst Montage und Auswuchten ihrer Sommer- und
                    Winterreifen. Damit sorgen wir für optimale Fahrsicherheit und Komfort zu jeder Jahreszeit.</p>
            </div>

            <div class="service-mobile-card">
                <img src="{{ asset('images/dienstleistungen/achsvermessung.png') }}" alt="Achsvermessung"
                    class="service-mobile-img">
                <h3>Achsvermessung</h3>
                <p>Mit einer präzisen Achsvermessung stellen wir sicher, dass Ihre Räder optimal ausgerichtet sind. Das
                    verbessert die Fahrstabilität und sorgt für gleichmäßigen Reifenverschleiß.</p>
            </div>

            <div class="service-mobile-card">
                <img src="{{ asset('images/dienstleistungen/verkauf.png') }}" alt="PKW An- und Verkauf"
                    class="service-mobile-img">
                <h3>PKW An- und Verkauf</h3>
                <p>Wir bieten Ihnen eine unkomplizierte Möglichkeit, Ihr Fahrzeug zu verkaufen oder ein neues zu
                    erwerben. Dabei legen wir Wert auf faire Preise und eine transparente Abwicklung.</p>
            </div>

            <div class="service-mobile-card">
                <img src="{{ asset('images/dienstleistungen/stossdaempfer.png') }}" alt="Stoßdämpfertest"
                    class="service-mobile-img">
                <h3>Stoßdämpfertest</h3>
                <p>Mit modernster Prüftechnik testen wir Ihre Stoßdämpfer auf Funktion und Sicherheit. So stellen wir
                    sicher, dass Ihr Fahrwerk optimal arbeitet und maximale Sicherheit bietet.</p>
            </div>

            <div class="service-mobile-card">
                <img src="{{ asset('images/dienstleistungen/oldtimer.png') }}" alt="H-Kennzeichen Abnahme"
                    class="service-mobile-img">
                <h3>H-Kennzeichen Abnahme</h3>
                <p>Wir unterstützen Sie bei der Erlangung des H-Kennzeichens für Ihren Oldtimer. Unsere Experten prüfen
                    Ihr Fahrzeug auf die erforderlichen Kriterien und begleiten Sie durch den gesamten Prozess.</p>
            </div>

            <div class="service-mobile-card">
                <img src="{{ asset('images/dienstleistungen/abschleppdienst.png') }}" alt="Abschleppservice"
                    class="service-mobile-img">
                <h3>Abschleppservice</h3>
                <p>Für unsere Kunden sind wir bei einer Panne oder einem Unfall zu unseren Geschäftszeiten immer
                    für Sie da. Unser
                    professioneller
                    Abschleppservice bringt Ihr Fahrzeug sicher in unsere Werkstatt oder an den gewünschten
                    Zielort.</p>
            </div>

            <div class="service-mobile-card">
                <img src="{{ asset('images/dienstleistungen/hifi.png') }}" alt="Car-Hifi-Einbau"
                    class="service-mobile-img">
                <h3>Car-Hifi-Einbau</h3>
                <p>Von der einfachen Radio-Installation bis zur kompletten Sound-Anlage - wir realisieren Ihre Car-Hifi
                    Wünsche. Professionelle Installation und perfekte Integration in Ihr Fahrzeug garantiert.</p>
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
                        <h3>Waldemar Ryborz</h3>
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
                        <h3>Krystian Przegendza</h3>
                        <p>Geselle</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jobs Section -->
    <section id="jobs" class="uk-section uk-section-jobs">
        <div class="uk-container">
            <h1 class="uk-heading-line uk-text-center"><span>Jobs</span></h1>
            <div class="jobs-wrapper">
                <div class="job-card">
                    <div class="job-card-header">
                        <div class="job-badge">Wir suchen Verstärkung!</div>
                        <h2 class="job-title">KFZ-Mechaniker / Mechatroniker</h2>
                        <span class="job-gender">(m/w/d)</span>
                    </div>

                    <div class="job-card-body">
                        <div class="job-intro">
                            <p>Werde Teil unseres dynamischen Teams! Wir suchen einen engagierten KFZ-Mechaniker oder
                                Mechatroniker, der mit Leidenschaft und Fachwissen unsere Kunden begeistert.</p>
                        </div>

                        <div class="job-details-grid">
                            <div class="job-detail-section">
                                <div class="job-detail-icon">
                                    <span uk-icon="icon: check; ratio: 1.2"></span>
                                </div>
                                <div class="job-detail-content">
                                    <h4>Deine Aufgaben</h4>
                                    <ul class="job-list">
                                        <li>Wartung und Reparatur von Fahrzeugen aller Marken</li>
                                        <li>Fehlerdiagnose mit modernster Technik</li>
                                        <li>Kundenberatung bei technischen Fragen</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="job-detail-section">
                                <div class="job-detail-icon">
                                    <span uk-icon="icon: user; ratio: 1.2"></span>
                                </div>
                                <div class="job-detail-content">
                                    <h4>Dein Profil</h4>
                                    <ul class="job-list">
                                        <li>Abgeschlossene Ausbildung als KFZ-Mechaniker/Mechatroniker</li>
                                        <li>Berufserfahrung wünschenswert</li>
                                        <li>Leidenschaft für Fahrzeuge aller Art</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="job-detail-section">
                                <div class="job-detail-icon">
                                    <span uk-icon="icon: heart; ratio: 1.2"></span>
                                </div>
                                <div class="job-detail-content">
                                    <h4>Wir bieten</h4>
                                    <ul class="job-list">
                                        <li>Familiäres Arbeitsumfeld mit flachen Hierarchien</li>
                                        <li>Abwechslungsreiche Aufgaben von Oldtimer bis Neuwagen</li>
                                        <li>Faire Vergütung und pünktliche Bezahlung</li>
                                        <li>Moderne Werkstattausstattung</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="job-card-footer">
                        <div class="job-cta">
                            <p class="job-cta-text">Interesse geweckt? Dann freuen wir uns auf deine Bewerbung!</p>
                            <div class="job-contact-buttons">
                                <a href="mailto:kfz.ryborz@t-online.de?subject=Bewerbung als KFZ-Mechaniker/Mechatroniker"
                                    class="job-btn job-btn-primary">
                                    <span uk-icon="icon: mail"></span>
                                    Per E-Mail bewerben
                                </a>
                                <a href="tel:+4982321846279" class="job-btn job-btn-secondary">
                                    <span uk-icon="icon: phone"></span>
                                    Anrufen
                                </a>
                            </div>
                            <p class="job-address">Oder besuche uns persönlich: Schwabenstraße 48, 86836 Untermeitingen
                            </p>
                        </div>
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
                    <div class="project-nav-container uk-text-center">
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover project-nav-prev" href="#"
                            uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover project-nav-next" href="#"
                            uk-slidenav-next uk-slider-item="next"></a>
                    </div>

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
                                            <div class="tap-hint">👆 Tippen zum Vergleichen</div>
                                            <div class="before-label">Vorher</div>
                                            <div class="after-label">Nachher</div>
                                        </div>
                                        <div class="uk-text-center uk-margin-small-top">
                                            <h3>Pontiac Firebird Trans Am</h3>
                                            <p>Komplette Neulackierung.</p>
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
                                            <div class="tap-hint">👆 Tippen zum Vergleichen</div>
                                            <div class="before-label">Vorher</div>
                                            <div class="after-label">Nachher</div>
                                        </div>
                                        <div class="uk-text-center uk-margin-small-top">
                                            <h3>VW T3 Camper</h3>
                                            <p>Umfassende Karosseriearbeiten und Teillackierung inkl. professioneller
                                                Politur und Rostbeseitigung.</p>
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
                                            <div class="tap-hint">👆 Tippen zum Vergleichen</div>
                                            <div class="before-label">Vorher</div>
                                            <div class="after-label">Nachher</div>
                                        </div>
                                        <div class="uk-text-center uk-margin-small-top">
                                            <h3>BMW</h3>
                                            <p>Hochwertige Lackierung mit mehrschichtiger Versiegelung. Perfektion in
                                                jedem Detail für den bayerischen Premium-Sportwagen.</p>
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
                                            <div class="tap-hint">👆 Tippen zum Vergleichen</div>
                                            <div class="before-label">Vorher</div>
                                            <div class="after-label">Nachher</div>
                                        </div>
                                        <div class="uk-text-center uk-margin-small-top">
                                            <h3>Corvette C6</h3>
                                            <p>Vollständige Neulackierung mit Premium-Finish. Die amerikanische
                                                Sportwagen-Ikone wurde perfekt in Szene gesetzt.</p>
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
                                            <div class="tap-hint">👆 Tippen zum Vergleichen</div>
                                            <div class="before-label">Vorher</div>
                                            <div class="after-label">Nachher</div>
                                        </div>
                                        <div class="uk-text-center uk-margin-small-top">
                                            <h3>Chevrolet Camaro V8</h3>
                                            <p>Professionelle Reparatur eines Seitenschadens mit anschließender
                                                hochwertiger Neulackierung. Der amerikanische Muscle-Car erstrahlt
                                                wieder in neuem Glanz.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Add more projects here with the same structure -->
                        </ul>
                    </div>

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
            document.cookie = "cookieConsent=accepted; expires=" + date.toUTCString() + "; path=/; SameSite=Lax";
        }

        // Check if cookie consent already given - runs immediately
        (function () {
            // Check for cookie consent
            const hasConsent = document.cookie.split('; ').some(cookie => cookie.startsWith('cookieConsent=accepted'));

            if (!hasConsent) {
                // Show banner immediately if no consent
                document.getElementById('cookie-banner').style.display = 'block';
            }
        })();
    </script>

    <!-- Impressum Modal -->
    <div id="impressum-modal" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <h2 class="uk-modal-title">Impressum</h2>
            <div class="uk-margin-medium-bottom uk-height-large uk-overflow-auto">
                <h3>Angaben gemäß § 5 TMG</h3>
                <p>
                    <strong>KFZ Service Waldemar Ryborz</strong><br>
                    Schwabenstraße 48<br>
                    86836 Untermeitingen
                </p>

                <h3>Kontakt</h3>
                <p>
                    Telefon: <a href="tel:+4982321846279">+49 8232 1846279</a><br>
                    E-Mail: <a href="mailto:kfz.ryborz@t-online.de">kfz.ryborz@t-online.de</a>
                </p>

                <h3>Berufsbezeichnung und berufsrechtliche Regelungen</h3>
                <p>
                    Berufsbezeichnung: KFZ-Meisterbetrieb<br>
                    Zuständige Kammer: Handwerkskammer für Schwaben<br>
                    Verliehen in: Deutschland
                </p>

                <h3>Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV</h3>
                <p>
                    Waldemar Ryborz<br>
                    Schwabenstraße 48<br>
                    86836 Untermeitingen
                </p>

                <h3>EU-Streitschlichtung</h3>
                <p>
                    Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit:<br>
                    <a href="https://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener noreferrer">
                        https://ec.europa.eu/consumers/odr/
                    </a><br>
                    Unsere E-Mail-Adresse finden Sie oben im Impressum.
                </p>

                <h3>Verbraucher­streit­beilegung/Universal­schlichtungs­stelle</h3>
                <p>
                    Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer
                    Verbraucherschlichtungsstelle teilzunehmen.
                </p>

                <h3>Haftung für Inhalte</h3>
                <p>
                    Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den
                    allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht
                    verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen
                    zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.
                </p>
                <p>
                    Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen
                    Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der
                    Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden
                    Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.
                </p>

                <h3>Haftung für Links</h3>
                <p>
                    Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss
                    haben.
                    Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der
                    verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die
                    verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft.
                    Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar.
                </p>
                <p>
                    Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte
                    einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige
                    Links umgehend entfernen.
                </p>

                <h3>Urheberrecht</h3>
                <p>
                    Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem
                    deutschen
                    Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb
                    der
                    Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw.
                    Erstellers.
                    Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet.
                </p>
                <p>
                    Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte
                    Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie
                    trotzdem
                    auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei
                    Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.
                </p>
            </div>
        </div>
    </div>

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
                    persönlich identifiziert werden können. Ausführliche Informationen zum Thema Datenschutz entnehmen
                    Sie unserer unter diesem Text aufgeführten Datenschutzerklärung.</p>

                <h4>Datenerfassung auf dieser Website</h4>
                <p><strong>Wer ist verantwortlich für die Datenerfassung auf dieser Website?</strong></p>
                <p>Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten
                    können Sie dem Abschnitt „Hinweis zur Verantwortlichen Stelle" in dieser Datenschutzerklärung
                    entnehmen.</p>

                <p><strong>Wie erfassen wir Ihre Daten?</strong></p>
                <p>Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen. Hierbei kann es sich z. B.
                    um Daten handeln, die Sie per E-Mail oder telefonisch an uns übermitteln.</p>
                <p>Andere Daten werden automatisch oder nach Ihrer Einwilligung beim Besuch der Website durch unsere
                    IT-Systeme erfasst. Das sind vor allem technische Daten (z. B. Internetbrowser, Betriebssystem oder
                    Uhrzeit des Seitenaufrufs). Die Erfassung dieser Daten erfolgt automatisch, sobald Sie diese Website
                    betreten.</p>

                <p><strong>Wofür nutzen wir Ihre Daten?</strong></p>
                <p>Ein Teil der Daten wird erhoben, um eine fehlerfreie Bereitstellung der Website zu gewährleisten.
                    Andere Daten können zur Analyse Ihres Nutzerverhaltens verwendet werden.</p>

                <p><strong>Welche Rechte haben Sie bezüglich Ihrer Daten?</strong></p>
                <p>Sie haben jederzeit das Recht, unentgeltlich Auskunft über Herkunft, Empfänger und Zweck Ihrer
                    gespeicherten personenbezogenen Daten zu erhalten. Sie haben außerdem ein Recht, die Berichtigung
                    oder Löschung dieser Daten zu verlangen. Wenn Sie eine Einwilligung zur Datenverarbeitung erteilt
                    haben, können Sie diese Einwilligung jederzeit für die Zukunft widerrufen. Außerdem haben Sie das
                    Recht, unter bestimmten Umständen die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten
                    zu verlangen. Des Weiteren steht Ihnen ein Beschwerderecht bei der zuständigen Aufsichtsbehörde zu.
                </p>
                <p>Hierzu sowie zu weiteren Fragen zum Thema Datenschutz können Sie sich jederzeit an uns wenden.</p>

                <h3>2. Hosting</h3>
                <p>Wir hosten die Inhalte unserer Website bei folgendem Anbieter:</p>

                <h4>Externes Hosting</h4>
                <p>Diese Website wird extern gehostet. Die personenbezogenen Daten, die auf dieser Website erfasst
                    werden,
                    werden auf den Servern des Hosters / der Hoster gespeichert. Hierbei kann es sich v. a. um
                    IP-Adressen,
                    Kontaktanfragen, Meta- und Kommunikationsdaten, Vertragsdaten, Kontaktdaten, Namen, Websitezugriffe
                    und sonstige Daten, die über eine Website generiert werden, handeln.</p>
                <p>Das externe Hosting erfolgt zum Zwecke der Vertragserfüllung gegenüber unseren potenziellen und
                    bestehenden Kunden (Art. 6 Abs. 1 lit. b DSGVO) und im Interesse einer sicheren, schnellen und
                    effizienten Bereitstellung unseres Online-Angebots durch einen professionellen Anbieter (Art. 6 Abs.
                    1
                    lit. f DSGVO). Sofern eine entsprechende Einwilligung abgefragt wurde, erfolgt die Verarbeitung
                    ausschließlich auf Grundlage von Art. 6 Abs. 1 lit. a DSGVO und § 25 Abs. 1 TTDSG, soweit die
                    Einwilligung die Speicherung von Cookies oder den Zugriff auf Informationen im Endgerät des Nutzers
                    (z. B. Device-Fingerprinting) im Sinne des TTDSG umfasst. Die Einwilligung ist jederzeit
                    widerrufbar.</p>

                <h3>3. Allgemeine Hinweise und Pflichtinformationen</h3>

                <h4>Datenschutz</h4>
                <p>Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre
                    personenbezogenen Daten vertraulich und entsprechend den gesetzlichen Datenschutzvorschriften sowie
                    dieser Datenschutzerklärung.</p>
                <p>Wenn Sie diese Website benutzen, werden verschiedene personenbezogene Daten erhoben. Personenbezogene
                    Daten sind Daten, mit denen Sie persönlich identifiziert werden können. Die vorliegende
                    Datenschutzerklärung erläutert, welche Daten wir erheben und wofür wir sie nutzen. Sie erläutert
                    auch,
                    wie und zu welchem Zweck das geschieht.</p>
                <p>Wir weisen darauf hin, dass die Datenübertragung im Internet (z. B. bei der Kommunikation per E-Mail)
                    Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist
                    nicht möglich.</p>

                <h4>Hinweis zur verantwortlichen Stelle</h4>
                <p>Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:</p>
                <p>
                    KFZ Service Waldemar Ryborz<br>
                    Schwabenstraße 48<br>
                    86836 Untermeitingen<br>
                    Telefon: +49 8232 1846279<br>
                    E-Mail: kfz.ryborz@t-online.de
                </p>
                <p>Verantwortliche Stelle ist die natürliche oder juristische Person, die allein oder gemeinsam mit
                    anderen
                    über die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten (z. B. Namen,
                    E-Mail-Adressen
                    o. Ä.) entscheidet.</p>

                <h4>Speicherdauer</h4>
                <p>Soweit innerhalb dieser Datenschutzerklärung keine speziellere Speicherdauer genannt wurde,
                    verbleiben
                    Ihre personenbezogenen Daten bei uns, bis der Zweck für die Datenverarbeitung entfällt. Wenn Sie ein
                    berechtigtes Löschersuchen geltend machen oder eine Einwilligung zur Datenverarbeitung widerrufen,
                    werden Ihre Daten gelöscht, sofern wir keine anderen rechtlich zulässigen Gründe für die Speicherung
                    Ihrer personenbezogenen Daten haben (z. B. steuer- oder handelsrechtliche Aufbewahrungsfristen); im
                    letztgenannten Fall erfolgt die Löschung nach Fortfall dieser Gründe.</p>

                <h4>Widerruf Ihrer Einwilligung zur Datenverarbeitung</h4>
                <p>Viele Datenverarbeitungsvorgänge sind nur mit Ihrer ausdrücklichen Einwilligung möglich. Sie können
                    eine
                    bereits erteilte Einwilligung jederzeit widerrufen. Die Rechtmäßigkeit der bis zum Widerruf
                    erfolgten
                    Datenverarbeitung bleibt vom Widerruf unberührt.</p>

                <h4>Widerspruchsrecht gegen die Datenerhebung in besonderen Fällen sowie gegen Direktwerbung (Art. 21
                    DSGVO)</h4>
                <p>WENN DIE DATENVERARBEITUNG AUF GRUNDLAGE VON ART. 6 ABS. 1 LIT. E ODER F DSGVO ERFOLGT, HABEN SIE
                    JEDERZEIT DAS RECHT, AUS GRÜNDEN, DIE SICH AUS IHRER BESONDEREN SITUATION ERGEBEN, GEGEN DIE
                    VERARBEITUNG IHRER PERSONENBEZOGENEN DATEN WIDERSPRUCH EINZULEGEN; DIES GILT AUCH FÜR EIN AUF DIESE
                    BESTIMMUNGEN GESTÜTZTES PROFILING. DIE JEWEILIGE RECHTSGRUNDLAGE, AUF DENEN EINE VERARBEITUNG
                    BERUHT,
                    ENTNEHMEN SIE DIESER DATENSCHUTZERKLÄRUNG. WENN SIE WIDERSPRUCH EINLEGEN, WERDEN WIR IHRE
                    BETROFFENEN
                    PERSONENBEZOGENEN DATEN NICHT MEHR VERARBEITEN, ES SEI DENN, WIR KÖNNEN ZWINGENDE SCHUTZWÜRDIGE
                    GRÜNDE
                    FÜR DIE VERARBEITUNG NACHWEISEN, DIE IHRE INTERESSEN, RECHTE UND FREIHEITEN ÜBERWIEGEN ODER DIE
                    VERARBEITUNG DIENT DER GELTENDMACHUNG, AUSÜBUNG ODER VERTEIDIGUNG VON RECHTSANSPRÜCHEN (WIDERSPRUCH
                    NACH ART. 21 ABS. 1 DSGVO).</p>

                <h4>Beschwerderecht bei der zuständigen Aufsichtsbehörde</h4>
                <p>Im Falle von Verstößen gegen die DSGVO steht den Betroffenen ein Beschwerderecht bei einer
                    Aufsichtsbehörde, insbesondere in dem Mitgliedstaat ihres gewöhnlichen Aufenthalts, ihres
                    Arbeitsplatzes
                    oder des Orts des mutmaßlichen Verstoßes zu. Das Beschwerderecht besteht unbeschadet anderweitiger
                    verwaltungsrechtlicher oder gerichtlicher Rechtsbehelfe.</p>

                <h4>Recht auf Datenübertragbarkeit</h4>
                <p>Sie haben das Recht, Daten, die wir auf Grundlage Ihrer Einwilligung oder in Erfüllung eines Vertrags
                    automatisiert verarbeiten, an sich oder an einen Dritten in einem gängigen, maschinenlesbaren Format
                    aushändigen zu lassen. Sofern Sie die direkte Übertragung der Daten an einen anderen
                    Verantwortlichen
                    verlangen, erfolgt dies nur, soweit es technisch machbar ist.</p>

                <h4>Auskunft, Löschung und Berichtigung</h4>
                <p>Sie haben im Rahmen der geltenden gesetzlichen Bestimmungen jederzeit das Recht auf unentgeltliche
                    Auskunft über Ihre gespeicherten personenbezogenen Daten, deren Herkunft und Empfänger und den Zweck
                    der Datenverarbeitung und ggf. ein Recht auf Berichtigung oder Löschung dieser Daten. Hierzu sowie
                    zu
                    weiteren Fragen zum Thema personenbezogene Daten können Sie sich jederzeit an uns wenden.</p>

                <h4>Recht auf Einschränkung der Verarbeitung</h4>
                <p>Sie haben das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.
                    Hierzu können Sie sich jederzeit an uns wenden. Das Recht auf Einschränkung der Verarbeitung besteht
                    in
                    folgenden Fällen:</p>
                <ul>
                    <li>Wenn Sie die Richtigkeit Ihrer bei uns gespeicherten personenbezogenen Daten bestreiten,
                        benötigen
                        wir in der Regel Zeit, um dies zu überprüfen. Für die Dauer der Prüfung haben Sie das Recht, die
                        Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</li>
                    <li>Wenn die Verarbeitung Ihrer personenbezogenen Daten unrechtmäßig geschah/geschieht, können Sie
                        statt
                        der Löschung die Einschränkung der Datenverarbeitung verlangen.</li>
                    <li>Wenn wir Ihre personenbezogenen Daten nicht mehr benötigen, Sie sie jedoch zur Ausübung,
                        Verteidigung oder Geltendmachung von Rechtsansprüchen benötigen, haben Sie das Recht, statt der
                        Löschung die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</li>
                    <li>Wenn Sie einen Widerspruch nach Art. 21 Abs. 1 DSGVO eingelegt haben, muss eine Abwägung
                        zwischen
                        Ihren und unseren Interessen vorgenommen werden. Solange noch nicht feststeht, wessen Interessen
                        überwiegen, haben Sie das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen
                        Daten
                        zu verlangen.</li>
                </ul>

                <h3>4. Datenerfassung auf dieser Website</h3>

                <h4>Cookies</h4>
                <p>Unsere Internetseiten verwenden so genannte „Cookies". Cookies sind kleine Datenpakete und richten
                    auf
                    Ihrem Endgerät keinen Schaden an. Sie werden entweder vorübergehend für die Dauer einer Sitzung
                    (Session-Cookies) oder dauerhaft (permanente Cookies) auf Ihrem Endgerät gespeichert.
                    Session-Cookies
                    werden nach Ende Ihres Besuchs automatisch gelöscht. Permanente Cookies bleiben auf Ihrem Endgerät
                    gespeichert, bis Sie diese selbst löschen oder eine automatische Löschung durch Ihren Webbrowser
                    erfolgt.</p>
                <p>Cookies können von uns (First-Party-Cookies) oder von Drittunternehmen stammen (sog.
                    Third-Party-Cookies).
                    Third-Party-Cookies ermöglichen die Einbindung bestimmter Dienstleistungen von Drittunternehmen
                    innerhalb
                    von Webseiten (z. B. Cookies zur Abwicklung von Zahlungsdienstleistungen).</p>
                <p>Cookies haben verschiedene Funktionen. Zahlreiche Cookies sind technisch notwendig, da bestimmte
                    Websitefunktionen ohne diese nicht funktionieren würden (z. B. die Warenkorbfunktion oder die
                    Anzeige
                    von Videos). Andere Cookies können zur Auswertung des Nutzerverhaltens oder zu Werbezwecken
                    verwendet werden.</p>
                <p>Cookies, die zur Durchführung des elektronischen Kommunikationsvorgangs, zur Bereitstellung
                    bestimmter,
                    von Ihnen erwünschter Funktionen (z. B. für die Warenkorbfunktion) oder zur Optimierung der Website
                    (z. B. Cookies zur Messung des Webpublikums) erforderlich sind (notwendige Cookies), werden auf
                    Grundlage
                    von Art. 6 Abs. 1 lit. f DSGVO gespeichert, sofern keine andere Rechtsgrundlage angegeben wird. Der
                    Websitebetreiber hat ein berechtigtes Interesse an der Speicherung von notwendigen Cookies zur
                    technisch
                    fehlerfreien und optimierten Bereitstellung seiner Dienste. Sofern eine Einwilligung zur Speicherung
                    von
                    Cookies und vergleichbaren Wiedererkennungstechnologien abgefragt wurde, erfolgt die Verarbeitung
                    ausschließlich auf Grundlage dieser Einwilligung (Art. 6 Abs. 1 lit. a DSGVO und § 25 Abs. 1 TTDSG);
                    die Einwilligung ist jederzeit widerrufbar.</p>
                <p>Sie können Ihren Browser so einstellen, dass Sie über das Setzen von Cookies informiert werden und
                    Cookies nur im Einzelfall erlauben, die Annahme von Cookies für bestimmte Fälle oder generell
                    ausschließen
                    sowie das automatische Löschen der Cookies beim Schließen des Browsers aktivieren. Bei der
                    Deaktivierung
                    von Cookies kann die Funktionalität dieser Website eingeschränkt sein.</p>
                <p>Welche Cookies und Dienste auf dieser Website eingesetzt werden, können Sie dieser
                    Datenschutzerklärung entnehmen.</p>

                <h4>Server-Log-Dateien</h4>
                <p>Der Provider der Seiten erhebt und speichert automatisch Informationen in so genannten
                    Server-Log-Dateien,
                    die Ihr Browser automatisch an uns übermittelt. Dies sind:</p>
                <ul>
                    <li>Browsertyp und Browserversion</li>
                    <li>verwendetes Betriebssystem</li>
                    <li>Referrer URL</li>
                    <li>Hostname des zugreifenden Rechners</li>
                    <li>Uhrzeit der Serveranfrage</li>
                    <li>IP-Adresse</li>
                </ul>
                <p>Eine Zusammenführung dieser Daten mit anderen Datenquellen wird nicht vorgenommen.</p>
                <p>Die Erfassung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO. Der Websitebetreiber
                    hat
                    ein berechtigtes Interesse an der technisch fehlerfreien Darstellung und der Optimierung seiner
                    Website –
                    hierzu müssen die Server-Log-Files erfasst werden.</p>

                <h3>5. Plugins und Tools</h3>

                <h4>Google Maps</h4>
                <p>Diese Seite nutzt den Kartendienst Google Maps. Anbieter ist die Google Ireland Limited („Google"),
                    Gordon House, Barrow Street, Dublin 4, Irland.</p>
                <p>Zur Nutzung der Funktionen von Google Maps ist es notwendig, Ihre IP-Adresse zu speichern. Diese
                    Informationen werden in der Regel an einen Server von Google in den USA übertragen und dort
                    gespeichert.
                    Der Anbieter dieser Seite hat keinen Einfluss auf diese Datenübertragung. Wenn Google Maps aktiviert
                    ist,
                    kann Google zum Zwecke der einheitlichen Darstellung der Schriftarten Google Fonts verwenden. Beim
                    Aufruf
                    von Google Maps lädt Ihr Browser die benötigten Web Fonts in ihren Browsercache, um Texte und
                    Schriftarten
                    korrekt anzuzeigen.</p>
                <p>Die Nutzung von Google Maps erfolgt im Interesse einer ansprechenden Darstellung unserer
                    Online-Angebote
                    und an einer leichten Auffindbarkeit der von uns auf der Website angegebenen Orte. Dies stellt ein
                    berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO dar. Sofern eine entsprechende
                    Einwilligung
                    abgefragt wurde, erfolgt die Verarbeitung ausschließlich auf Grundlage von Art. 6 Abs. 1 lit. a
                    DSGVO und
                    § 25 Abs. 1 TTDSG, soweit die Einwilligung die Speicherung von Cookies oder den Zugriff auf
                    Informationen
                    im Endgerät des Nutzers (z. B. Device-Fingerprinting) im Sinne des TTDSG umfasst. Die Einwilligung
                    ist
                    jederzeit widerrufbar.</p>
                <p>Die Datenübertragung in die USA wird auf die Standardvertragsklauseln der EU-Kommission gestützt.
                    Details
                    finden Sie hier: <a href="https://privacy.google.com/businesses/gdprcontrollerterms/"
                        target="_blank"
                        rel="noopener noreferrer">https://privacy.google.com/businesses/gdprcontrollerterms/</a> und
                    <a href="https://privacy.google.com/businesses/gdprcontrollerterms/sccs/" target="_blank"
                        rel="noopener noreferrer">https://privacy.google.com/businesses/gdprcontrollerterms/sccs/</a>.
                </p>
                <p>Mehr Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerklärung von Google:
                    <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener noreferrer">
                        https://policies.google.com/privacy?hl=de</a>.
                </p>

                <h4>Google Fonts (lokales Hosting)</h4>
                <p>Diese Seite nutzt zur einheitlichen Darstellung von Schriftarten so genannte Google Fonts, die von
                    Google
                    bereitgestellt werden. Die Google Fonts sind lokal installiert. Eine Verbindung zu Servern von
                    Google findet
                    dabei nicht statt.</p>
                <p>Weitere Informationen zu Google Fonts finden Sie unter
                    <a href="https://developers.google.com/fonts/faq" target="_blank" rel="noopener noreferrer">
                        https://developers.google.com/fonts/faq</a> und in der Datenschutzerklärung von Google:
                    <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener noreferrer">
                        https://policies.google.com/privacy?hl=de</a>.
                </p>
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
                let isAnimating = false;
                let isDragging = false;
                const isMobile = window.innerWidth < 1200;

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
                    slider.value = pos;
                }

                // Auto-animation function for mobile/tablet
                function animateSlider(e) {
                    if (e) {
                        e.preventDefault();
                        e.stopPropagation();
                    }
                    if (isAnimating || isDragging) return;
                    isAnimating = true;

                    const currentPos = parseFloat(slider.value);
                    const targetPos = currentPos < 50 ? 100 : 0;
                    const duration = 2000; // 2 seconds
                    const startTime = Date.now();
                    const startPos = currentPos;

                    function animate() {
                        const elapsed = Date.now() - startTime;
                        const progress = Math.min(elapsed / duration, 1);

                        // Ease-in-out animation
                        const easeProgress = progress < 0.5
                            ? 2 * progress * progress
                            : 1 - Math.pow(-2 * progress + 2, 2) / 2;

                        const pos = startPos + (targetPos - startPos) * easeProgress;
                        updateImage({ type: 'input', target: { value: pos } });

                        if (progress < 1) {
                            requestAnimationFrame(animate);
                        } else {
                            isAnimating = false;
                        }
                    }

                    requestAnimationFrame(animate);
                }

                // Initial position - set to 0 for left side
                updateImage({ type: 'input', target: { value: 0 } });
                slider.value = 0; // Set slider value to 0

                // Event listeners
                if (isMobile) {
                    // Mobile/Tablet: Tap to animate only
                    sliderButton.style.cursor = 'pointer';
                    slider.style.pointerEvents = 'none'; // Disable manual slider dragging

                    // Use touchstart instead of click to avoid double-tap
                    container.addEventListener('touchstart', function (e) {
                        animateSlider(e);
                    }, { passive: false });

                    container.addEventListener('click', function (e) {
                        animateSlider(e);
                    });
                } else {
                    // Desktop: Manual slider control
                    slider.addEventListener('input', updateImage);
                    slider.addEventListener('change', updateImage);
                    slider.addEventListener('mousemove', function (e) {
                        if (e.buttons > 0) {
                            updateImage(e);
                        }
                    });
                }
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
                    <li><a href="#impressum-modal" uk-toggle>Impressum</a></li>
                    <li><a href="#privacy-modal" uk-toggle>Datenschutz</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>



</html>