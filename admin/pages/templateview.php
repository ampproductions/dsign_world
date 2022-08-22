<?php
session_start();
include("./header.php");
include("./config.php");
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
            <a href="#">Template</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Categorywise Template View</li>
        </ol>
      </nav>
    </div>
    <div class="content-viewport">
      <div class="row">

        <div class="col-lg-12">
          <p class="grid-header">Categorywise Template View</p>
          <div class="grid-body">
            <div class="item-wrapper">
              <div class="row">
                <div class="col-md-8 mx-auto">
                  <form action="" method="post">

                    <div class="row showcase_row_area">
                      <div class="col-md-3 showcase_text_area">

                        <label>Category</label>
                      </div>
                      <div class="col-md-9 showcase_content_area">
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM tblworkcategory");
                        ?>
                        <select name="workcategory_id" class="custom-select" onchange="this.form.submit()">
                          <option value="0">--------------- Select ---------------</option>
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
                    <div class="col-md-3 showcase_content_area">
                      <button type="submit" class="btn btn-primary btn-block mt-0"> Submit </button>
                    </div>
                  </form>
                  <?php
                  if (isset($_POST["workcategory_id"])) {
                    $workcategory_id = $_POST["workcategory_id"];
                    // $todate=$_POST["todate"]; 
                    $_SESSION['categoryid'] = $workcategory_id;
                    // $_SESSION['tdate']=$todate;
                    $s = 1;
                  ?>
                    <div><br><br>
                      <a href="./templatereg.php" style="color:white; align-items:center; text-align:center;">
                        <button class="btn action-btn btn-like btn-outline-success btn-rounded">
                          <i class="mdi mdi-plus"></i>
                        </button>
                        <span style="color:green;"> &nbsp;Add</span>
                      </a>
                    </div><br>
                    <div class="col-lg-12">
                      <div class="grid">
                        <p class="grid-header">Template Registration View</p>
                        <div class="item-wrapper">
                          <div class="table-responsive" id="details">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Sl.no </th>
                                  <th>Title</th>
                                  <th>Category Name</th>
                                  <th>Sub Category Name</th>
                                  <th>template Size</th>
                                  <th>Description</th>
                                  <th>Image</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $sql = mysqli_query($conn, "SELECT * FROM tbltemplatereg f inner join tblworksubcategory w on f.workcategory_id=w.worksubcategory_id WHERE f.worksubcategory_id='$workcategory_id'");
                                // console.log($sql);
                                while ($display = mysqli_fetch_array($sql)) {
                                ?>
                                  <tr>
                                    <td><?php echo $display["template_title"] ?> </td>
                                    <td><?php echo $display["workcategory_name"] ?> </td>
                                    <td><?php echo $display["worksubcategory_name"] ?> </td>
                                    <td><?php echo $display["template_size"] ?> </td>
                                    <td><?php echo $display["template_description"] ?></td>
                                    <td>
                                      <div class="display-avatar">
                                        <img class="profile-img img-lg " src=./imageuploads/<?php echo $display["workcategory_cover_img"]; ?> width="100" height="100"><br><?php echo $display["workcategory_cover_img"]; ?> alt="profile image">
                                      </div>
                                    </td>
                                    <td>
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-trasnparent action-btn btn-xs component-flat pr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="mdi mdi-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                          <a class="dropdown-item" href="worksubcategoryedit.php?worksubcategory_id=<?php echo $display['worksubcategory_id']; ?>" style="color: green;">Edit</a>
                                          <a class="dropdown-item" href="templateregdelete.php?worksubcategory_id=<?php echo $display['worksubcategory_id']; ?>" style="color: red;">Delete</a>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                              <?php
                                }
                              }
                              ?>
                              </tbody>
                            </table>
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
    </div>
  </div>
</div>
<!-- content viewport ends -->
<?php
include("footer.php");
?>