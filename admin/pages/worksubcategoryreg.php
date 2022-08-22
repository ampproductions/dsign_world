<?php
include("./header.php");
include('config.php');
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
            <a href="#">Sub Category</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Sub Category Registration</li>
        </ol>
      </nav>
    </div>
    <div class="content-viewport">
      <div class="row">

        <div class="col-lg-12">
          <div class="grid">
            <p class="grid-header">Category Registration</p>
            <div class="grid-body">
              <div class="item-wrapper">
                <div class="row">

                  <div class="col-md-8 mx-auto">
                    <form action="./worksubcategoryregaction.php" method="post" enctype="multipart/form-data">
                    <?php
                                            $sql = mysqli_query($conn, "SELECT * FROM tblworkcategory");
                                            ?>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputType14">Category Name</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <select name="workcategory_name" class="custom-select">
                                                        <option selected>--------------- Select ---------------</option>
                                                        <?php
                                                        while ($row = mysqli_fetch_array($sql)) {
                                                        ?>
                                                            <option value="<?php echo $row['workcategory_id'] ?>"> <?php echo $row['workcategory_name']; ?> </option>
                                                        <?php
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
                          <input type="text" class="form-control form-control-sm" name="subcategory" id="inputType14" placeholder="Enter the Category">
                        </div>
                      </div>
                      <div class="form-group row showcase_row_area">
                        <div class="col-md-3 showcase_text_area">
                          <label for="inputType9">Sub Category Description</label>
                        </div>
                        <div class="col-md-9 showcase_content_area">
                          <textarea class="form-control" name="subdescription" id="inputType9" cols="12" rows="5"></textarea>
                        </div>
                      </div>
                      <div class="col-md-3 showcase_content_area">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-0"> Register </button>
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
  </div>
</div>
<!-- content viewport ends -->
<?php
include("./footer.php");
?>