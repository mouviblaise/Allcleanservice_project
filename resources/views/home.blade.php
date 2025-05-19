<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Clean Service - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .service-card:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            background-color: #f8f9fa;
        }
    </style>
</head>
<body class="bg-light text-dark">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="/">All Clean Service</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('home') }}">Accueil</a></li>
                    @if (Request::routeIs('home'))
                        <li class="nav-item"><a class="nav-link text-white" href="#services"> Services</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('services') }}"> Services</a></li>
                    @endif
                    <li class="nav-item"><a class="nav-link text-white" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-5 bg-white" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('images/nettoyage.jpg') }}" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="fw-bold text-success mb-3">Bienvenue chez All Clean Service</h2>
                    <p class="lead text-secondary">
                        Redonnez de l’éclat à vos espaces avec All Clean Service — votre partenaire de confiance pour un nettoyage professionnel, efficace et discret.
                    </p>
                    <p class="lead text-secondary">Chez All Clean Service, nous faisons bien plus que nettoyer. Nous créons des environnements sains, accueillants et impeccables pour tous.</p>
                    <p class="text-muted mb-4">
                        Nos équipes qualifiées interviennent avec soin pour vous garantir des espaces impeccables, agréables et propices à votre bien-être, que ce soit pour votre domicile ou votre entreprise.
                    </p>
                    <a href="{{ route('devis.formulaire') }}" class="btn btn-success">Demander un devis</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pourquoi nous choisir -->
    <section class="container my-5" data-aos="fade-up">
        <h2 class="text-center mb-4">Pourquoi nous choisir ?</h2>
        <div class="text-center mb-4">
            <h2 class="fw-bold text-success">🔧 Des équipements professionnels pour un service de qualité</h2>
            <p>All Clean Service utilise des appareils performants adaptés à chaque intervention :</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class="ps-0" style="list-style: none;">
                    <li class="d-flex align-items-start mb-2"><span class="me-2 text-success fs-5">✅</span> Aspirateurs industriels ultra-puissants</li>
                    <li class="d-flex align-items-start mb-2"><span class="me-2 text-success fs-5">✅</span> Nettoyeurs vapeur haute pression</li>
                    <li class="d-flex align-items-start mb-2"><span class="me-2 text-success fs-5">✅</span> Autolaveuses pour grandes surfaces</li>
                    <li class="d-flex align-items-start mb-4"><span class="me-2 text-success fs-5">✅</span> Matériel spécialisé pour vitres et sols délicats</li>
                </ul>
                <h3 class="fw-bold text-success mb-3">🧴 Produits d’hygiène éco-certifiés</h3>
                <p>Pour protéger votre santé et celle de l’environnement, nous utilisons :</p>
                <ul class="ps-0" style="list-style: none;">
                    <li class="d-flex align-items-start mb-2"><span class="me-2 text-success fs-5">🌿</span> Produits respectueux de l’environnement (Ecolabel Européen)</li>
                    <li class="d-flex align-items-start mb-2"><span class="me-2 text-success fs-5">🧼</span> Détergents et désinfectants conformes aux normes</li>
                    <li class="d-flex align-items-start mb-4"><span class="me-2 text-success fs-5">🧪</span> Produits hypoallergéniques sans danger pour tous</li>
                </ul>
                <p class="mt-3">🛡️ Chaque intervention est réalisée dans le respect des normes d’hygiène et de sécurité.</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 mb-4"><i class="bi bi-person-check h2 text-success"></i><h5>Équipe expérimentée</h5><p>Des professionnels qualifiés à votre service.</p></div>
            <div class="col-md-3 mb-4"><i class="bi bi-recycle h2 text-success"></i><h5>Produits écologiques</h5><p>Respect de l’environnement assuré.</p></div>
            <div class="col-md-3 mb-4"><i class="bi bi-geo-alt h2 text-success"></i><h5>Couverture nationale</h5><p>Nous intervenons partout en France.</p></div>
            <div class="col-md-3 mb-4"><i class="bi bi-clipboard-check h2 text-success"></i><h5>Devis gratuit</h5><p>Rapide et sans engagement.</p></div>
        </div>
    </section>

    <!-- 🌟 Intro avant les services -->
    <section class="container my-5" data-aos="fade-up">
        <div class="text-center">
            <h2 class="fw-bold text-success">✨ Découvrez nos services sur mesure</h2>
            <p class="lead text-secondary mt-3">
                All Clean Service s'engage à répondre à tous vos besoins de propreté et d’entretien avec rigueur, efficacité et professionnalisme.
            </p>
            <p class="text-muted">
                Que vous soyez un particulier, une entreprise ou une collectivité, nous avons le service adapté pour rendre vos espaces impeccables.
            </p>
        </div>
    </section>

    <!-- Nos Services -->
    <section class="container my-5" id="services">
        
<div class="row">
    @php
        $servicesApercu = [
            [
                'image' => 'vitres.jpg',
                'title' => 'Nettoyage de vitres',
                'text'  => 'Des vitres éclatantes, même en hauteur ou difficiles d\'accès.'
            ],
            [
                'image' => 'sols.jpg',
                'title' => 'Nettoyage de sols',
                'text'  => 'Sol carrelé, bétonné ou moquette : brillance assurée.'
            ],
            [
                'image' => 'vehicules.jpg',
                'title' => 'Nettoyage intérieur de véhicules',
                'text'  => 'Un habitacle impeccable grâce à un nettoyage minutieux.'
            ],
            [
                'image' => 'espaces_verts.jpg',
                'title' => 'Entretien des espaces verts',
                'text'  => 'Tonte, taille, nettoyage : vos extérieurs toujours soignés.'
            ],
        ];
    @endphp

    @foreach($servicesApercu as $s)
    <div class="col-md-3 mb-4" data-aos="fade-up">
        <div class="card service-card h-100 shadow-sm">
            <img src="/images/{{ $s['image'] }}" class="card-img-top" alt="{{ $s['title'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $s['title'] }}</h5>
                <p class="card-text">{{ $s['text'] }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

        <div class="text-center mt-3" data-aos="fade-up">
            <a href="{{ route('services') }}" class="btn btn-success">Voir tous les services</a>
        </div>
    </section>

    <!-- Appel à l'action -->
    <div class="text-center mt-4" data-aos="fade-up">
        <p class="lead">Besoin d’un devis personnalisé ou d’un renseignement ?</p>
        <a href="{{ route('contact') }}" class="btn btn-outline-success btn-lg">Contactez-nous dès maintenant</a>
    </div>

    <!-- Footer -->
    <footer class="bg-success text-white text-center text-md-start p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="fw-bold">Informations</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-decoration-none text-white"><i class="bi bi-house-door-fill"></i> Accueil</a></li>
                        <li><a href="{{ route('services') }}" class="text-decoration-none text-white"><i class="bi bi-briefcase-fill"></i> Nos services</a></li>
                        <li><a href="{{ route('contact') }}" class="text-decoration-none text-white"><i class="bi bi-telephone-fill"></i> Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p class="mb-1"><i class="bi bi-geo-alt-fill"></i> 198 rue Jean Racine, Résidence Monsegur</p>
                    <p class="mb-1"><i class="bi bi-telephone-fill"></i> <a href="tel:+0783236403" class="text-decoration-none text-dark">0783236403</a></p>
                    <p class="mb-0"><i class="bi bi-envelope-fill"></i> <a href="mailto:Allcleanservice@gmail.com" class="text-decoration-none text-dark">Allcleanservice@gmail.com</a></p>
                    <p><i class="bi bi-clock-fill"></i> Lundi au Vendredi : 08h00 - 18h00</p>
                </div>
                <div class="col-md-4">
                    <h5 class="text-uppercase mb-3">Nos services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#vitres" class="text-decoration-none text-white"><i class="bi bi-aspect-ratio-fill"></i> Nettoyage de vitres</a></li>
                        <li><a href="#sol" class="text-decoration-none text-white"><i class="bi bi-grid-fill"></i> Nettoyage de tout sol</a></li>
                        <li><a href="#vehicule" class="text-decoration-none text-white"><i class="bi bi-truck-front-fill"></i> Nettoyage intérieur de véhicule</a></li>
                        <li><a href="#bureaux" class="text-decoration-none text-white"><i class="bi bi-building"></i> Nettoyage de bureaux, locaux, société</a></li>
                        <li><a href="#espaces-verts" class="text-decoration-none text-white"><i class="bi bi-tree-fill"></i> Entretien espaces verts</a></li>
                        <li><a href="#chantier" class="text-decoration-none text-white"><i class="bi bi-hammer"></i> Nettoyage après chantier</a></li>
                        <li><a href="#maison" class="text-decoration-none text-white"><i class="bi bi-house-heart-fill"></i> Entretien maison</a></li>
                        <li><a href="#copropriete" class="text-decoration-none text-white"><i class="bi bi-people-fill"></i> Entretien copropriété</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="mt-4 text-center">&copy; 2025 All Clean Service. Tous droits réservés.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>
</html>
