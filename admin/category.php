<?php
include 'include/header.php';
include 'include/sidebar.php';
include 'include/top-right.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 title mt-5">
            <h2><a href="category.php" id="heading">categories</a></h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-area">
                <?php
                include 'sql/co.php';

                $sql = "SELECT DISTINCT category FROM product";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="category-section">';
                        echo '<h3 class="category-title pl-3 pb-2">' . $row['category'] . '</h3>';

                        $category = $row['category'];
                        $sql_products = "SELECT * FROM product WHERE category = '$category'";
                        $result_products = mysqli_query($conn, $sql_products);

                        if (mysqli_num_rows($result_products) > 0) {
                            echo '<div class="row">';
                            while ($row_product = mysqli_fetch_assoc($result_products)) {
                                echo '<div class="col-md-4">';
                                echo '<div class="product">';
                                echo '<img src="img/' . $row_product['image'] . '" alt="'  . $row_product['pname'] . '" class="product-image">';
                                echo '<div class="product-details">';
                                echo '<h4 class="product-name">' . $row_product['pname'] . '</h4>';
                                echo '<p class="product-price pt-3">$' . $row_product['price'] . '</p>';
                                echo '<p class="product-description pt-3">' . $row_product['description'] . '</p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                            echo '</div>';
                        } else {
                            echo "<p>No products found for this category.</p>";
                        }

                        echo '</div>';
                    }
                } else {
                    echo "<p>No categories found.</p>";
                }

                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include 'include/footer.php';
?>

<style>
    #heading {
        color: black;
    }

    .category-section {
        margin-bottom: 30px;
    }

    .category-title {
        margin-bottom: 10px;
        color: #333;
        font-size: 24px;
        font-weight: bold;
    }

    .product {
        border: 1px solid #ccc;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-image {
        width: 100%;
        max-height: 200px;
        object-fit: cover;
        margin-bottom: 10px;
    }

    .product-name {
        font-size: 18px;
        margin-bottom: 5px;
    }

    .product-price {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        margin-bottom: 5px;
    }

    .product-description {
        color: #666;
        margin-bottom: 0;
    }
</style>
