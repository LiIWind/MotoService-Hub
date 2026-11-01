<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
</head>
<body>
    <header>
        <p>MotoService Hub</p>
        <h1>Serwis aut z rezerwacją online</h1>
        <p>Wybierz usługę i wolną godzinę, dodaj zdjęcie usterki, a postęp naprawy śledź tutaj.</p>
        <a href="/reservation">Zarezerwuj termin</a>
        <nav aria-label="Główna">
            <ul>
                <li><a href="#uslugi">Usługi i ceny</a></li>
                <li><a href="#status">Status naprawy</a></li>
                <li><a href="#dojazd">Dojazd</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section aria-label="Zdjęcia warsztatu">
            <!-- TODO: Dodać pliki zdjęć z prototypu do public/ i znaczniki img -->
            <figure><figcaption>Stanowisko z podnośnikiem</figcaption></figure>
            <figure><figcaption>Warsztat, 1943</figcaption></figure>
            <figure><figcaption>Ściana narzędzi</figcaption></figure>
            <figure><figcaption>Kolumna podnośnika</figcaption></figure>
            <figure><figcaption>Widok na Wawel</figcaption></figure>
            <figure><figcaption>Klucze płaskie na ścianie</figcaption></figure>
            <figure><figcaption>Zawieszenie na podnośniku</figcaption></figure>
            <figure><figcaption>Hala naprawy, 1943</figcaption></figure>
            <figure><figcaption>Popołudnie na hali</figcaption></figure>
            <figure><figcaption>Komplet 8–32 mm</figcaption></figure>
        </section>

        <section id="tablica" aria-labelledby="board-heading">
            <h2 id="board-heading">Tablica stanowisk, wtorek 3 listopada</h2>
            <p>
                Cztery stanowiska, godziny od 7 do 18. Ciemne pola są zajęte, jasne są wolne.
                Kliknij wolną godzinę, żeby zacząć rezerwację: zablokujemy ją dla Ciebie na 10 minut.
            </p>
            <nav aria-label="Dzień tablicy">
                <ul>
                    <li><a href="#tablica">Pn 2</a></li>
                    <li><a href="#tablica" aria-current="date">Wt 3</a></li>
                    <li><a href="#tablica">Śr 4</a></li>
                    <li><a href="#tablica">Cz 5</a></li>
                </ul>
            </nav>
            <table>
                <caption>Wt, 3 listopada</caption>
                <thead>
                    <tr>
                        <th scope="col">Stanowisko</th>
                        <th scope="col">7:00</th>
                        <th scope="col">8:00</th>
                        <th scope="col">9:00</th>
                        <th scope="col">10:00</th>
                        <th scope="col">11:00</th>
                        <th scope="col">12:00</th>
                        <th scope="col">13:00</th>
                        <th scope="col">14:00</th>
                        <th scope="col">15:00</th>
                        <th scope="col">16:00</th>
                        <th scope="col">17:00</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Stanowisko 1 <small>podnośnik kolumnowy</small></th>
                        <td colspan="5">KWI 5520 <small>Rozrząd</small></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td colspan="3">KR 1PL86 <small>Sprzęgło</small></td>
                        <td><a href="/reservation">wolne</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Stanowisko 2 <small>podnośnik kolumnowy</small></th>
                        <td>KR 7T331 <small>Olej</small></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td colspan="2"><strong>9:00–11:00</strong> <small>wybrane przez Ciebie</small></td>
                        <td colspan="2">KRA 22041 <small>Klimatyzacja</small></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td colspan="3">KR 3MN10 <small>Amortyzatory</small></td>
                    </tr>
                    <tr>
                        <th scope="row">Stanowisko 3 <small>geometria kół</small></th>
                        <td><a href="/reservation">wolne</a></td>
                        <td>KR 9LM02 <small>Geometria</small></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td>KMY 0591 <small>Geometria</small></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td><a href="/reservation">wolne</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Stanowisko 4 <small>opony i diagnostyka</small></th>
                        <td colspan="2">KR 8HH20 <small>Opony</small></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td>KWI 1203 <small>Diagnostyka</small></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td><a href="/reservation">wolne</a></td>
                        <td><a href="/reservation">wolne</a></td>
                    </tr>
                </tbody>
            </table>
            <p>Wolnych godzin we wtorek: 23 · stanowisko 2, 9:00–11:00 czeka na Ciebie</p>
        </section>

        <section aria-labelledby="process-heading">
            <h2 id="process-heading">Od opisu usterki do odbioru auta</h2>
            <p>
                Bez telefonów i karteczek: wszystko, co powiesz o aucie, trafia do jednego zlecenia
                przypiętego do jednej godziny na jednym stanowisku.
            </p>
            <ol>
                <li>
                    <h3>Opisujesz</h3>
                    <p>Usterka własnymi słowami i zdjęcie z telefonu. Mechanik zobaczy je przed wizytą.</p>
                </li>
                <li>
                    <h3>Blokujemy</h3>
                    <p>Godzina i stanowisko są Twoje od chwili wyboru. Nikt inny ich nie zarezerwuje.</p>
                </li>
                <li>
                    <h3>Oddajemy</h3>
                    <p>Gdy auto jest gotowe, dostajesz e-mail z kosztorysem i godziną odbioru.</p>
                </li>
            </ol>
        </section>

        <section aria-labelledby="updates-heading">
            <h2 id="updates-heading">Wiesz, co się dzieje z Twoim autem</h2>
            <p>Każda zmiana przy podnośniku trafia do Ciebie od razu. Nie musisz dzwonić, żeby zapytać, czy już.</p>
            <a href="#status">Sprawdź status naprawy</a>
            <article>
                <h3>Potwierdzenie e-mailem</h3>
                <p>Zaraz po rezerwacji dostajesz e-mail z godziną, stanowiskiem i wstępnym kosztem.</p>
                <p><small>termin, stanowisko, koszt</small></p>
            </article>
            <article>
                <h3>Przypomnienie dzień wcześniej</h3>
                <p>Dzień przed wizytą przypominamy o godzinie. Rezerwacja niepotwierdzona w 24 h wraca na tablicę.</p>
                <p><small>e-mail, 24 h, zwolnione godziny</small></p>
            </article>
            <article>
                <h3>Status na żywo</h3>
                <p>Mechanik zmienia status przy podnośniku, a Ty widzisz go od razu, bez odświeżania strony.</p>
                <p><small>przyjęte, w trakcie, gotowe</small></p>
            </article>
            <article>
                <h3>Zgoda przed każdą dopłatą</h3>
                <p>Jeśli trzeba wymienić coś więcej, mechanik pyta Cię o zgodę i podaje cenę, zanim cokolwiek zrobi.</p>
                <p><small>pytanie, cena, Twoja decyzja</small></p>
            </article>
        </section>

        <section id="uslugi" aria-labelledby="services-heading">
            <h2 id="services-heading">Usługi i ceny</h2>
            <details><summary>Wymiana oleju</summary></details>
            <details><summary>Diagnostyka</summary></details>
            <details><summary>Serwis klimatyzacji</summary></details>
            <details open>
                <summary>Hamulce: klocki przód</summary>
                <p>Wymiana klocków z kontrolą tarcz i płynu. Jeśli tarcze są poniżej minimum, zapytamy o zgodę przed wymianą.</p>
                <p>od 320 zł · 90 min · podnośnik kolumnowy</p>
                <a href="/reservation">Zarezerwuj</a>
            </details>
            <details>
                <summary>Geometria kół</summary>
                <p>Pomiar i ustawienie zbieżności na stanowisku 3.</p>
            </details>
            <p>14 usług w cenniku <a href="#">Pełny cennik</a></p>
        </section>

        <section id="pytania" aria-labelledby="faq-heading">
            <h2 id="faq-heading">Pytania przed wizytą</h2>
            <dl>
                <dt>Co, jeśli nie potwierdzę rezerwacji?</dt>
                <dd>Po rezerwacji wysyłamy e-mail z linkiem. Jeśli nie klikniesz go w ciągu 24 godzin, rezerwacja wygasa, a godzina wraca na tablicę dla innych.</dd>
                <dt>Jakie zdjęcia warto dodać?</dt>
                <dd>Miejsce usterki, kontrolkę na desce rozdzielczej albo dowód rejestracyjny. Wystarczą zdjęcia z telefonu: JPG, PNG lub WebP do 5 MB, najwyżej cztery.</dd>
                <dt>Czy mogę zmienić godzinę?</dt>
                <dd>Tak, do 12 godzin przed wizytą, w zakładce Moje wizyty. Poprzednia godzina od razu wraca na tablicę.</dd>
                <dt>Kiedy dowiem się, ile zapłacę?</dt>
                <dd>Wstępny koszt widzisz przy rezerwacji. Jeśli mechanik znajdzie coś więcej, zapyta o zgodę, zanim cokolwiek wymieni. Pełny kosztorys przychodzi e-mailem razem ze statusem Gotowe do odbioru.</dd>
                <dt>Co, jeśli nie zdążę odebrać auta do 18:00?</dt>
                <dd>Auto zostaje na zamkniętym placu. Odbierzesz je następnego dnia od 7:00, bez dodatkowych opłat.</dd>
            </dl>
        </section>

        <section id="status" aria-labelledby="status-heading">
            <h2 id="status-heading">Sprawdź status naprawy</h2>
            <form action="/visits" method="get">
                <label>
                    Numer rezerwacji
                    <input type="text" name="reservationNumber" placeholder="np. MS-2481">
                </label>
                <label>
                    Numer rejestracyjny
                    <input type="text" name="registrationNumber">
                </label>
                <button type="submit">Sprawdź status</button>
            </form>
            <p>Numer znajdziesz w e-mailu z potwierdzeniem.</p>
        </section>
    </main>

    <footer>
        <p>MOTOSERVICE</p>
        <nav aria-label="Stopka">
            <section aria-labelledby="footer-services">
                <h2 id="footer-services">Usługi</h2>
                <ul>
                    <li><a href="#uslugi">Wymiana oleju</a></li>
                    <li><a href="#uslugi">Hamulce</a></li>
                    <li><a href="#uslugi">Diagnostyka</a></li>
                    <li><a href="#uslugi">Klimatyzacja</a></li>
                </ul>
            </section>
            <section aria-labelledby="footer-reservation">
                <h2 id="footer-reservation">Rezerwacja</h2>
                <ul>
                    <li><a href="#tablica">Tablica stanowisk</a></li>
                    <li><a href="/reservation">Nowa rezerwacja</a></li>
                    <li><a href="/visits">Moje wizyty</a></li>
                </ul>
            </section>
            <section aria-labelledby="footer-workshop">
                <h2 id="footer-workshop">Warsztat</h2>
                <ul>
                    <li><a href="#">Mechanicy</a></li>
                    <li><a href="#uslugi">Cennik</a></li>
                    <li><a href="#dojazd">Dojazd</a></li>
                </ul>
            </section>
            <section aria-labelledby="footer-help">
                <h2 id="footer-help">Pomoc</h2>
                <ul>
                    <li><a href="#pytania">Pytania</a></li>
                    <li><a href="#">Regulamin</a></li>
                    <li><a href="#">Prywatność</a></li>
                </ul>
            </section>
        </nav>
        <address id="dojazd">
            ul. Józefa Dietla 12, 31-070 Kraków<br>
            <a href="tel:+48123456789">12 345 67 89</a> ·
            <a href="mailto:warsztat@motoservice.pl">warsztat@motoservice.pl</a>
        </address>
        <p>Pn–Pt 7:00–18:00 · Sob 8:00–14:00</p>
        <p><small>© 2026 MotoService Hub</small></p>
        <p><small>Zdjęcia: Smart1995 (CC BY 2.0), Fortepan / Lissák Tivadar (CC BY-SA 3.0), Igor123121 (CC BY 4.0), via Wikimedia Commons</small></p>
        <a href="/reservation">Zarezerwuj termin</a>
    </footer>
</body>
</html>
