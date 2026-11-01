<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php require __DIR__ . '/partials/client-header.html.php'; ?>

    <main>
        <h1>Corolla czeka na Twoją decyzję</h1>
        <p>Mechanik zatrzymał pracę na stanowisku 2 o 10:25 i pyta o wymianę tarcz. Bez Twojej zgody skończy tylko klocki.</p>

        <section aria-label="Pytanie mechanika">
            <figure>
                <blockquote>
                    <p>„Tarcze przednie mają 20,4 mm przy minimum 21 mm. Zalecam wymianę razem z klockami, inaczej nowe klocki szybko się zużyją.”</p>
                </blockquote>
                <figcaption>Marek Nowak, mechanik · <time datetime="2026-11-03T10:25">10:25</time></figcaption>
            </figure>
            <figure>
                <!-- TODO: Dodać plik zdjęcia z prototypu do public/ i znacznik img -->
                <figcaption>Zdjęcie od mechanika, 10:24</figcaption>
            </figure>
            <form action="/visits" method="post">
                <p>Tarcze przód 350,00 zł · robocizna 0,5 h 60,00 zł</p>
                <!-- TODO: Odblokować po dodaniu trasy POST /visits i warstwy modelu -->
                <button type="submit" name="decision" value="accept" disabled>Zgadzam się, dopisz 410,00 zł</button>
                <button type="submit" name="decision" value="decline" disabled>Nie teraz</button>
            </form>
        </section>

        <section aria-labelledby="status-heading">
            <h2 id="status-heading">Status naprawy</h2>
            <ol>
                <li>
                    <h3>Przyjęte</h3>
                    <p>sob 31.10, 14:05</p>
                </li>
                <li>
                    <h3>Potwierdzone</h3>
                    <p>sob 31.10, 14:20, link z e-maila</p>
                </li>
                <li aria-current="step">
                    <h3>W trakcie</h3>
                    <p>stanowisko 2 od 9:04, czeka na decyzję od 10:25</p>
                </li>
                <li>
                    <h3>Gotowe do odbioru</h3>
                    <p>ok. 12:30 po zgodzie, ok. 11:30 bez</p>
                </li>
            </ol>
        </section>

        <section aria-labelledby="estimate-heading">
            <h2 id="estimate-heading">Kosztorys</h2>
            <table>
                <tbody>
                    <tr><th scope="row">Klocki hamulcowe przód</th><td>320,00 zł</td></tr>
                    <tr><th scope="row">Robocizna 1,5 h</th><td>180,00 zł</td></tr>
                    <tr><th scope="row">Razem teraz</th><td><strong>500,00 zł</strong></td></tr>
                    <tr><th scope="row">Do decyzji: tarcze przód i 0,5 h</th><td>410,00 zł</td></tr>
                    <tr><th scope="row">Razem po zgodzie</th><td>910,00 zł</td></tr>
                </tbody>
            </table>
        </section>

        <article aria-labelledby="email-heading">
            <p>Ostatni e-mail · wt 3.11, 10:26</p>
            <h2 id="email-heading">Pytanie o tarcze, Corolla KR 4X21B</h2>
            <p>
                Dzień dobry Pani Anno, podczas wymiany klocków mechanik zmierzył tarcze przednie.
                Mają 20,4 mm przy minimum 21 mm. Prosimy o decyzję w panelu albo telefonicznie: 12 345 67 89.
            </p>
        </article>

        <section aria-labelledby="history-heading">
            <h2 id="history-heading">Historia serwisowa</h2>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Usługa</th>
                        <th scope="col">Mechanik</th>
                        <th scope="col">Status</th>
                        <th scope="col">Koszt</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><time datetime="2026-09-12">12.09.2026</time></td>
                        <td>Wymiana oleju i filtrów</td>
                        <td>Piotr Wiśniewski</td>
                        <td>Odebrane</td>
                        <td>289,00 zł</td>
                    </tr>
                    <tr>
                        <td><time datetime="2026-06-03">03.06.2026</time></td>
                        <td>Serwis klimatyzacji</td>
                        <td>Marek Nowak</td>
                        <td>Odebrane</td>
                        <td>219,00 zł</td>
                    </tr>
                    <tr>
                        <td><time datetime="2026-04-18">18.04.2026</time></td>
                        <td>Diagnostyka komputerowa</td>
                        <td>—</td>
                        <td>Anulowane</td>
                        <td>0,00 zł</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <?php require __DIR__ . '/partials/client-footer.html.php'; ?>
</body>
</html>
