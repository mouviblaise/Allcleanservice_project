<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - All Clean Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container">
            <a class="navbar-brand text-white" href="{{ route('home') }}">All Clean Service</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('home') }}">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section class="text-center my-5 py-4" style="background-color: #eaf2f1; padding: 40px 0;">
        <div class="container">
            <h1 class="fw-bold mb-4" style="font-size: 2rem; color: #2c3e50;">Conctatez-nous</h1>
          <h2 class="fw-bold mb-4" style="font-size: 2rem; color: #2c3e50;">Votre confiance, notre priorité</h2>
          <p class="text-muted" style="font-size: 1.1rem; line-height: 1.6;">
            Chez <strong>All Clean Service</strong>, nous sommes convaincus que chaque client mérite un service irréprochable et une attention particulière. 
          </p>
          <p class="text-muted" style="font-size: 1.1rem; line-height: 1.6;">
            Grâce à votre confiance, nous avons la possibilité d'offrir des prestations de nettoyage personnalisées, en phase avec vos besoins spécifiques. 
          </p>
          <p class="text-muted" style="font-size: 1.1rem; line-height: 1.6;">
            Nous nous engageons à vous écouter attentivement et à vous accompagner tout au long de notre collaboration. 
            N'hésitez pas à nous contacter, nous sommes là pour vous offrir un service qui répond à vos attentes.
          </p>
        </div>
      </section>
      
      
    <!-- Formulaire de contact -->
    <div class="container mt-5">
    

        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST" class="mx-auto" style="max-width: 600px;">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success px-5">Envoyer</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-success text-white text-center p-3 mt-5">
        <p>&copy; 2025 All Clean Service. Tous droits réservés.</p>
        <p>Email : allcleanservice@gmail.com | Tél : 0783236403</p>
        <p>Adresse : 198 rue Jean Racine, Résidence Monsegur, Siège social</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
