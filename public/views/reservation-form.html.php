<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="reservation-page">
    <?php require __DIR__ . '/partials/client-header.html.php'; ?>

    <main class="reservation">
        <h1 class="reservation__title"><?= htmlspecialchars($heading, ENT_QUOTES, 'UTF-8') ?></h1>

        <nav class="steps" aria-label="Etapy rezerwacji">
            <ol>
                <li><a href="/#uslugi">Usługa</a></li>
                <li aria-current="step">Termin i opis</li>
                <li>Wysłanie</li>
            </ol>
        </nav>

        <form class="reservation__form" action="/reservation" method="post" enctype="multipart/form-data">
            <section class="card card--service" aria-labelledby="service-heading">
                <p class="eyebrow">Usługa</p>
                <h2 class="card__title" id="service-heading"><?= htmlspecialchars($reservation['service'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p class="card__text"><?= htmlspecialchars($reservation['serviceDetails'], ENT_QUOTES, 'UTF-8') ?></p>
                <a class="text-link" href="#">Zmień usługę</a>
            </section>

            <section class="card card--vehicle" aria-labelledby="vehicle-heading">
                <p class="eyebrow">Pojazd</p>
                <h2 class="card__title" id="vehicle-heading"><?= htmlspecialchars($reservation['vehicle'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p class="card__text"><?= htmlspecialchars($reservation['vehicleDetails'], ENT_QUOTES, 'UTF-8') ?></p>
                <a class="text-link" href="#">Inne auto</a>
            </section>

            <section class="card card--term" aria-labelledby="term-heading">
                <h2 class="card__heading" id="term-heading">Termin</h2>

                <fieldset class="choices choices--days">
                    <legend class="visually-hidden">Dzień</legend>
                    <?php foreach ($days as $day): ?>
                        <label class="choice choice--day">
                            <input
                                type="radio"
                                name="day"
                                value="<?= htmlspecialchars($day['date'], ENT_QUOTES, 'UTF-8') ?>"
                                <?= $day['selected'] ? 'checked' : '' ?>
                                <?= $day['free'] ? '' : 'disabled' ?>
                            >
                            <time class="choice__value" datetime="<?= htmlspecialchars($day['date'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($day['label'], ENT_QUOTES, 'UTF-8') ?></time>
                            <small class="choice__hint"><?= htmlspecialchars($day['availability'], ENT_QUOTES, 'UTF-8') ?></small>
                        </label>
                    <?php endforeach; ?>
                </fieldset>

                <fieldset class="choices choices--slots">
                    <legend class="visually-hidden">Godzina</legend>
                    <?php foreach ($timeSlots as $slot): ?>
                        <label class="choice choice--slot">
                            <input
                                type="radio"
                                name="time"
                                value="<?= htmlspecialchars($slot['time'], ENT_QUOTES, 'UTF-8') ?>"
                                <?= $slot['selected'] ? 'checked' : '' ?>
                                <?= $slot['free'] ? '' : 'disabled' ?>
                            >
                            <span class="choice__value"><?= htmlspecialchars($slot['time'], ENT_QUOTES, 'UTF-8') ?></span>
                            <small class="choice__hint"><?= htmlspecialchars($slot['status'], ENT_QUOTES, 'UTF-8') ?></small>
                        </label>
                    <?php endforeach; ?>
                </fieldset>

                <p class="note">
                    Klocki zajmują około 90 minut na podnośniku kolumnowym. Pokazujemy tylko godziny,
                    w których stanowisko 1 lub 2 jest wolne przez dwie godziny.
                </p>
            </section>

            <section class="card card--issue" aria-labelledby="issue-heading">
                <h2 class="card__heading" id="issue-heading"><label for="issue-description">Co się dzieje z autem?</label></h2>
                <div class="issue-field">
                    <textarea
                        id="issue-description"
                        name="description"
                        rows="4"
                        maxlength="500"
                        aria-describedby="issue-limit"
                    ><?= htmlspecialchars($issueDescription, ENT_QUOTES, 'UTF-8') ?></textarea>
                    <p class="issue-field__limit" id="issue-limit"><?= htmlspecialchars((string) $issueLength, ENT_QUOTES, 'UTF-8') ?> z 500 znaków</p>
                </div>
            </section>

            <section class="card card--photos" aria-labelledby="photos-heading">
                <h2 class="card__heading" id="photos-heading">Zdjęcia usterki</h2>
                <div class="photo-grid">
                    <ul>
                        <?php foreach ($photos as $photo): ?>
                            <li class="photo">
                                <img
                                    class="photo__image"
                                    src="<?= htmlspecialchars($photo['src'], ENT_QUOTES, 'UTF-8') ?>"
                                    alt="<?= htmlspecialchars($photo['alt'], ENT_QUOTES, 'UTF-8') ?>"
                                    width="120"
                                    height="140"
                                >
                                <?= htmlspecialchars($photo['name'], ENT_QUOTES, 'UTF-8') ?>
                                · <?= htmlspecialchars($photo['size'], ENT_QUOTES, 'UTF-8') ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <label class="upload">
                        <img src="/images/icon-plus.svg" alt="" width="24" height="24">
                        Dodaj
                        <input
                            class="visually-hidden"
                            type="file"
                            name="photos[]"
                            accept="image/jpeg,image/png,image/webp"
                            multiple
                            aria-describedby="photos-hint"
                        >
                    </label>
                </div>
                <p class="hint" id="photos-hint">JPG, PNG lub WebP, do 5 MB, najwyżej 4 zdjęcia</p>
            </section>

            <aside class="summary" aria-labelledby="summary-heading">
                <h2 class="summary__heading" id="summary-heading">Twoja rezerwacja</h2>
                <dl class="summary__list">
                    <div>
                        <dt>Usługa</dt>
                        <dd><?= htmlspecialchars($reservation['service'], ENT_QUOTES, 'UTF-8') ?></dd>
                    </div>
                    <div>
                        <dt>Termin</dt>
                        <dd><?= htmlspecialchars($reservation['term'], ENT_QUOTES, 'UTF-8') ?></dd>
                    </div>
                    <div>
                        <dt>Stanowisko</dt>
                        <dd><?= htmlspecialchars($reservation['workstation'], ENT_QUOTES, 'UTF-8') ?></dd>
                    </div>
                    <div>
                        <dt>Pojazd</dt>
                        <dd><?= htmlspecialchars($reservation['vehicleShort'], ENT_QUOTES, 'UTF-8') ?></dd>
                    </div>
                    <div>
                        <dt>Zdjęcia</dt>
                        <dd><?= htmlspecialchars($reservation['photoCount'], ENT_QUOTES, 'UTF-8') ?></dd>
                    </div>
                    <div class="summary__cost">
                        <dt>Szacowany koszt</dt>
                        <dd><?= htmlspecialchars($reservation['estimatedCost'], ENT_QUOTES, 'UTF-8') ?></dd>
                    </div>
                </dl>

                <p class="summary__notice">Godzina 9:00 czeka na Ciebie jeszcze 9 min 41 s. Nikt inny jej teraz nie zarezerwuje.</p>

                <label class="consent">
                    <input type="checkbox" name="termsAccepted" value="1" checked required>
                    Akceptuję regulamin warsztatu
                </label>

                <!-- TODO: Odblokować po dodaniu trasy POST /reservation i warstwy modelu -->
                <button class="button" type="submit" disabled>Wyślij rezerwację</button>

                <p class="summary__footnote">Wyślemy e-mail z linkiem. Bez potwierdzenia w 24 h rezerwacja wygasa.</p>
            </aside>
        </form>
    </main>

    <?php require __DIR__ . '/partials/client-footer.html.php'; ?>
</body>
</html>
