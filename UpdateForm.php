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
		<title> Update Book Record </title>
		<link rel="stylesheet" href="ViewStyle.css" />  <!-- using .css file here -->
	</head>
	<body>
		<h1> Book Record Management </h1>
	<form action="Updation.php" method="post">
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
				<td> <?php echo $row['B_ID'] ?> <input type="hidden" name="B_ID<?php echo $i; ?>" value = "<?php echo $row['B_ID'] ?>"/> </td>

				<td> <input type="test" name="B_Title<?php echo $i; ?>" value = "<?php echo $row['B_Title'] ?>"/> </td>

				<td> <input type="number" name="B_Price<?php echo $i; ?>" value = "<?php echo $row['B_Price'] ?>"/> </td>

				<td> <input type="test" name="B_Auther<?php echo $i; ?>" value = "<?php echo $row['B_Auther'] ?>"/> </td>

				<td> <input type="test" name="B_Addition<?php echo $i; ?>" value = "<?php echo $row['B_Addition'] ?>"/> </td>
			</tr>

			<?php
			}

			?>

		</table>
			<tr> <input type="submit" value="Update" /> </tr>
	</form>

	</body>
</html>