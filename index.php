<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Order Management System</title>
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
        .fields {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }
        label {
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        a {
            display: block;
            margin-top: 20px;
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login here</h2>
        <form action="handleForm.php" method="POST">
            <div class="fields">
                <label for="username">Username:</label>
                <input type="text" id="username" placeholder="Enter your username" name="username">
            </div>
            <div class="fields">
                <label for="password">Password:</label>
                <input type="password" id="password" placeholder="Enter your password" name="password">
            </div>
            <input type="submit" value="Login" name="loginBtn">
        </form>
        <a href="register.php">Register</a>
    </div>
</body>
</html>
