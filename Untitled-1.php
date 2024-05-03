<?php

include 'include/header.php';
include 'include/sidebar.php';
include 'include/top-right.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h3>View Orders</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Customer Address</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Status</th>
                <th>Delivery Date</th>
            </tr>
        </thead>
        <tbody>

            <?php

            include 'sql/co.php';

            $sql = "SELECT * FROM  ordered";
            $table = mysqli_query($conn, $sql);
            $i = 1;
            if (mysqli_num_rows($table) > 0) {
                while ($row = mysqli_fetch_assoc($table)) {
                    ?>

                    <tr>
                        <td> <?php echo $row['customer_name']; ?></td>
                        <td> <?php echo $row['customer_email']; ?></td>
                        <td> <?php echo $row['customer_address']; ?></td>
                        <td> <?php echo $row['product_name']; ?></td>
                        <td> <?php echo $row['product_price']; ?></td>
                        <td> <img src="img/<?php echo $row['product_image']; ?>" height="45px" width="45px" class="mt-1"></td>
                        <td> <?php echo $row['status']; ?></td>
                        <td> <?php echo $row['delivery_date']; ?></td>
                    </tr>

                    <?php
                    $i++;
                }
            }

            ?>

        </tbody>
    </table>
    </div>
</body>

</html>

<?php

include 'include/footer.php';

?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 12px 15px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #ddd;
    }
</style>