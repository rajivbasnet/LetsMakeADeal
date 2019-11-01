<?php
function openFirstDoor($winningDoor, $firstPickDoor){
	if ($firstPickDoor == 1) {
			if ($winningDoor != 2) {
				$openDoor = 2;
			}
			elseif ($winningDoor != 3){
				$openDoor = 3;
			}
		}
		if ($firstPickDoor == 2) {
			if ($winningDoor != 1) {
				$openDoor = 1;
			}
			elseif ($winningDoor != 3){
				$openDoor = 3;
			}
		}
		if ($firstPickDoor == 3) {
			if ($winningDoor != 1) {
				$openDoor = 1;
			}
			elseif ($winningDoor != 2){
				$openDoor = 2;
			}
		}
		
		return $openDoor;
}

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
				
				mysql_connect("localhost","webuser","d0nkey5");
				mysql_select_db("cs3552019");
				$sql = mysql_query("INSERT INTO rajiv_makeadeal (firstPickDoor, secondPickDoor, winningDoor, switchedOrNot, result) VALUES ('$firstPickDoor', '$secondPickDoor', '$winningDoor', '$doorSwitchedOrNot', '$result')");
				mysql_close();
				return "Submitted.";
}

?>