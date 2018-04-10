<?php
	$main= '../';

	$backtrace = debug_backtrace();

	$location = preg_match('/.*index.php$/', $backtrace[1]['file']);
	$js= $location ? '<script src="jquery-3.2.1.min.js"></script>' : '<script src="../jquery-3.2.1.min.js"></script>';

	$fontello= $location ? '<link rel="stylesheet" href="css/fontello.css" type="text/css"/>' : '<link rel="stylesheet" href="../css/fontello.css" type="text/css"/>';

	
	
	$css= $location ? '<link rel="stylesheet" href="css/style.css" type="text/css"/>' : '<link rel="stylesheet" href="../css/style.css" type="text/css"/>';
?>