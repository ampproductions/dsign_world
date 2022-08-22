<?php
include("./header.php");
?>
<!-- partial -->
<div class="page-content-wrapper">
  <div class="page-content-wrapper-inner">
    <div class="viewport-header">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb has-arrow">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Category</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Category Edit</li>
        </ol>
      </nav>
    </div>
    <div class="content-viewport">
      <div class="row">

        <div class="col-lg-12">
          <div class="grid">
            <p class="grid-header">Category Edit</p>
            <div class="grid-body">
              <div class="item-wrapper">
                <div class="row">

                  <div class="col-md-8 mx-auto">

                    <?php
                    include("config.php");
                    if (isset($_GET["workcategory_id"])) {
                      $workcategory_id = $_GET["workcategory_id"];
                      // echo $workcategoryid;
                      // exit;
                      $sql=mysqli_query($conn,"SELECT * from tblworkcategory WHERE workcategory_id='$workcategory_id'");
                      $display = mysqli_fetch_array($sql);
                    }
                    ?>

                    <form action="" method="post" enctype="multipart/form-data">

                      <div class="form-group row showcase_row_area">
                        <div class="col-md-3 showcase_text_area">
                          <label for="inputType14">Category Title</label>
                        </div>
                        <div class="col-md-9 showcase_content_area">
                          <input type="text" class="form-control form-control-sm" name="category" id="inputType14" placeholder="Enter the Category" value="<?php echo $display['workcategory_name']; ?>">
                        </div>
                      </div>
                      <div class="form-group row showcase_row_area">
                        <div class="col-md-3 showcase_text_area">
                          <label for="inputType9">Category Description</label>
                        </div>
                        <div class="col-md-9 showcase_content_area">
                        <input type="text" class="form-control form-control-sm" name="description" id="inputType14" placeholder="Enter the Category" value="<?php echo $display['workcategory_description']; ?>">
                        </div>
                      </div>
                      <div class="row showcase_row_area mb-3">
                        <div class="col-md-3 showcase_text_area">
                          <label>File Upload</label>
                        </div>
                        <div class="col-md-9 showcase_content_area">
                          <?php echo"<img src='imageuploads/".$display["workcategory_cover_img"]."' height='100' width='100'/>"?><br><?php echo $display["workcategory_cover_img"]?>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="txt_img" accept="../imageuploads/*" multiple="multiple" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                        </div>
                        <br><br><br>
                        <div class="col-md-3 showcase_content_area">
                          <button type="submit" name="submit"class="btn btn-success btn-block mt-0"> Save </button>
                        </div>
                        <!-- <div class="col-md-3 showcase_content_area">
                          <button type="submit" class="btn btn-danger btn-block mt-0"> Delete </button>
                        </div> -->
                      </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php
if (isset($_POST["submit"])) {

	$category_name = $_POST["category"];
	$category_description = $_POST["description"];
  // $category_image = $_POST["txt_img"];
	$loc = "C:/xampp/htdocs/dsign_world/admin/pages/imageuploads/";
	$img = $_FILES['txt_img']['name'];

	if ($img=="") {
		$sql = mysqli_query($conn, "UPDATE `tblworkcategory` SET `workcategory_name`='$category_name',`workcategory_description`='$category_description' WHERE `workcategory_id`='$workcategory_id'");
	} 
  else {
    move_uploaded_file($_FILES['txt_image']['tmp_name'],$img.$loc);
		$sql = mysqli_query($conn, "UPDATE `tblworkcategory` SET `workcategory_name`='$category_name',`workcategory_description`='$category_description',`workcategory_cover_img`='$img' WHERE `workcategory_id`='$workcategory_id'");
	}

  if($sql){
    echo "<script>alert('Category Updated !!!');window.location='./workcategoryview.php';</script>";
  }
  else{
    echo "<script>alert('Category Not Updated !!!');window.location='./workcategoryedit.php';</script>";
  }

}

?>

  <!-- content viewport ends -->

  <?php
  include("./footer.php");
  ?>