<?php

declare(strict_types=1);

namespace App\Controller;

final class WorkshopController extends AppController
{
    public function board(): void
    {
        $this->render('board', [
            'pageTitle' => 'Tablica mechanika',
            'activePanelLink' => 'board',
            'panelUserName' => 'Marek Nowak',
            'panelUserRole' => 'mechanik',
        ]);
    }

    public function revenue(): void
    {
        $this->render('revenue', [
            'pageTitle' => 'Przychody i CRON',
            'activePanelLink' => 'revenue',
            'panelUserName' => 'Eva Adamczyk',
            'panelUserRole' => 'administrator',
        ]);
    }
}
