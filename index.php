<?php

require 'vendor/autoload.php';

use Htlw3r\Viewa\hotels;
use Htlw3r\Viewa\location;

$hotels[] = new hotels('Wynn', 5, new location('United States', '89109', 'Las Vegas', 'Las Vegas Blvd S', '3131'), 'There’s nothing in the world like Las Vegas—and there’s absolutely nothing in Las Vegas like Wynn.');
$hotels[] = new hotels('Motel one Wien', 3, new location('Austria', '1100', 'Vienna', 'Gerhard Bronner Straße', '11'), 'Das im Mai 2015 neu eröffnete Motel One Wien-Hauptbahnhof liegt direkt neben dem Hauptbahnhof Wien. Es bietet eine hoteleigene Bar sowie kostenfreies WLAN und eine 24-Stunden-Rezeption.');
$hotels[] = new hotels('Leonardo Hotel', 3, new location('Austria', '1060', 'Vienna', 'Matrosengasse', '6-8'), 'Das rauchfreie Leonardo Hotel Vienna ist nur 100 m von der Einkaufsmeile Mariahilfer Straße und 400 m vom Verkehrsknotenpunkt Westbahnhof entfernt. Die Wiener Innenstadt erreichen Sie nach einer 5-minütigen U-Bahn-Fahrt.');

echo '<h1>Viewa Las Vegas</h1>';
foreach ($hotels as $hotel) {
    echo 'Name: ' . $hotel->getName() . '<br>';
    echo 'Location: ' . $hotel->getLocation()->getStreet() . ' ' . $hotel->getLocation()->getNumber() . ', ' . $hotel->getLocation()->getPostal() . ' ' . $hotel->getLocation()->getCity() . ', ' . $hotel->getLocation()->getCountry() . '<br>';
    echo 'Description: ' . $hotel->getDes();
    echo '<br>';
    echo '<br>';
}