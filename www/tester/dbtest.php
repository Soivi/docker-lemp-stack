<?php
	// Create connection
	$con=mysqli_connect("mysql","testeruser","testerpw","testerdb");

	// Check connection
	if (!mysqli_connect_errno()) {
		echo "works";
	} else {
                echo "not working";
        }

?> 
