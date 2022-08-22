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
                    if (isset($_GET["worksubcategory_id"])) {
                      $worksubcategory_id = $_GET["worksubcategory_id"];
                      // echo $worksubcategoryid;
                      // exit;
                      $sql = mysqli_query($conn, "SELECT * from tblworksubcategory WHERE worksubcategory_id='$worksubcategory_id'");
                      $display = mysqli_fetch_array($sql);
                      $sql1 = mysqli_query($conn, "SELECT * from tblworkcategory");
                      //$display1 = mysqli_fetch_array($sql1);

                    ?>
                      <form action="" method="post">
                        <div class="form-group row showcase_row_area">
                          <div class="col-md-3 showcase_text_area">
                            <label for="inputType14">Category Name</label>
                          </div>
                          <div class="col-md-9 showcase_content_area">
                            <select name="workcategory_name" class="custom-select">
                              <option selected>--------------- Select ---------------</option>
                              <?php
                              while ($row = mysqli_fetch_array($sql1)) {
                              ?>
                                <option value="<?php echo $row['workcategory_id'] ?>" 
                                
                                <?php echo ($row["workcategory_id"] == $display["workcategory_id"]) ? "selected=selected" : ""; ?>>

                                  <?php echo $row['workcategory_name']; ?> </option>
                            <?php
                              }
                            }
                            ?>
                            </select>
                          </div>
                        </div>

                        <div class="form-group row showcase_row_area">
                          <div class="col-md-3 showcase_text_area">
                            <label for="inputType14">Sub Category Name</label>
                          </div>
                          <div class="col-md-9 showcase_content_area">
                            <input type="text" class="form-control form-control-sm" name="subcategory" id="inputType14" placeholder="Enter the Category" value="<?php echo $display['worksubcategory_name']; ?>">
                          </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                          <div class="col-md-3 showcase_text_area">
                            <label for="inputType9">Category Description</label>
                          </div>
                          <div class="col-md-9 showcase_content_area">
                            <input type="text" class="form-control form-control-sm" name="subdescription" id="inputType14" placeholder="Enter the Category" value="<?php echo $display['worksubcategory_description']; ?>">
                          </div>
                        </div>
                        <div class="row showcase_row_area mb-3">
                          <br><br><br>
                          <div class="col-md-3 showcase_content_area">
                            <button type="submit" name="submit" class="btn btn-success btn-block mt-0"> Save </button>
                          </div>
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

    $workcategory_name = $_POST['workcategory_name'];
    $subcategory_name = $_POST["subcategory"];
    $subcategory_description = $_POST["subdescription"];

    $sql = mysqli_query($conn, "UPDATE tblworksubcategory SET worksubcategory_name='$subcategory_name',worksubcategory_description='$subcategory_description' WHERE worksubcategory_id='$worksubcategory_id'");
    if ($sql) {
      echo "<script>alert('Sub Category updated sucessfully !!!');window.location='./worksubcategoryview.php';</script>";
    } else {
      echo "<script>alert('Sub Category updated sucessfully !!!');window.location='./worksubcategoryedit.php';</script>";
    }
  }

  ?>

  <!-- content viewport ends -->

  <?php
  include("./footer.php");
  ?>