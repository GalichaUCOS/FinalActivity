<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register - Order Management System</title>
	<style>
		body {
			background-color: #f0f8ff; /* Light pastel blue background */
			font-family: Arial, sans-serif;
		}
		.container {
			width: 40%;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		h2 {
			color: #333;
		}
		table {
			width: 100%;
			border-collapse: collapse;
			margin-bottom: 20px;
		}
		th, td {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: left;
		}
		th {
			background-color: #f2f2f2;
		}
		form {
			margin-top: 20px;
		}
		input[type="submit"] {
			width: auto;
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Register here</h2>
		<form action="handleForm.php" method="POST">
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" placeholder="Enter your username" name="username"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" placeholder="Enter your password" name="password"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Register" name="regBtn"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
