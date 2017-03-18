<?php 
	$con = mysqli_connect('localhost', 'root', 'root');
	mysqli_select_db($con, 'BRM_DB');
	$q1 = "select * from Book";
	$result = mysqli_query($con, $q1);
	$num = mysqli_num_rows($result); //to get to know how much rows in $result
	mysqli_close($con);
?>

<!DOCTYPE html>
<html>
	<head>
		<title> View Book Record </title>
		<link rel="stylesheet" href="ViewStyle.css" />  <!-- using .css file here -->
	</head>
	<body>
		<h1 style="color: blue"> Book Record Management </h1>
		<table id = "view_table">
			<tr>
				<th> B_ID </th>
				<th> B_Title </th>
				<th> B_Price </th>
				<th> B_Auther </th>
				<th> B_Addition </th>
			</tr>

			<?php 
				for($i = 1; $i <= $num; $i++ ) {
					$row = mysqli_fetch_array($result);
			?>

			<tr>
				<td> <?php echo $row['B_ID'] ?> </td>
				<td> <?php echo $row['B_Title'] ?> </td>
				<td> <?php echo $row['B_Price'] ?> </td>
				<td> <?php echo $row['B_Auther'] ?> </td>
				<td> <?php echo $row['B_Addition'] ?> </td>
			</tr>

			<?php
			}

			?>

		</table>
		Go Back to Home Page <a style="color: blue" href="index.php">CLICK HERE</a>

	</body>
</html>