<?php

declare(strict_types=1);

namespace App\Controller;

final class VisitController extends AppController
{
    public function index(): void
    {
        $this->render('visits', [
            'pageTitle' => 'Moje wizyty',
            'activeNav' => 'visits',
        ]);
    }
}
