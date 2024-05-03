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
    <div class="container">
        <h1>Customer List</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>

                <?php

            include 'sql/co.php';

            $sql  = "SELECT * FROM  signin";
            $table = mysqli_query($conn , $sql);
            $i = 1;
            if(mysqli_num_rows($table)>0){
                while($row = mysqli_fetch_assoc($table)){
                    ?>

                    <tr>
                    <td> <?php echo $row['pname'];?></td>
                    <td> <?php echo $row['smail'];?></td>
                    <td> <?php echo $row['password'];?></td>
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

table, th, td {
    border: 1px solid #ddd;
}

th, td {
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