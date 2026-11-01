<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
</head>
<body>
    <?php require __DIR__ . '/partials/client-header.html.php'; ?>

    <main>
        <h1><?= htmlspecialchars($heading, ENT_QUOTES, 'UTF-8') ?></h1>

        <nav aria-label="Etapy rezerwacji">
            <ol>
                <li><a href="/#uslugi">Usługa</a></li>
                <li aria-current="step">Termin i opis</li>
                <li>Wysłanie</li>
            </ol>
        </nav>

        <form action="/reservation" method="post" enctype="multipart/form-data">
            <section aria-labelledby="service-heading">
                <p>Usługa</p>
                <h2 id="service-heading"><?= htmlspecialchars($reservation['service'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p><?= htmlspecialchars($reservation['serviceDetails'], ENT_QUOTES, 'UTF-8') ?></p>
                <a href="#">Zmień usługę</a>
            </section>

            <section aria-labelledby="vehicle-heading">
                <p>Pojazd</p>
                <h2 id="vehicle-heading"><?= htmlspecialchars($reservation['vehicle'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p><?= htmlspecialchars($reservation['vehicleDetails'], ENT_QUOTES, 'UTF-8') ?></p>
                <a href="#">Inne auto</a>
            </section>

            <section aria-labelledby="term-heading">
                <h2 id="term-heading">Termin</h2>

                <fieldset>
                    <legend>Dzień</legend>
                    <?php foreach ($days as $day): ?>
                        <label>
                            <input
                                type="radio"
                                name="day"
                                value="<?= htmlspecialchars($day['date'], ENT_QUOTES, 'UTF-8') ?>"
                                <?= $day['selected'] ? 'checked' : '' ?>
                            >
                            <time datetime="<?= htmlspecialchars($day['date'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($day['label'], ENT_QUOTES, 'UTF-8') ?></time>
                            <small><?= htmlspecialchars($day['availability'], ENT_QUOTES, 'UTF-8') ?></small>
                        </label>
                    <?php endforeach; ?>
                </fieldset>

                <fieldset>
                    <legend>Godzina</legend>
                    <?php foreach ($timeSlots as $slot): ?>
                        <label>
                            <input
                                type="radio"
                                name="time"
                                value="<?= htmlspecialchars($slot['time'], ENT_QUOTES, 'UTF-8') ?>"
                                <?= $slot['selected'] ? 'checked' : '' ?>
                                <?= $slot['free'] ? '' : 'disabled' ?>
                            >
                            <?= htmlspecialchars($slot['time'], ENT_QUOTES, 'UTF-8') ?>
                            <small><?= htmlspecialchars($slot['status'], ENT_QUOTES, 'UTF-8') ?></small>
                        </label>
                    <?php endforeach; ?>
                </fieldset>

                <p>
                    Klocki zajmują około 90 minut na podnośniku kolumnowym. Pokazujemy tylko godziny,
                    w których stanowisko 1 lub 2 jest wolne przez dwie godziny.
                </p>
            </section>

            <section aria-labelledby="issue-heading">
                <h2 id="issue-heading"><label for="issue-description">Co się dzieje z autem?</label></h2>
                <textarea
                    id="issue-description"
                    name="description"
                    rows="4"
                    maxlength="500"
                    aria-describedby="issue-limit"
                ><?= htmlspecialchars($issueDescription, ENT_QUOTES, 'UTF-8') ?></textarea>
                <p id="issue-limit">Limit: 500 znaków</p>
            </section>

            <section aria-labelledby="photos-heading">
                <h2 id="photos-heading">Zdjęcia usterki</h2>
                <ul>
                    <?php foreach ($photos as $photo): ?>
                        <li>
                            <?= htmlspecialchars($photo['name'], ENT_QUOTES, 'UTF-8') ?>
                            · <?= htmlspecialchars($photo['size'], ENT_QUOTES, 'UTF-8') ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <label>
                    Dodaj
                    <input
                        type="file"
                        name="photos[]"
                        accept="image/jpeg,image/png,image/webp"
                        multiple
                        aria-describedby="photos-hint"
                    >
                </label>
                <p id="photos-hint">JPG, PNG lub WebP, do 5 MB, najwyżej 4 zdjęcia</p>
            </section>

            <aside aria-labelledby="summary-heading">
                <h2 id="summary-heading">Twoja rezerwacja</h2>
                <dl>
                    <dt>Usługa</dt>
                    <dd><?= htmlspecialchars($reservation['service'], ENT_QUOTES, 'UTF-8') ?></dd>
                    <dt>Termin</dt>
                    <dd><?= htmlspecialchars($reservation['term'], ENT_QUOTES, 'UTF-8') ?></dd>
                    <dt>Stanowisko</dt>
                    <dd><?= htmlspecialchars($reservation['workstation'], ENT_QUOTES, 'UTF-8') ?></dd>
                    <dt>Pojazd</dt>
                    <dd><?= htmlspecialchars($reservation['vehicleShort'], ENT_QUOTES, 'UTF-8') ?></dd>
                    <dt>Zdjęcia</dt>
                    <dd><?= htmlspecialchars($reservation['photoCount'], ENT_QUOTES, 'UTF-8') ?></dd>
                    <dt>Szacowany koszt</dt>
                    <dd><strong><?= htmlspecialchars($reservation['estimatedCost'], ENT_QUOTES, 'UTF-8') ?></strong></dd>
                </dl>

                <p>Godzina 9:00 czeka na Ciebie jeszcze 9 min 41 s. Nikt inny jej teraz nie zarezerwuje.</p>

                <label>
                    <input type="checkbox" name="termsAccepted" value="1" checked required>
                    Akceptuję regulamin warsztatu
                </label>

                <!-- TODO: Odblokować po dodaniu trasy POST /reservation i warstwy modelu -->
                <button type="submit" disabled>Wyślij rezerwację</button>

                <p>Wyślemy e-mail z linkiem. Bez potwierdzenia w 24 h rezerwacja wygasa.</p>
            </aside>
        </form>
    </main>

    <?php require __DIR__ . '/partials/client-footer.html.php'; ?>
</body>
</html>
