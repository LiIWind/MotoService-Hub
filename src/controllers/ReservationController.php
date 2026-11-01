<?php

declare(strict_types=1);

namespace App\Controller;

final class ReservationController extends AppController
{
    private const SAMPLE_RESERVATION_ID = 1;

    public function index(): void
    {
        $this->render('reservation-form', [
            'pageTitle' => 'Rezerwacja wizyty',
            'heading' => 'Hamulce we wtorek, 3 listopada',
            'reservation' => $this->sampleReservation(),
            'days' => [
                ['date' => '2026-11-02', 'label' => 'Pn 2', 'availability' => '3 wolne', 'selected' => false],
                ['date' => '2026-11-03', 'label' => 'Wt 3', 'availability' => '4 wolne', 'selected' => true],
                ['date' => '2026-11-04', 'label' => 'Śr 4', 'availability' => 'brak', 'selected' => false],
                ['date' => '2026-11-05', 'label' => 'Cz 5', 'availability' => '6 wolnych', 'selected' => false],
                ['date' => '2026-11-06', 'label' => 'Pt 6', 'availability' => '2 wolne', 'selected' => false],
                ['date' => '2026-11-07', 'label' => 'Sob 7', 'availability' => '1 wolna', 'selected' => false],
            ],
            'timeSlots' => [
                ['time' => '7:00', 'status' => 'zajęte', 'free' => false, 'selected' => false],
                ['time' => '8:00', 'status' => 'wolne', 'free' => true, 'selected' => false],
                ['time' => '9:00', 'status' => 'do 11:00', 'free' => true, 'selected' => true],
                ['time' => '10:00', 'status' => 'zajęte', 'free' => false, 'selected' => false],
                ['time' => '11:00', 'status' => 'zajęte', 'free' => false, 'selected' => false],
                ['time' => '12:00', 'status' => 'wolne', 'free' => true, 'selected' => false],
                ['time' => '13:00', 'status' => 'wolne', 'free' => true, 'selected' => false],
                ['time' => '14:00', 'status' => 'zajęte', 'free' => false, 'selected' => false],
                ['time' => '15:00', 'status' => 'zajęte', 'free' => false, 'selected' => false],
                ['time' => '16:00', 'status' => 'zajęte', 'free' => false, 'selected' => false],
            ],
            'photos' => [
                ['name' => 'IMG_4021.jpg', 'size' => '2,1 MB'],
                ['name' => 'IMG_4022.jpg', 'size' => '1,8 MB'],
            ],
            'issueDescription' => 'Piszczenie przy hamowaniu, szczególnie na mokrej nawierzchni. '
                . 'Od wczoraj świeci się kontrolka ABS.',
        ]);
    }

    public function show(int $id): void
    {
        if ($id !== self::SAMPLE_RESERVATION_ID) {
            http_response_code(404);
            $this->render('not-found', [
                'pageTitle' => 'Nie znaleziono strony',
            ]);

            return;
        }

        $this->render('reservation', [
            'pageTitle' => 'Rezerwacja nr ' . $id,
            'reservationId' => $id,
            'reservation' => $this->sampleReservation(),
        ]);
    }

    // Przykładowe dane z prototypu w Figmie, dopóki nie powstanie warstwa modelu.
    private function sampleReservation(): array
    {
        return [
            'service' => 'Hamulce: klocki przód',
            'serviceDetails' => 'ok. 90 min · od 320 zł · podnośnik kolumnowy',
            'vehicle' => 'Toyota Corolla 1.8 Hybrid',
            'vehicleDetails' => 'KR 4X21B · 2019 · 84 210 km',
            'vehicleShort' => 'Toyota Corolla · KR 4X21B',
            'term' => 'wtorek 3.11, 9:00–11:00',
            'workstation' => '2, podnośnik kolumnowy',
            'photoCount' => '2 pliki',
            'estimatedCost' => 'od 320 zł',
        ];
    }
}
