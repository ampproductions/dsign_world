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
            <a href="#">Category</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Category Registration</li>
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
                    <form action="workcategoryregaction.php" method="post" enctype="multipart/form-data">

                      <div class="form-group row showcase_row_area">
                        <div class="col-md-3 showcase_text_area">
                          <label for="inputType14">Category Title</label>
                        </div>
                        <div class="col-md-9 showcase_content_area">
                          <input type="text" class="form-control form-control-sm" name="category" id="inputType14" placeholder="Enter the Category">
                        </div>
                      </div>
                      <div class="form-group row showcase_row_area">
                        <div class="col-md-3 showcase_text_area">
                          <label for="inputType9">Category Description</label>
                        </div>
                        <div class="col-md-9 showcase_content_area">
                          <textarea class="form-control" name="description" id="inputType9" cols="12" rows="5"></textarea>
                        </div>
                      </div>
                      
                      <div class="row showcase_row_area mb-3">
                        <div class="col-md-3 showcase_text_area">
                          <label>File Upload</label>
                        </div>
                        <div class="col-md-9">
                          <div class="custom-file">
                          <input type="file" class="custom-file-input" name="txt_image" accept="image/*" id="customFile">
                          <label class="custom-file-label">Choose file</label>
                            </div>
                          </div>
                        <br><br><br>
                        <div class="col-md-3 showcase_content_area">
                          <button type="submit" class="btn btn-primary btn-block mt-0"> Register </button>
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
  <!-- content viewport ends -->
  <?php
  include("./footer.php");
  ?>