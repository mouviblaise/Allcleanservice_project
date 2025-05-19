<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
        }

        .card-service {
            border-radius: 12px;
            transition: box-shadow 0.3s ease, transform 0.3s ease, background-color 0.3s ease;
            overflow: hidden;
            border: 1px solid #eaeaea;
        }

        .card-service:hover {
            background-color: #f9f9f9;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.06);
            transform: translateY(-4px);
        }

        .card-service .card-title {
            transition: border-bottom 0.3s ease, color 0.3s ease;
            display: inline-block;
            border-bottom: 2px solid transparent;
        }

        .card-service:hover .card-title {
            color: #0d6efd;
            border-bottom: 2px solid #0d6efd;
        }

        .card-service .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .services-intro {
            max-width: 800px;
            margin: 0 auto;
            color: #555;
        }

        @media (max-width: 768px) {
            .card-service .card-img-top {
                height: 160px;
            }
        }
    </style>
</head>
<body>

<div class="container py-5">
    <!-- Introduction -->
    <div class="text-center mb-5 services-intro">
        <h1 class="mb-3 fw-bold">Découvrez Nos Services Professionnels</h1>
        <p class="lead">
            Nous proposons une gamme complète de services de nettoyage et d’entretien adaptés aux particuliers, entreprises, syndics de copropriétés et collectivités. 
            Notre équipe expérimentée intervient avec rigueur, ponctualité et professionnalisme pour garantir votre satisfaction.
        </p>
    </div>
<div class="mb-4">
    <a href="{{ route('home') }}" class="btn btn-outline-primary">
        ← Retour à l'accueil
    </a>
</div>

    <!-- Services list -->
    <div class="row g-4">
        <!-- Service 1 -->
        <div class="col-md-4">
            <div class="card card-service h-100">
                <img src="images/vitres.jpg" class="card-img-top" alt="Nettoyage de vitres">
                <div class="card-body">
                    <h5 class="card-title">Nettoyage de vitres</h5>
                    <p class="card-text">Des vitres éclatantes grâce à notre expertise, même en hauteur ou difficiles d'accès.</p>
                </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-4">
            <div class="card card-service h-100">
                <img src="images/sols.jpg" class="card-img-top" alt="Nettoyage de tout sol">
                <div class="card-body">
                    <h5 class="card-title">Nettoyage de tout sol</h5>
                    <p class="card-text">Sol carrelé, bétonné ou en moquette, nos solutions assurent brillance et hygiène optimale.</p>
                </div>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-4">
            <div class="card card-service h-100">
                <img src="images/vehicules.jpg" class="card-img-top" alt="Nettoyage intérieur de véhicule">
                <div class="card-body">
                    <h5 class="card-title">Nettoyage intérieur de véhicule</h5>
                    <p class="card-text">Un intérieur de voiture impeccable grâce à un nettoyage minutieux et en profondeur.</p>
                </div>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-4">
            <div class="card card-service h-100">
                <img src="images/locaux.jpg" class="card-img-top" alt="Nettoyage de bureaux">
                <div class="card-body">
                    <h5 class="card-title">Nettoyage de bureaux, locaux, société</h5>
                    <p class="card-text">Des espaces professionnels propres et accueillants, adaptés à votre activité.</p>
                </div>
            </div>
        </div>

        <!-- Service 5 -->
        <div class="col-md-4">
            <div class="card card-service h-100">
                <img src="images/espaces_verts.jpg" class="card-img-top" alt="Entretien espaces verts">
                <div class="card-body">
                    <h5 class="card-title">Entretien espaces verts</h5>
                    <p class="card-text">Tonte, taille, nettoyage... Offrez à vos espaces extérieurs un entretien régulier et soigné.</p>
                </div>
            </div>
        </div>

        <!-- Service 6 -->
        <div class="col-md-4">
            <div class="card card-service h-100">
                <img src="images/chantier.jpg" class="card-img-top" alt="Nettoyage après chantier">
                <div class="card-body">
                    <h5 class="card-title">Nettoyage après chantier</h5>
                    <p class="card-text">Remise en état rapide et efficace après travaux de construction ou rénovation.</p>
                </div>
            </div>
        </div>

        <!-- Service 7 -->
        <div class="col-md-4">
            <div class="card card-service h-100">
                <img src="images/residences.jpg" class="card-img-top" alt="Entretien maison">
                <div class="card-body">
                    <h5 class="card-title">Entretien maison</h5>
                    <p class="card-text">Nettoyage quotidien, hebdomadaire ou ponctuel pour une maison toujours impeccable.</p>
                </div>
            </div>
        </div>

        <!-- Service 8 -->
        <div class="col-md-4">
            <div class="card card-service h-100">
                <img src="images/coproprio.jpg" class="card-img-top" alt="Entretien copropriété">
                <div class="card-body">
                    <h5 class="card-title">Entretien copropriété</h5>
                    <p class="card-text">Cage d’escalier, hall, espaces communs... un cadre agréable pour les résidents.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center mt-5">
    
    </a>
</div>

<!-- Bootstrap JS (facultatif ici) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
