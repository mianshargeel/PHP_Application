<?php 
require('mysql.php');

//print("$conn");
$a = $_POST['B_Title'];
$b = $_POST['B_Price'];
$c = $_POST['B_Auther'];
// $d = $_POST['B_Addition'];

if ($conn->connect_error) {
  	echo "Not Connected ";
} else {
	echo "Connected ";
}

$q = "insert into Book(B_Title,B_Price,B_Auther,B_Addition) values ('$a',$b,'$c','$d')";
$status = mysqli_query($conn, $q);

// if (!$status) {
// 	echo " DATA Not Inserted";
// } else {
// 	echo " Inserted";
// }

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
	<head>
		<title> Insertion </title>
	</head>
	<body>

		<h1> Book Record Management </h1>
		<p> <?php 
				if ( $status == 1 )	//wtf? 
					echo "Record Inserted";
				else 
					echo "Insertion Failed"; 
			?> 
		</p>

		do u want to insert more record ? <a href="InsertForm.php">Click Here</a><br/> <!-- Aunchor tag -->
		Go to the Home Page <a href="/">Click Here</a> <!-- Aunchor tag -->
	</body>
</html>

