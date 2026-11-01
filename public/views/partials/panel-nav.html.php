<?php
$panelLinks = [
    'board' => ['label' => 'Tablica', 'href' => '/board'],
    'orders' => ['label' => 'Zlecenia', 'href' => '#'],
    'clients' => ['label' => 'Klienci', 'href' => '#'],
    'estimates' => ['label' => 'Kosztorysy', 'href' => '#'],
    'revenue' => ['label' => 'Przychody', 'href' => '/revenue'],
    'cron' => ['label' => 'Zadania CRON', 'href' => '/revenue#cron'],
];
?>
<header>
    <a href="/board">MotoService</a>
    <p>Warsztat Dietla · 4 stanowiska</p>
    <nav aria-label="Panel warsztatu">
        <ul>
            <?php foreach ($panelLinks as $key => $link): ?>
                <li>
                    <a
                        href="<?= htmlspecialchars($link['href'], ENT_QUOTES, 'UTF-8') ?>"
                        <?= $activePanelLink === $key ? 'aria-current="page"' : '' ?>
                    ><?= htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8') ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <p>
        <?= htmlspecialchars($panelUserName, ENT_QUOTES, 'UTF-8') ?>,
        <?= htmlspecialchars($panelUserRole, ENT_QUOTES, 'UTF-8') ?>
    </p>
    <form role="search" method="get">
        <label>
            Szukaj
            <input type="search" name="q" placeholder="Szukaj: numer rejestracyjny, klient, MS-…">
        </label>
    </form>
</header>
