<!DOCTYPE html>
<html>
	<head>
		<title> Insertion Form </title>
	</head>
	<body>

		<h1> Book Record Management </h1>

		<form action="Insertion.php" method="post">
			<table>

				<tr>
				<th> Title </th>
				<td> <input type="test" name="B_Title" required /> </td>
				</tr>

				<tr>
				<th> Price </th>
				<td> <input type="number" name="B_Price" required /> </td>
				</tr>

				<tr>
				<th> Auther </th>
				<td> <input type="test" name="B_Auther" /> </td>
				</tr>

				<tr>
				<th> Addition </th>
				<td> <input type="test" name="B_Addition" /> </td>
				</tr>

				<tr>
				<th></th>
				<td> <input type="submit" value="Insert" /> </td>
				</tr>

			</table>
		</form>

	</body>
</html>