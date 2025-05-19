<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau message de contact</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f7f7f7; padding: 20px; }
        .email-container { background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .email-container h2 { color: #28a745; }
        .label { font-weight: bold; color: #333; }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>📩 Nouveau message depuis le site All Clean Service</h2>

        <p><span class="label">👤 Nom :</span> {{ $nom }}</p>
        <p><span class="label">📧 Email :</span> {{ $email }}</p>
        <p><span class="label">💬 Message :</span><br>{{ $message_content }}</p>
    </div>
</body>
</html>