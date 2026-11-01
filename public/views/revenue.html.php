<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php require __DIR__ . '/partials/panel-nav.html.php'; ?>

    <main>
        <h1>Przychody · 2026</h1>
        <p>Październik zamknęliśmy na 48 920 zł: najlepszy miesiąc roku, o 5 310 zł więcej niż wrzesień.</p>
        <p><small>Widok <code>v_monthly_revenue</code> · odświeżono 31.10, 14:00</small></p>
        <a href="#">Eksportuj CSV</a>

        <section aria-label="Najważniejsze liczby">
            <dl>
                <dt>Przychód <small>październik 2026</small></dt>
                <dd>48 920 zł</dd>
                <dt>Zlecenia zakończone <small>październik 2026</small></dt>
                <dd>142</dd>
                <dt>Średnia wartość zlecenia <small>48 920 zł / 142 zlecenia</small></dt>
                <dd>344,51 zł</dd>
                <dt>Od początku roku <small>styczeń–październik</small></dt>
                <dd>384 590 zł</dd>
            </dl>
        </section>

        <section aria-labelledby="chart-heading">
            <h2 id="chart-heading">Przychód miesięczny, zł brutto</h2>
            <figure>
                <!-- TODO: Dodać wykres słupkowy sty–gru, gdy miesięczne dane będą pochodzić z widoku bazy -->
                <figcaption>Listopad i grudzień: brak danych, miesiące jeszcze trwają.</figcaption>
            </figure>
        </section>

        <aside id="cron" aria-labelledby="cron-heading">
            <h2 id="cron-heading">Zadania CRON</h2>
            <article>
                <h3>Przypomnienia o wizytach</h3>
                <p>działa · co godzinę, o pełnej</p>
                <p>Ostatnio 14:00: 6 e-maili o wizytach zaplanowanych na jutro.</p>
                <p><small>Następne uruchomienie 15:00</small></p>
            </article>
            <article>
                <h3>Anulowanie niepotwierdzonych</h3>
                <p>działa · co godzinę, 15 minut po pełnej</p>
                <p>Ostatnio 14:15: 2 rezerwacje bez potwierdzenia po 24 h, 4 godziny wróciły na tablicę.</p>
                <p><small>Następne uruchomienie 15:15</small></p>
            </article>
            <article>
                <h3>Sprzątanie /uploads</h3>
                <p>działa · codziennie o 3:00</p>
                <p>Ostatnio 3:00: usunięto 4 zdjęcia bez rezerwacji.</p>
                <p><small>Następne uruchomienie jutro 3:00</small></p>
            </article>
            <p>Anulowane przez CRON w październiku: 6</p>
        </aside>

        <section aria-labelledby="summary-heading">
            <h2 id="summary-heading">Zestawienie miesięczne</h2>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Miesiąc</th>
                        <th scope="col">Zlecenia</th>
                        <th scope="col">Przychód brutto</th>
                        <th scope="col">Średnia wartość</th>
                        <th scope="col">Anulowane</th>
                        <th scope="col">Zmiana m/m</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><th scope="row">Październik 2026</th><td>142</td><td>48 920,00 zł</td><td>344,51 zł</td><td>6</td><td>+12,2%</td></tr>
                    <tr><th scope="row">Wrzesień 2026</th><td>134</td><td>43 610,00 zł</td><td>325,45 zł</td><td>6</td><td>+6,9%</td></tr>
                    <tr><th scope="row">Sierpień 2026</th><td>121</td><td>40 790,00 zł</td><td>337,11 zł</td><td>5</td><td>+11,8%</td></tr>
                    <tr><th scope="row">Lipiec 2026</th><td>115</td><td>36 490,00 zł</td><td>317,22 zł</td><td>9</td><td>−6,9%</td></tr>
                    <tr><th scope="row">Czerwiec 2026</th><td>119</td><td>39 200,00 zł</td><td>329,41 zł</td><td>4</td><td>−4,4%</td></tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
