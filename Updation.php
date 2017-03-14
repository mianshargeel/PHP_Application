<?php 
	require('mysql.php');
	mysqli_select_db($con, 'BRM_DB');

	$size = sizeof($_POST);
	$record = $size/5;      //number of column = 5 in book table

	for ( $i = 1; $i <= $record; $i++ ) {

		$index1 = "B_ID".$i;
		$b_id[$i] = $_POST[$index1];

		$index2 = "B_Title".$i;
		$b_title[$i] = $_POST[$index2];

		$index3 = "B_Price".$i;
		$b_price[$i] = $_POST[$index3];

		$index4 = "B_Auther".$i;
		$b_auther[$i] = $_POST[$index4];

		$index5 = "B_Addition".$i;
		$b_addition[$i] = $_POST[$index5];
	}


	for ( $i = 1; $i <= $record; $i++ ) {
		$q = "update Book Set B_Title = '$b_title[$i]', B_Price = $b_price[$i], 
		B_Auther = '$b_auther[$i]', B_Addition = '$b_addition[$i]' Where B_ID = $b_id[$i]";
        //Keeping value of all columns or fields in there arrays
		mysqli_query($con, $q);
	}

	mysqli_close($con);
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Updation </title>
	</head>
	<body>

		<h1> Book Record Management </h1>
		<p> <?php 
				 
				echo $size." Record Updated";
			?> 
		</p>

		Go Back to Home Page <a href="Home.php">Click Here</a> <!-- Aunchor tag -->

	</body>
</html>






