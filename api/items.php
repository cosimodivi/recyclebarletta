<?php
const BIN_PLASTIC = 1;
const BIN_PAPER = 2;
const BIN_GLASS = 3;
const BIN_ORGANIC = 4;
const BIN_BATTERIES = 6;
const BIN_REST = 7;

$binsname = array(
		'plastic' => 'plastica',
		'paper' => 'carta',
		'glass' => 'vetro',
		'organic' => 'umido',
		'batteries' => 'batterie',
		'rest' => 'altro'
);
$items = [
	'coca cola' => BIN_PLASTIC,
	'fazzoletti' => BIN_PAPER,
	'filo usb' => BIN_PLASTIC,
	'polistirolo' => BIN_PLASTIC,
	'tetrapak' => BIN_PLASTIC,
	'aranciata' => BIN_PLASTIC,
	'birra in vetro' => BIN_GLASS,
	'birra in lattina' => BIN_PLASTIC,
	'frutta secca' => BIN_ORGANIC,
	'pile' => BIN_BATTERIES,
	'altro' => BIN_REST
];