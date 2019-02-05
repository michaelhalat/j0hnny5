<?php
//TheFreeElectron 2015, http://www.instructables.com/member/TheFreeElectron/
//This page is requested by the JavaScript, it updates the pin's status and then print it
//Getting and using values
$pin = array(8,9,7,0,2,3,12,13);

if (isset ( $_GET["pId"] )) {
	$pId = strip_tags ($_GET["pId"]);
	
	//test if value is a number
	if ( (is_numeric($pId)) && ($pId <= 7) && ($pId >= 0) ) {
		
		//set the gpio's mode to output		
		system("gpio mode ".$pin[$pId]." out");
		//reading pin's status
		exec ("gpio read ".$pin[$pId], $status, $return );
		//set the gpio to high/low
		if ($status[0] == "0" ) { $status[0] = "1"; }
		else if ($status[0] == "1" ) { $status[0] = "0"; }
		system("gpio write ".$pin[$pId]." ".$status[0] );
		//reading pin's status
		exec ("gpio read ".$pin[$pId], $status, $return );
		//print it to the client on the response
		echo($status[0]);
		
	}
	else { echo ("fail"); }
} //print fail if cannot use values
else { echo ("fail"); }
?>