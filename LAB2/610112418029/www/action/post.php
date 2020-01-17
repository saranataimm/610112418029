<?php

$sport = $_POST['sl_sport']?$_POST['sl_sport']:$get = $_GET['getSport'];
cal_sport($sport);

function cal_sport($sport){
	switch ($sport){
		case "1":
				$sport = "Football";
				break;
		case "2":
				$sport = "Tennis";
				break;
		default:
			$sport = "Out of type.";
	}
	echo $sport;
};

?>