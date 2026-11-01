<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <main>
        <h1>Rezerwacja nr <?= htmlspecialchars((string) $reservationId, ENT_QUOTES, 'UTF-8') ?></h1>
        <dl>
            <dt>Usługa</dt>
            <dd><?= htmlspecialchars($reservation['service'], ENT_QUOTES, 'UTF-8') ?></dd>
            <dt>Termin</dt>
            <dd><?= htmlspecialchars($reservation['term'], ENT_QUOTES, 'UTF-8') ?></dd>
            <dt>Pojazd</dt>
            <dd><?= htmlspecialchars($reservation['vehicleShort'], ENT_QUOTES, 'UTF-8') ?></dd>
        </dl>
        <a href="/reservation">Wróć do formularza rezerwacji</a>
    </main>
</body>
</html>
