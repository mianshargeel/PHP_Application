<?php 
	require('mysql.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title> View Book Record </title>
		<link rel="stylesheet" href="ViewStyle.css" />  <!-- using .css file here -->
	</head>
	<body>
		<h1> Book Record Management </h1>
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

	</body>
</html>