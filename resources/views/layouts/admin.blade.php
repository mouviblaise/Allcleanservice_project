<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | All Clean Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #198754;
            color: white;
            padding: 20px;
            flex-shrink: 0;
        }
        .sidebar a {
            color: white;
            display: block;
            margin: 10px 0;
            text-decoration: none;
            font-weight: bold;
        }
        .sidebar a:hover {
            background-color: #157347;
            padding-left: 5px;
            transition: 0.2s;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .topbar {
            background-color: #fff;
            border-bottom: 1px solid #dee2e6;
            padding: 15px 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h4>All Clean Admin</h4>
        <a href="{{ route('admin.devis.index') }}">📄 Demandes de devis</a>
        <a href="#">📷 Galerie (à venir)</a>
        <a href="#">👥 Utilisateurs (à venir)</a>
        <a href="#">⚙️ Paramètres (à venir)</a>
        <a href="#">🔓 Déconnexion</a>
    </div>

    <div class="main-content">
        <div class="topbar d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Tableau de bord</h5>
            {{-- Vous pouvez ajouter ici un avatar ou menu utilisateur --}}
        </div>

        @yield('content')
    </div>

</body>
</html>
