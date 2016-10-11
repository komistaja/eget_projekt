<?php


if(isset($_POST['save'])) {
	$date = $_POST['date'];
	$vehna = $_POST['vehna'];
	$soija = $_POST['soija'];
	$pavut = $_POST['pavut'];
	$ruis = $_POST['ruis'];
	$chili = $_POST['chili'];
	$fiilis = $_POST['fiilis'];
	
	$q_insert = "INSERT INTO jannyholm (date, vehna, soija, pavut, ruis, chili, feel) 
	VALUES ('$date', '$vehna', '$soija', '$pavut','$ruis', '$chili', '$fiilis');";
	$q_insert_feel = "INSERT INTO feel (date, feel) VALUES ('$date', '$fiilis');";
	if(!mysqli_query($link, $q_insert)) {
		$output = "Rivin lisäys ei onnistunut";
		$output .= mysqli_error($link);
		
	} else {
		$output = "Rivi lisätty";
	}
	if(!mysqli_query($link, $q_insert_feel)) {
		$output = "Rivin lisäys ei onnistunut";
		$output .= mysqli_error($link);
		
	} else {
		$output = "Rivi lisätty";
	}
	if(isset($output)) { echo $output; }
}
?>