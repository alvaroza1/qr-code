<?php

require __DIR__ . '/../vendor/autoload.php';

use QRCode\Types\QRWifi;

$wifi = new QRWifi('WPA2', 'MySuperSSID', 'y0uc4n7f1ndth3p4ssw0rd');

echo $wifi->generate();