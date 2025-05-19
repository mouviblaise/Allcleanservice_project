<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de devis | All Clean Service</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #f4f8f7;
        }
        .form-container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 650px;
            margin: auto;
            animation: fadeIn 0.7s ease-in-out;
        }

        h2 {
            font-weight: 600;
        }

        .form-control:focus, .form-select:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }

        .btn-success {
            background-color: #28a745;
            border: none;
            transition: 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        #preview {
            max-height: 200px;
            margin-top: 10px;
            border-radius: 10px;
            display: none;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="container my-5">
        <h2 class="text-center text-success mb-4">Demande de devis</h2>

        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="form-container">
            <form action="{{ route('devis.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="text" name="telephone" id="telephone" class="form-control" required>
                    </div>

                    <div class="col-12">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" name="adresse" id="adresse" class="form-control" required>
                    </div>

                    <div class="col-12">
                        <label for="service" class="form-label">Service souhaité</label>
                        <select name="service" id="service" class="form-select" required>
                            <option disabled selected>Choisissez un service</option>
                            <option>Nettoyage de vitres</option>
                            <option>Nettoyage de tout sol</option>
                            <option>Nettoyage intérieur de véhicule</option>
                            <option>Nettoyage de bureaux, locaux, société</option>
                            <option>Entretien espaces verts</option>
                            <option>Nettoyage après chantier</option>
                            <option>Entretien maison</option>
                            <option>Entretien copropriété</option>
                            <option>Autres</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="photo" class="form-label">Photo (facultatif)</label>
                        <input type="file" name="photo" id="photo" class="form-control" accept="image/*" onchange="previewImage(event)">
                        <img id="preview" src="#" alt="Aperçu" class="img-fluid">
                    </div>
                </div>

                <button type="submit" class="btn btn-success w-100 mt-4">Envoyer la demande</button>
            </form>
        </div>

        <div class="text-center mt-4">
            <a href="{{ url('/') }}" class="text-decoration-none text-muted">← Retour à l'accueil</a>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('preview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>
</html>
