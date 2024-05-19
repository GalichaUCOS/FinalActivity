<!DOCTYPE html>
<html>
<head>
    <title>Receipt - Order Management System</title>
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
        <h2>Receipt</h2>
        <table>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Total (PHP)</th>
                <th>Payment (PHP)</th>
                <th>Change (PHP)</th>
            </tr>
            <?php
                $item = $_GET["item"];
                $quantity = $_GET["quantity"];
                $payment = $_GET["payment"];
                $total = $item * $quantity;
                $change = $payment - $total;

                echo "<tr>";
                echo "<td>";
                if ($item == 10) {
                    echo "Ballpen - PHP 10";
                } elseif ($item == 25) {
                    echo "Paper - PHP 25";
                } elseif ($item == 5) {
                    echo "Pencil - PHP 5";
                }
                echo "</td>";
                echo "<td>$quantity</td>";
                echo "<td>PHP $total</td>";
                echo "<td>PHP $payment</td>";
                echo "<td>";
                if ($change >= 0) {
                    echo "PHP $change";
                } else {
                    echo "Insufficient payment!";
                }
                echo "</td>";
                echo "</tr>";
            ?>
        </table>
        <form method="get" action="ordersys.php">
            <input type="submit" value="Order Again">
        </form>
    </div>
</body>
</html>
