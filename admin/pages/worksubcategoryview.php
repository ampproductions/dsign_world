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
            <a href="#">Sub Category</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Sub Category Registration View</li>
        </ol>
      </nav>
    </div>
    <div class="content-viewport" style="align-items: center;">
      <div class="row">
        <div>
          <a href="./worksubcategoryreg.php" style="color:white; align-items:center; text-align:center;">
            <button class="btn action-btn btn-like btn-outline-success btn-rounded">
              <i class="mdi mdi-plus"></i>
            </button>
            <span style="color:green;"> &nbsp;Add</span>
          </a>
        </div>
        <br><br><br>
        <br>
        <div class="col-lg-12">
          <div class="grid">
            <p class="grid-header">Sub Category Registration View</p>
            <div class="item-wrapper">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Sl.No</th>
                      <th>Category</th>
                      <th>Sub Category</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include("config.php");
                    $s = 1;
                    $sql = mysqli_query($conn, "SELECT * FROM tblworksubcategory");
                    while ($display = mysqli_fetch_array($sql)) {
                    ?>
                    <?php
                    include("config.php");
                    $sql = mysqli_query($conn, "SELECT * FROM `tblworksubcategory` s inner join tblworkcategory c on s.workcategory_id=c.workcategory_id;");
                    while ($display = mysqli_fetch_array($sql)) {
                    ?>
                      <tr>
                        <td><?php echo $s++ ?> </td>
                        <td><?php echo $display["workcategory_name"]?> </td>
                        <td><?php echo $display["worksubcategory_name"] ?> </td>
                        <td><?php echo $display["worksubcategory_description"] ?></td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-trasnparent action-btn btn-xs component-flat pr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="mdi mdi-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="worksubcategoryedit.php?worksubcategory_id=<?php echo $display['worksubcategory_id']; ?>" style="color: green;">Edit</a>
                              <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete?')"href="worksubcategorydelete.php?worksubcategory_id=<?php echo $display['worksubcategory_id']; ?>" style="color: red;">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                  </tbody>
                <?php
                      echo "</tr>";
                    }
                    }
                ?>
                </table>
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