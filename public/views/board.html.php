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
        <h1>Tablica · wtorek, 3 listopada</h1>
        <p>KR 4X21B czeka na zgodę klienta na tarcze (+410,00 zł) od 10:25. Stanowisko 2 stoi, następne zlecenie ma na nim o 11:00.</p>
        <a href="tel:+48600112934">Zadzwoń do klienta</a>
        <a href="#">Nowe zlecenie</a>

        <section aria-labelledby="schedule-heading">
            <h2 id="schedule-heading">Harmonogram stanowisk, 7:00–18:00</h2>
            <article>
                <h3>Stanowisko 1 <small>kolumnowy</small></h3>
                <ul>
                    <li>7:00–12:00 · KWI 5520 · Rozrząd · W trakcie</li>
                    <li>14:00–17:00 · KR 1PL86 · Sprzęgło · Zaplanowane</li>
                </ul>
            </article>
            <article>
                <h3>Stanowisko 2 <small>kolumnowy</small></h3>
                <ul>
                    <li>7:00–8:00 · KR 7T331 · Olej · Gotowe do odbioru</li>
                    <li>9:00–11:00 · KR 4X21B · Hamulce · Czeka na klienta</li>
                    <li>11:00–13:00 · KRA 22041 · Klima · Zaplanowane</li>
                    <li>15:00–18:00 · KR 3MN10 · Amortyzatory · Zaplanowane</li>
                </ul>
            </article>
            <article>
                <h3>Stanowisko 3 <small>geometria</small></h3>
                <ul>
                    <li>8:00–9:00 · KR 9LM02 · Geometria · Gotowe do odbioru</li>
                    <li>12:00–13:00 · KMY 0591 · Geometria · Zaplanowane</li>
                </ul>
            </article>
            <article>
                <h3>Stanowisko 4 <small>opony, diagnostyka</small></h3>
                <ul>
                    <li>7:00–9:00 · KR 8HH20 · Opony · Gotowe do odbioru</li>
                    <li>10:00–11:00 · KWI 1203 · Diagnostyka · W trakcie</li>
                </ul>
            </article>
        </section>

        <section aria-labelledby="orders-heading">
            <h2 id="orders-heading">Zlecenia</h2>
            <nav aria-label="Filtr zleceń">
                <ul>
                    <li><a href="#" aria-current="true">Wszystkie 10</a></li>
                    <li><a href="#">W trakcie 2</a></li>
                    <li><a href="#">Czeka na klienta 1</a></li>
                    <li><a href="#">Gotowe 3</a></li>
                    <li><a href="#">Zaplanowane 4</a></li>
                </ul>
            </nav>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Godz.</th>
                        <th scope="col">Pojazd</th>
                        <th scope="col">Usługa</th>
                        <th scope="col">St.</th>
                        <th scope="col">Status</th>
                        <th scope="col">Kwota</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>7:00</td><td>KR 7T331 <small>Toyota Yaris</small></td><td>Wymiana oleju</td><td>2</td><td>Gotowe do odbioru</td><td>289,00 zł</td></tr>
                    <tr><td>7:00</td><td>KWI 5520 <small>Škoda Octavia</small></td><td>Rozrząd</td><td>1</td><td>W trakcie</td><td>1 450,00 zł</td></tr>
                    <tr><td>7:00</td><td>KR 8HH20 <small>VW Golf</small></td><td>Wymiana opon</td><td>4</td><td>Gotowe do odbioru</td><td>160,00 zł</td></tr>
                    <tr><td>8:00</td><td>KR 9LM02 <small>Škoda Fabia</small></td><td>Geometria kół</td><td>3</td><td>Gotowe do odbioru</td><td>180,00 zł</td></tr>
                    <tr aria-current="true"><td>9:00</td><td>KR 4X21B <small>Toyota Corolla</small></td><td>Hamulce: klocki</td><td>2</td><td>Czeka na klienta</td><td>500,00 zł</td></tr>
                    <tr><td>10:00</td><td>KWI 1203 <small>Kia Ceed</small></td><td>Diagnostyka</td><td>4</td><td>W trakcie</td><td>149,00 zł</td></tr>
                </tbody>
            </table>
            <a href="#">Pokaż wszystkie 10</a>
        </section>

        <aside aria-labelledby="order-heading">
            <h2 id="order-heading">KR 4X21B · Toyota Corolla</h2>
            <p>Anna Kowalska · 600 112 934 · MS-2481</p>
            <!-- TODO: Dodać pliki zdjęć zlecenia z prototypu i znaczniki img -->
            <blockquote>
                <p>„Piszczenie przy hamowaniu, szczególnie na mokrej nawierzchni. Od wczoraj świeci się kontrolka ABS.”</p>
            </blockquote>
            <form action="/board" method="post">
                <fieldset>
                    <legend>Status</legend>
                    <label><input type="radio" name="status" value="in_progress"> W trakcie</label>
                    <label><input type="radio" name="status" value="waiting" checked> Czeka na klienta <small>od 10:25</small></label>
                    <label><input type="radio" name="status" value="ready"> Gotowe do odbioru</label>
                    <label><input type="radio" name="status" value="cancelled"> Anulowana</label>
                </fieldset>
                <h3>Kosztorys</h3>
                <table>
                    <tbody>
                        <tr><th scope="row">Klocki hamulcowe przód</th><td>320,00 zł</td></tr>
                        <tr><th scope="row">Robocizna 1,5 h</th><td>180,00 zł</td></tr>
                        <tr><th scope="row">Tarcze przód i 0,5 h, czeka na zgodę</th><td>410,00 zł</td></tr>
                        <tr><th scope="row">Razem</th><td><strong>500,00 zł</strong></td></tr>
                    </tbody>
                </table>
                <!-- TODO: Odblokować po dodaniu trasy POST /board i warstwy modelu -->
                <button type="submit" disabled>Zapisz i powiadom klienta</button>
                <p>Klient dostanie e-mail z nowym statusem i kosztorysem.</p>
            </form>
        </aside>
    </main>
</body>
</html>
