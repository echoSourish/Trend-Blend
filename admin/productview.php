<?php

include 'include/header.php';
include 'include/sidebar.php';
include 'include/top-right.php';
?>


<div class="container-fluid">
	<div class="row ">
		<div class="col-12 col-md-12 title mt-5">
			<h5><a href="index.php" id="heading">Admin Dashboard</a></h5>
		</div>
        
	</div>
        <div style="float:right!important; margin-top: -30px;">
            <a href="product.php" class="btn btn" style="background-color: hsl(200, 87%, 62%); border-radius: 0px; color: #fff;">Add Product</a>
        </div><hr>

	<div class="row">
		<div class="col-12 m-0 p-0">
			<div class="card-area pb-5">
				<table id="example" class="display nowrap" style="width:100%">
        <thead >
            <tr >
                <th>Sno.</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Gender</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Size</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include 'sql/co.php';

            $sql  = " SELECT * FROM  product";
            $table = mysqli_query($conn , $sql);
            $i = 1;
            if(mysqli_num_rows($table)>0){
                while($row = mysqli_fetch_assoc($table)){
                    ?>

                    <tr>
                    <td> <?php echo $row['id'];?></td>
                    <td> <?php echo $row['pname'];?></td>
                    <td> <?php echo $row['category'];?></td>
                    <td> <?php echo $row['gender'];?></td>
                    <td> <?php echo $row['brand'];?></td>
                    <td> <?php echo $row['price'];?></td>
                    <td> <?php echo $row['description'];?></td>
                    <td> <img src="img/<?php echo $row['image'];?>" height="45px" width="45px" class="mt-1"></td>
                    <td> <?php echo $row['psize'];?></td>
                    <td> <?php echo $row['uploaddate'];?></td>

                    <td>
                        <a href="pupdate.php?id=<?php echo $row['id'];?>"> <img src="./img/edit.png" alt="img" height="20px" width="20px" class="mt-1"> </a>

                        <a href="sql/pdel.php?id=<?php echo $row['id'];?>"> <img src="./img/delete.png" alt="img" height="20px" width="20px" class="mt-1"> </a>
                    </td>
                </tr>

                    <?php
                    $i++;
                }
            }

            ?>
            

        </tbody>
            </table>   
			</div>
		</div>
	</div>
</div>







<?php
include 'include/footer.php';

?>


<style>
    #heading{
        color: black;
        float: left;
    }
    .card-area{
        height: auto;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0psx, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
    }
    .card-area h5{
        box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px;
    }
</style>
