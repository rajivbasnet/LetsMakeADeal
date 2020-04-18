<?php
function findResult($winningDoor, $secondPickDoor) {
	if ($secondPickDoor == $winningDoor) {
		$result = "won";
	}
	else {
		$result = "lost";
	}
	return $result;
}


function switchedOrNot($firstPickDoor, $secondPickDoor) {
	if ($firstPickDoor == $secondPickDoor) {
		$result = "no";
	}
	else {
		$result = "yes";
	}
	return $result;
}

function insertIntoDatabase($firstPickDoor, $secondPickDoor, $winningDoor, $doorSwitchedOrNot, $result){
				
	$con = mysqli_connect("localhost", "root", "root", "makeadeal");
	$sql = "INSERT INTO `rajiv_makeadeal` (`firstPickDoor`, `secondPickDoor`, `winningDoor`, `switchedOrNot`, `result`) VALUES ('".$firstPickDoor."', '".$secondPickDoor."', '".$winningDoor."', '".$doorSwitchedOrNot."', '".$result."')";
	mysqli_query($con, $sql);
	mysqli_close($con);
	return ("Submitted");
}

?>