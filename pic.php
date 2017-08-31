<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.pixel {
			width: 50px;
			height: 50px;
			border: 1px solid grey;
			float: left;
		}
		.j {
			background-color: black;
		}
		.b {
			background-color: white;
		}
		.br {
			clear: both;
		}
	</style>
</head>
<body>
<?php

	$img = ["j", "b", "b", "b", "b", "b", "j", "b", "b", "b", "b", "j", "b", "j", "b", "b", "j"];
	$plotis = 4;

	$h = 1;
	foreach ($img as $pixel) {
		echo '<div class="pix '. $pixel . '">'.$pixel.'</div>';
		if ($h == $plotis ) {
			$h = 1;
			echo '<div class="br"></div>';
		} else {
			$h++;
		}
	}
?>
</body>