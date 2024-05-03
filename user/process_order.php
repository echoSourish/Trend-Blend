<?php
include 'config.php';

$first_name = $last_name = $email = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
    $last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $deliveryDate = date('Y-m-d', strtotime('+'.rand(1, 7).' days'));

    $sql = "SELECT * FROM cart";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $product_name = mysqli_real_escape_string($conn, $row['pname']);
        $product_price = mysqli_real_escape_string($conn, $row['price']);
        $product_image = mysqli_real_escape_string($conn, $row['image']);

        $insert_query = "INSERT INTO ordered (customer_name, customer_email, customer_address, product_name, product_price, product_image, delivery_date) VALUES ('$first_name $last_name', '$email', '$address', '$product_name', '$product_price', '$product_image', '$deliveryDate')";

        mysqli_query($conn, $insert_query);
    }

    $clear_cart_query = "DELETE FROM cart";
    mysqli_query($conn, $clear_cart_query);

    echo "<script>alert('Order placed successfully!');</script>";
    echo "<script>window.location.href = 'http://localhost/fsphpb74/index.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Checkout</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>Customer Information</h4>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Place Order</button>
                </form>
            </div>
            <div class="col-md-6">
                <h4>Order Summary</h4>
                <div class="order-summary">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>{$row['id']}</td>";
                                echo "<td>{$row['pname']}</td>";
                                echo "<td>{$row['price']}</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <h5 class="text-right total-price">Total: $<?php echo number_format($totalPrice, 2); ?></h5>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>
