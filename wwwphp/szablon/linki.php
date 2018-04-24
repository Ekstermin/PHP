<?php

 
$backtrace = debug_backtrace();

	$location = preg_match('/.*index.php$/', $backtrace[1]['file']);
	//echo $location;
	$main= $location ? '' :'../';
	$js= $location ? '<script src="jquery-3.2.1.min.js"></script>' : '<script src="../jquery-3.2.1.min.js"></script>';

	$fontello= $location ? '<link rel="stylesheet" href="css/fontello.css" type="text/css"/>' : '<link rel="stylesheet" href="../css/fontello.css" type="text/css"/>';

	
	
	$css= $location ? '<link rel="stylesheet" href="css/style.css" type="text/css"/>' : '<link rel="stylesheet" href="../css/style.css" type="text/css"/>';

?>

<?php
/*	$main= '../';

	$backtrace = debug_backtrace();

	$location = preg_match('/.*index.php$/', $backtrace[1]['file']);
	$js= $location ? '<script src="jquery-3.2.1.min.js"></script>' : '<script src="../jquery-3.2.1.min.js"></script>';

	$fontello= $location ? '<link rel="stylesheet" href="css/fontello.css" type="text/css"/>' : '<link rel="stylesheet" href="../css/fontello.css" type="text/css"/>';

	
	
	$css= $location ? '<link rel="stylesheet" href="css/style.css" type="text/css"/>' : '<link rel="stylesheet" href="../css/style.css" type="text/css"/>';
	
	$css= '<link rel="stylesheet" href="/./Test/css/style.css" type="text/css"/>';

$js= '<script src="/./Test/jquery-3.2.1.min.js"></script>';

$fontello= '<link rel="stylesheet" href="/./Test/css/fontello.css" type="text/css"/>';*/
?>