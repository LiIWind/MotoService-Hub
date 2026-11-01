<header class="site-header">
    <a class="brand" href="/">
        <img class="brand__mark" src="/images/logo.svg" alt="" width="22" height="22">
        MotoService Hub
    </a>
    <nav class="site-nav" aria-label="Główna">
        <ul>
            <li><a href="/#uslugi">Usługi i ceny</a></li>
            <li><a href="/#tablica"<?= ($activeNav ?? '') === 'board' ? ' aria-current="true"' : '' ?>>Tablica stanowisk</a></li>
            <li><a href="/visits"<?= ($activeNav ?? '') === 'visits' ? ' aria-current="page"' : '' ?>>Moje wizyty</a></li>
        </ul>
    </nav>
    <a class="site-phone" href="tel:+48123456789">12 345 67 89</a>
</header>
