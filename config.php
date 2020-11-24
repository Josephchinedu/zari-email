
<?php
	
	// Set up a connection
	$connect = mysqli_connect("localhost", "nextiftk_zari", "Ability_2020");
	if(!$connect){
		echo "Connection failed" .mysqli_error();	
	}

	// Connect to a database
	$connected = mysqli_select_db($connect, "nextiftk_zari");
	if(!$connected){
		
		echo "Database Selection failed" .mysqli_error();
	
	}
?>