<?php
const BIN_PLASTIC = 'plastic';
const BIN_PAPER = 'paper';
const BIN_GLASS = 'glass';
const BIN_ORGANIC = 'organic';
const BIN_BATTERIES = 'batteries';
const BIN_REST = 'rest';

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