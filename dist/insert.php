<!DOCTYPE html>
<html>

<head>
	<title>Well Done</title>
</head>

<body>
	
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "form");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$mail = $_REQUEST['mail'];
		$number = $_REQUEST['number'];
		$address = $_REQUEST['address'];
		$description = $_REQUEST['description'];

		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO member VALUES ('$first_name',
			'$last_name','$mail','$number','$address','$description')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h2>Wysłano ! 
            </h2>";
            

			echo nl2br("\n$first_name\n $last_name\n "
				. "$mail\n $number\n $address\n $description");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
</body>

</html>
