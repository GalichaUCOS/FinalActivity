<?php 
session_start();

if(!isset($_SESSION['username'])) {
    header('Location: index.php');
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Management System</title>
    <style>
        body {
            background-color: #f0f8ff; /* Light pastel blue background */
            font-family: Arial, sans-serif;
        }
        .container {
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .form-group {
            margin: 10px 0;
        }
        label, input, select {
            display: block;
            width: 100%;
            margin: 5px 0;
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
        a {
            display: inline-block;
            margin-top: 20px;
            color: #333;
            text-decoration: none;
            padding: 5px 10px;
            background-color: #f2f2f2;
            border: 1px solid #ddd;
        }
        a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome! <?php echo $_SESSION['username'];?></h1>
        <h1>Order Management System</h1>
        <div>
            <h2>Menu</h2>
            <table>
                <tr>
                    <th>Item</th>
                    <th>Price (PHP)</th>
                </tr>
                <tr>
                    <td>Ballpen</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Paper</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Pencil</td>
                    <td>5</td>
                </tr>
            </table>
        </div>
        <form method="get" action="receipt.php">
            <div class="form-group">
                <label for="item">Select Item:</label>
                <select id="item" name="item">
                    <option value="10">Ballpen - PHP 10</option>
                    <option value="25">Paper - PHP 25</option>
                    <option value="5">Pencil - PHP 5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" required>
            </div>
            <div class="form-group">
                <label for="payment">Payment:</label>
                <input type="number" id="payment" name="payment" min="0" required>
            </div>
            <input type="submit" value="Submit">
        </form>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
