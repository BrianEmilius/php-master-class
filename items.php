<?php
header("Content-Type: application/json");

$items = [];

$feta = new stdClass();
$feta->id = 1;
$feta->name = "Feta";
$feta->price = 42.5;
$feta->description = "Verdens bedste ost er feta.";
$feta->image = "feta.jpg";
$items[] = $feta;

$gouda = new stdClass();
$gouda->id = 2;
$gouda->name = "Gouda";
$gouda->price = 56.25;
$gouda->description = "Hollandsk ost af den bedste slags.";
$gouda->image = "gouda.jpg";
$items[] = $gouda;

$brie = new stdClass();
$brie->id = 3;
$brie->name = "Brie";
$brie->price = 35;
$brie->description = "Blød og cremet med et lækkert bid og en tyk skorpe.";
$brie->image = "brie.jpg";
$items[] = $brie;

$danbo = new stdClass();
$danbo->id = 4;
$danbo->name = "Danbo";
$danbo->price = 52.95;
$danbo->description = "Hård ekstralagret Danbo fra Vesterhavet. Med salt og kommen.";
$danbo->image = "danbo.jpg";
$items[] = $danbo;

echo json_encode($items);
