<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Réponse à votre demande</title>
</head>
<body>
    <p>Bonjour {{ $nom }},</p>

    <p>{!! nl2br(e($messageContent)) !!}</p>

    <p>Cordialement,<br>
    L'équipe All Clean Service</p>
</body>
</html>
