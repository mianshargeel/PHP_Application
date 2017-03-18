<!DOCTYPE html>
<html>
	<head>
		<title> Insertion Form </title>

		<style>
			input[typy=text], select{
				width:100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}
			input[typy=number],select{
				width:100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}
			input[type=submit] {
				width:100%;
				background-color: #4CAF50;
				color: wight;
				padding: 12px 20px;
				margin: 8px 0;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			}
			input[type=submit] {
				background-color: #45a049;
			}
			div{
				border-radius: 5px;
				background-color: #fafafa;
				padding: 50px;
			}
			
		</style>


	</head>
	<body>

		<h1> Book Record Management </h1>
	<div>
		<form action="Insertion.php" method="post">
			

			
				<!-- <th> Title </th> -->
			 <label for="B_Title">Book Title</label></td>
			 <input type="text" name="B_Title" required placeholder="title..." /> </td>
				

			
			 <label for="B_Price">Book Price</label></td>
			 <input type="number" name="B_Price" required placeholder="price..." /> </td>
				

			
			 <label for="B_Auther">Book Author</label></td>
			 <input type="text" name="B_Auther" placeholder="author..." /> </td>
				

			
			 <label for="B_Addition">Book Addition</label></td>
			 <input type="text" name="B_Addition" placeholder="addition..." /> </td>
				

			 <input type="submit" value="Insert" /> </td>
				

			
		</form>
	</div>
		 	Go Back To Home Page <a style="color: blue" href="index.php">CLICK HERE</a>

	</body>
</html>