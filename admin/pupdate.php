<?php

include 'include/header.php';
include 'include/sidebar.php';
include 'include/top-right.php';
?>

<?php
  $id = $_GET['id'];
  include 'sql/co.php';
  $sql = "SELECT * FROM product WHERE id = '$id'";
  $table = mysqli_query($conn , $sql);
  $row = mysqli_fetch_assoc($table);

?>


<div class="container-fluid">
	<h4 class="pt-5 pb-2">Update All Product Details</h4>
  <div style="float: right; margin-top: -50px;">
    <a href="productview.php" class="btn btn" style="background-color: hsl(200, 87%, 62%); border-radius: 0px; color: #fff;">View All Product</a>
  </div><hr>
	<form action="sql/edit.php" method="POST" enctype="multipart/form-data"> 
		<div class="row" style="overflow-y:scroll; height: 450px;">
			<div class="col-md-6 col-sgenderm-12 card-area pt-3">
				<div class="row">
					<div class="col-12">
						<label>Product Name <span style="color:red;">*</span></label>
						<input type="text" name="pname" value="<?php echo $row['pname'];?>" placeholder="Product Name" class="form-control" required>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="row ">
							<div class="col-md-6 col-sm-12 mt-3">
								<label>Category <span style="color:red;">*</span></label>
								<input type="text" name="category" value="<?php echo $row['category'];?>" placeholder="Product Category" class="form-control" >
							</div>

							<div class="col-md-6 col-sm-12 mt-4">
								<label>Gender <span style="color:red;">*</span></label>
								<select class="form-control" name="gender" value="<?php echo $row['gender'];?>">
									<option disabled selected value="">---Selected---</option>
									<option  value="Male">Male</option>
									<option  value="Female">Female</option>
								</select>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12">
								<label>Brand <span style="color:red;">*</span></label>
								<input type="text" name="brand" value="<?php echo $row['brand'];?>"  placeholder="Brand" class="form-control">
							</div>
						</div>
            <div class="row mt-3">
              <div class="col-12">
                <label>Price</label>
                <input type="number" name="price" value="<?php echo $row['price'];?>" class="form-control" placeholder="Enter Price">
              </div>
            </div>
						<div class="row mt-3 pb-4">
							<div class="col-12">
								<label>Description <span style="color:red;">*</span></label>
								<textarea name="description" rows="5" cols="68" class="form-control" placeholder="Enter Your Description"> <?php echo $row['description'];?>  </textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-6 col-sm-12 card-area-left pb-5">
				<div class="row mt-3 pb-4">
					<div class="col-12">
						<label>Image <span style="color:red;">*</span></label>
							<div id="uploadArea" class="upload-area">
								  <!-- Header -->
								  <div class="upload-area__header">
								    <h1 class="upload-area__title">Upload your file</h1>
								    <p class="upload-area__paragraph">
								      
								      <strong class="upload-area__tooltip">
								        
								        <span class="upload-area__tooltip-data"></span> <!-- Data Will be Comes From Js -->
								      </strong>
								    </p>
								  </div>
								  
								  <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
								    <span class="drop-zoon__icon">
								      <i class='bx bxs-file-image'></i>
								    </span>
								    <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
								    <span id="loadingText" class="drop-zoon__loading-text">Please Wait</span>
								    <img src="" height="100px" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image" draggable="false" style="margin-top: 0px;">


								    <input type="file" name="image" id="fileInput" class="drop-zoon__file-input" accept="image/*">

                    <p class="pt-4">Old Image</p>
                    <img class="mt-1" src="img/<?php echo $row['image'];?> " height="50px" width="50px">
								  </div>

								  <div id="fileDetails" class="upload-area__file-details file-details">
								    <h3 class="file-details__title">Uploaded File</h3>

								    <div id="uploadedFile" class="uploaded-file" style="margin-left: -250px!important;">
								      <div class="uploaded-file__icon-container">
								        <i class='bx bxs-file-blank uploaded-file__icon'></i>
								        <span class="uploaded-file__icon-text"></span> <!-- Data Will be Comes From Js -->
								      </div>

								      <div id="uploadedFileInfo" class="uploaded-file__info">
								        <span class="uploaded-file__name">Proejct 1</span>
								        <span class="uploaded-file__counter">0%</span>
								      </div>
								    </div>
								  </div>
								  <!-- End File Details -->
								</div>
							</div>
						</div>


			<div class="row">
				<div class="col-12 col-md-6">
					<label>Size</label>
					<select class="form-control" name="psize" value="<?php echo $row['psize'];?>">
					<option disabled selected value="">---Selected---</option>
					<option  value="SM">SM</option>
					<option  value="LG">LG</option>
					<option  value="XL">XL</option>
					<option  value="MD">MD</option>
					<option  value="XXL">XXL</option>
					<option  value="XXXL">XXXL</option>
					</select>
				</div>
				<div class="col-12 col-md-6">
					<label>Date</label>
					<input type="date" name="uploaddate" class="form-control" value="<?php echo $row['uploaddate'];?>">
				</div>
			</div>

      <input type="hidden" name="id" value="<?php echo $row['id'];?>">

			<div class="row mt-4 ">
				<div class="col-12 col-md-6">
					<input type="submit" name="edit" value="Update Now" class="btn btn-primary ml-2">
				</div>
			</div>
		</div>
	</div>
		</div>
	</form>
</div>



<?php

include 'include/footer.php';

?>
<style>



form input[type='text'] ,[type="number"],[type="date"]{
  border-radius: 0px!important;
  width: 100%!important;
}

form select{
  border-radius: 0px!important;
  width: 100%!important;
}
:root {
  --clr-white: rgb(255, 255, 255);
  --clr-black: rgb(0, 0, 0);
  --clr-light: rgb(245, 248, 255);
  --clr-light-gray: rgb(196, 195, 196);
  --clr-blue: rgb(63, 134, 255);
  --clr-light-blue: rgb(171, 202, 255);
}

body {
  margin: 0;
  padding: 0;
  background-color: var(--clr-light);
  color: var(--clr-black);
  font-family: 'Poppins', sans-serif;
  font-size: 1.125rem;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* End General Styles */

/* Upload Area */
.upload-area {
  width: 100%;
  max-width: 25rem;
  background-color: var(--clr-white);
  box-shadow: 0 10px 60px rgb(218, 229, 255);
  border: 2px solid var(--clr-light-blue);
  border-radius: 24px;
  padding: 2rem 1.875rem 5rem 1.875rem;
  margin: 0.625rem;
  text-align: center;
}

.upload-area--open { /* Slid Down Animation */
  animation: slidDown 500ms ease-in-out;
}

@keyframes slidDown {
  from {
    height: 28.125rem; /* 450px */
  }

  to {
    height: 35rem; /* 560px */
  }
}

/* Header */
/* .upload-area__header {

} */

.upload-area__title {
  font-size: 1.8rem;
  font-weight: 500;
  margin-bottom: 0.3125rem;
}

.upload-area__paragraph {
  font-size: 0.9375rem;
  color: var(--clr-light-gray);
  margin-top: 0;
}

.upload-area__tooltip {
  position: relative;
  color: var(--clr-light-blue);
  cursor: pointer;
  transition: color 300ms ease-in-out;
}

.upload-area__tooltip:hover {
  color: var(--clr-blue);
}

.upload-area__tooltip-data {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -125%);
  min-width: max-content;
  background-color: var(--clr-white);
  color: var(--clr-blue);
  border: 1px solid var(--clr-light-blue);
  padding: 0.625rem 1.25rem;
  font-weight: 500;
  opacity: 0;
  visibility: hidden;
  transition: none 300ms ease-in-out;
  transition-property: opacity, visibility;
}

.upload-area__tooltip:hover .upload-area__tooltip-data {
  opacity: 1;
  visibility: visible;
}

/* Drop Zoon */
.upload-area__drop-zoon {
  position: relative;
  height: 11.25rem; /* 180px */
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  border: 2px dashed var(--clr-light-blue);
  border-radius: 15px;
  margin-top: 2.1875rem;
  cursor: pointer;
  transition: border-color 300ms ease-in-out;
}

.upload-area__drop-zoon:hover {
  border-color: var(--clr-blue);
}

.drop-zoon__icon {
  display: flex;
  font-size: 3.75rem;
  color: var(--clr-blue);
  transition: opacity 300ms ease-in-out;
}

.drop-zoon__paragraph {
  font-size: 0.9375rem;
  color: var(--clr-light-gray);
  margin: 0;
  margin-top: 0.625rem;
  transition: opacity 300ms ease-in-out;
}

.drop-zoon:hover .drop-zoon__icon,
.drop-zoon:hover .drop-zoon__paragraph {
  opacity: 0.7;
}

.drop-zoon__loading-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: none;
  color: var(--clr-light-blue);
  z-index: 10;
}

.drop-zoon__preview-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: contain;
  padding: 0.3125rem;
  border-radius: 10px;
  display: none;
  z-index: 1000;
  transition: opacity 300ms ease-in-out;
}

.drop-zoon:hover .drop-zoon__preview-image {
  opacity: 0.8;
}

.drop-zoon__file-input {
  display: none;
}

/* (drop-zoon--over) Modifier Class */
.drop-zoon--over {
  border-color: var(--clr-blue);
}

.drop-zoon--over .drop-zoon__icon,
.drop-zoon--over .drop-zoon__paragraph {
  opacity: 0.7;
}

/* (drop-zoon--over) Modifier Class */
/* .drop-zoon--Uploaded {
   */
/* } */

.drop-zoon--Uploaded .drop-zoon__icon,
.drop-zoon--Uploaded .drop-zoon__paragraph {
  display: none;
}

/* File Details Area */
.upload-area__file-details {
  height: 0;
  visibility: hidden;
  opacity: 0;
  text-align: left;
  transition: none 500ms ease-in-out;
  transition-property: opacity, visibility;
  transition-delay: 500ms;
}

/* (duploaded-file--open) Modifier Class */
.file-details--open {
  height: auto;
  visibility: visible;
  opacity: 1;
}

.file-details__title {
  font-size: 1.125rem;
  font-weight: 500;
  color: var(--clr-light-gray);
}

/* Uploaded File */
.uploaded-file {
  display: flex;
  align-items: center;
  padding: 0.625rem 0;
  visibility: hidden;
  opacity: 0;
  transition: none 500ms ease-in-out;
  transition-property: visibility, opacity;
}

/* (duploaded-file--open) Modifier Class */
.uploaded-file--open {
  visibility: visible;
  opacity: 1;
}

.uploaded-file__icon-container {
  position: relative;
  margin-right: 0.3125rem;
}

.uploaded-file__icon {
  font-size: 3.4375rem;
  color: var(--clr-blue);
}

.uploaded-file__icon-text {
  position: absolute;
  top: 1.5625rem;
  left: 50%;
  transform: translateX(-50%);
  font-size: 0.9375rem;
  font-weight: 500;
  color: var(--clr-white);
}

.uploaded-file__info {
  position: relative;
  top: -0.3125rem;
  width: 100%;
  display: flex;
  justify-content: space-between;
}

.uploaded-file__info::before,
.uploaded-file__info::after {
  content: '';
  position: absolute;
  bottom: -0.9375rem;
  width: 0;
  height: 0.5rem;
  background-color: #ebf2ff;
  border-radius: 0.625rem;
}

.uploaded-file__info::before {
  width: 100%;
}

.uploaded-file__info::after {
  width: 100%;
  background-color: var(--clr-blue);
}

/* Progress Animation */
.uploaded-file__info--active::after {
  animation: progressMove 800ms ease-in-out;
  animation-delay: 300ms;
}

@keyframes progressMove {
  from {
    width: 0%;
    background-color: transparent;
  }

  to {
    width: 100%;
    background-color: var(--clr-blue);
  }
}

.uploaded-file__name {
  width: 100%;
  max-width: 6.25rem; /* 100px */
  display: inline-block;
  font-size: 1rem;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.uploaded-file__counter {
  font-size: 1rem;
  color: var(--clr-light-gray);
}
</style>