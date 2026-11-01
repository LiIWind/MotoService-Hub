<?php

declare(strict_types=1);

use App\Controller\DefaultController;
use App\Controller\ProjectController;
use App\Controller\ReservationController;
use App\Controller\VisitController;
use App\Controller\WorkshopController;
use App\Routing;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$routing = new Routing();

$routing->get('/projects', ProjectController::class, 'index');
$routing->get('/projects/{id}', ProjectController::class, 'show');
$routing->get('/reservation', ReservationController::class, 'index');
$routing->get('/reservation/{id}', ReservationController::class, 'show');
$routing->get('/visits', VisitController::class, 'index');
$routing->get('/board', WorkshopController::class, 'board');
$routing->get('/revenue', WorkshopController::class, 'revenue');
$routing->get('/', DefaultController::class, 'index');

$routeFound = $routing->dispatch(
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_URI'],
);

if (!$routeFound) {
    http_response_code(404);
    (new DefaultController())->notFound();
}