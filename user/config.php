
<?php
	
	// Set up a connection
	$connect = mysqli_connect("r1bsyfx4gbowdsis.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "y1e7tisi0h1tg8fd", "ms4wzdfeiz00muiv");
	if(!$connect){
		echo "Connection failed" .mysqli_error();	
	}

	// Connect to a database
	$connected = mysqli_select_db($connect, "nkavg75tgv3mnjsi");
	if(!$connected){
		
		echo "Database Selection failed" .mysqli_error();
	
	}
?>
