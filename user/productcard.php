<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View Cart</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style type="text/css">
  * {
    margin: 0;
    box-sizing: border-box;
    padding: 0;
    text-decoration: none;
  }

  html {
    scroll-behavior: smooth;
  }




  .custom-toggler.navbar-toggler {
    border-color: rgb(251, 245, 245);
  }

  .custom-toggler .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(231, 47, 123, 0.8)' stroke-width='3' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
  }



  .navbar-custom .navbar-nav .nav-item>a:hover {
    color: rgb(248, 134, 134);
  }

  .navbar-custom .navbar-nav .nav-item>a {
    color: rgb(61, 59, 59);
  }

  .nav-item {
    font-weight: bold;
    margin-left: 42px;
  }

  .nav-bitem {
    font-weight: bold;
    margin-left: 42px;
  }



  @media (max-width: 720px) {



    .nav-item form {
      margin-bottom: 8px;
      margin-top: 8px;
    }


  }

  .megamenu {
    position: static;
  }

  .megamenu .dropdown-menu {
    background: none;
    border: none;
    width: 100%;
  }

  .product-image {

    width: 100%;
    padding: 15px;

  }

  .show-cart li {
    display: flex;
  }

  .card-block {
    margin-left: 20px;
    margin-bottom: 15px;
  }

  .card {
    margin-bottom: 30px;
  }

  .card-img-top {
    width: 400px;
    height: 350px;
    align-self: center;
  }
</style>

<body>
  <div class="container-fluid body-area mt-1">

    <div class="row mt-4">

      <div class="col-md-10 col-sm-12 mt-1">
        <h5 class="pt-2 ml-2"><a href="../shop.php" style="text-decoration: none; font-weight: bold;">Home</a>
        </h5>
      </div>

      <div class="col-md-2 col-sm-12">
        <h5 class="pt-2"><a href="/E-Commerce/User/Index/vieworder.php" class="btn btn-success">Go to my orders</a>
        </h5>
      </div>

    </div>

    <div class="row">

      <div class="col-md-12 col-sm-12 view-area mt-2 p-4">



        <div class="card">


          <div class="card-header">
            <h4 class="text-center">Items in Cart</h4>

          </div>



          <div class="card-body">
            <table id="dtBasicExample"
              class="table table-responsive table-striped table-bordered  w-100 d-block d-md-table" cellspacing="0"
              width="100%">
              <thead>
                <th class="th-sm">ID
                </th>
                <th class="th-sm">Product Image
                </th>
                <th class="th-sm">Product Name
                </th>
                <th class="th-sm">Product Price
                </th>


                <th class="th-sm">Action
                </th>

              </thead>
              <tbody>
                <?php

                include 'config.php';
                ?>
                <?php

                $sql = "SELECT * FROM cart";

                $table = mysqli_query($conn, $sql);
                $i = 1;
                if (mysqli_num_rows($table) > 0) {
                  while ($row = mysqli_fetch_array($table)) {
                    ?>


                    <tr>

                      <td>
                        <?php echo $row['id']; ?>
                      </td>

                      <td style="text-align:center;"><img src="../admin/img/<?php echo $row['image']; ?>"
                          class="img-thumbnail mr-5 ml-1" height="50px" width="50px" id="pimg"></td>


                      <td>
                        <?php echo $row['pname']; ?>
                      </td>

                      <td>
                        Rs.
                        <?php echo $row['price']; ?>
                      </td>

                      <td style="text-align: center;">

                        <a href="Sql/deletp.php?id=<?php echo $row['id']; ?>" class="badge badge-danger mt-4">Delete</a>
                      </td>


                    </tr>

                    <?php
                    $i++;

                  }
                }

                // Close connection
                mysqli_close($conn);
                ?>


              </tbody>

            </table>

          </div>
        </div>

      </div>



    </div>

    <div class="row pl-5">

      <div class="col-md-10 col-sm-12 mb-3">

        <h5>Total Price:</h5>
        <p> Rs.
          <?php
          include 'config.php';

          $fetch = " SELECT SUM(price) AS `count_price` FROM cart";

          $results = mysqli_query($conn, $fetch) or die(mysqli_error($conn));

          while ($row = mysqli_fetch_array($results)) {
            echo $row['count_price'];
          }


          ?>
        </p>
      </div>




      <div class="col-md-2 col-sm-12 mb-3 mt-2">
        <a href="checkout.php" class="btn btn-primary">Proceed to checkout</a>
      </div>

    </div>


  </div>

  </div>


  <!-- View End -->

</body>

</html>