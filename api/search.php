<?php
require('items.php');

$search = strtolower($_GET['s']);

foreach($items as $key => $v)
{
	if (strpos($key, $search) !== false) {
		$result[] = array('name' => $key, 'value' => $v);
	}
}

echo json_encode($result);
