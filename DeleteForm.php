<?php 
	require('mysql.php');
	mysqli_select_db($con, 'BRM_DB');
	$q = "select * from Book";
	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);
	mysqli_close($con);
?>
<!DOCTYPE html>
	<html>
	<head>
		<title> Delete Book Record </title>
		<link rel="stylesheet" type="text/css" href="ViewStyle.css" />
	</head>
	<body>
		<h1>Book Record Manahement</h1>
	<form action="Deletion.php" method="post">
		<table id = "view_table">
			<tr>
				<th> B_ID </th>
				<th> B_Title </th>
				<th> B_Price </th>
				<th> B_Auther </th>
				<th> B_Addition </th>
				<th> Select to Delete </th>
			</tr>
			<?php 
				for ( $i = 1; $i <= $num; $i++ ) {
					$row = mysqli_fetch_array($result);
			?>
			<tr>
				<td> <?php echo $row['B_ID'] ?> </td>
				<td> <?php echo $row['B_Title'] ?> </td>
				<td> <?php echo $row['B_Price'] ?> </td>
				<td> <?php echo $row['B_Auther'] ?> </td>
				<td> <?php echo $row['B_Addition'] ?> </td>
				<td> <input type="checkbox" value = "<?php echo $row['B_ID']; ?>" name="b<?php echo $i; ?>" /> </td>                                           <!--Note in attribute 'value' we need to know which number of B_Id we are deleting to set that value we r using $row['B_ID'] see source code page -->                                    <!--we using varible $i in 'name' attribute to change value for every row see source code of file DeleteForm.php -->
			</tr>

			<?php 
			}
			?>
			<tr>
				<td colspan="6" > <input type="submit" value="Delete" /> </td>
			</tr>
			
		</table>
	</form>

	</body>
</html>