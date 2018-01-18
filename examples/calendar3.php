<?php

require_once __DIR__ . '/../vendor/autoload.php';

use QRCode\Types\QRCalendarEvent;

$startDateAndTime = new \DateTime('next saturday 7pm');
$endDateAndTime = new \DateTime('next saturday 11pm');

$summary = 'Dinner date with Janet Doe';
$description = 'Important dinner date with Janet Doe, whom you\'ve met at Tinder, at Per Se (French Restaurant)';
$location = 'Time Warner Center, 10 Columbus Cir, New York, NY 10023, USA';

try {
    $event = new QRCalendarEvent($startDateAndTime, $endDateAndTime, $summary, $description, $location);
    $event->setErrorCorrectionLevel('Q')->setPixelSize(4)->setMargin(4);

    // echo $event->generate();
    echo $event;

} catch (\Exception $e) {
    die($e->getMessage());
}