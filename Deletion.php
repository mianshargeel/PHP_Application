<?php 
	$size = sizeof($_POST); //that is size of elements inputted for deletion
	$j = 1;
	for ($i = 1; $i <= $size; $i++,$j++) {
		$index = "b".$j;  //'b' holding value of elements which have to be delete see DeletForm.php
		if (isset($_POST[$index])) { //isset() retuns true(if index selected by user to delete) or false(not selected by user to delete)
			$id[$i] = $_POST[$index]; 
			                    //creating an array $id[$i] which will be hold value of $_POST[$index]=b1=1(in first condition if it true) means this array will contain all that values which are user want to delete else decreament $i,
		} else {
			$i--;
		}
	}

	$con = mysqli_connect('localhost', 'root', 'root');
	mysqli_select_db($con, 'BRM_DB');

	for ($k = 1; $k <= $size; $k++ ) {
		$q = "delete from Book Where B_ID =".$id[$k];
		mysqli_query($con, $q);
	}

	mysqli_close($con);

?>

<!DOCTYPE html>
<html>
	<head>
		<title> Deletion </title>
	</head>
	<body>

		<h1> Book Record Management </h1>
		<p> <?php 
				 
				echo $size." Records Deleted";
			?> 
		</p>

		Go Back to Home Page <a href="Home.php">Click Here</a> <!-- Aunchor tag -->

	</body>
</html>

