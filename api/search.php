<?php

const BIN_PLASTIC = 1;
const BIN_PAPER = 2;
const BIN_GLASS = 3;
const BIN_ORGANIC = 4;
const BIN_WET = 5;
const BIN_BATTERIES = 6;
const BIN_REST = 7;

$items = [
	'coca cola' => BIN_PLASTIC,
	'fazzoletti' => BIN_PAPER,
	'filo usb' => BIN_PLASTIC,
	'polistirolo' => BIN_PLASTIC,
	'tetrapak' => BIN_PLASTIC,
	'aranciata' => BIN_PLASTIC,
	'birra in vetro' => BIN_GLASS,
	'birra in lattina' => BIN_PLASTIC
];

$i = 0;
foreach($items as $key => $v)
{
	if($_GET['s'] != '') {
		if (strpos($key, $_GET['s']) !== false) {
			echo '<li>'.$key.'</li>';
			$i++;
		}
	}
}

if($i == 0)
echo '<li>Nessun risultato</li>';