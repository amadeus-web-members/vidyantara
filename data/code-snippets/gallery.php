<?php
$items = textToList('
campus-gate.jpg
campus-gate-with-board.jpg
campus-horses-terracottta.jpg
campus-main-bldg.jpg
cottage.jpg
cottage-armchair.jpg
cottage-dusk.jpg
cottage-flowers.jpg
cottage-from-distance.jpg
cottage-from-shed.jpg
cottage-from-terrace.jpg
cottage-garden.jpg
cottage-hut-and-tree.jpg
cottage-outside.jpg
cottage-plants.jpg
cottage-roof-lantern.jpg
cottage-shed.jpg
cottage-side-and-flowers.jpg
cottage-stairs.jpg
cottage-verandah-and-sky.jpg
main-building.jpg
main-building-clouds.jpg
main-entrance.jpg
main-stairs.jpg
');

$op = '';
foreach ($items as $item)
	$op .= '<div class="slide"><img class="vh-75" src="%cdn%gallery/creme/' . $item . '" alt="VA ' . humanize($item) . '" /></div>
';

return $op;
