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
          <li class="breadcrumb-item active" aria-current="page">Category Registration View</li>
        </ol>
      </nav>
    </div>
    <div class="content-viewport" style="align-items: center;">
      <div class="row">
        <div>
          <a href="./workcategoryreg.php" style="color:white; align-items:center; text-align:center;">
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
            <p class="grid-header">Category Registration View</p>
            <div class="item-wrapper">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Sl.No</th>
                      <th>Category</th>
                      <th>Description</th>
                      <th>Image</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include("config.php");
                    $s = 1;
                    $sql = mysqli_query($conn, "SELECT * FROM tblworkcategory");
                    while ($display = mysqli_fetch_array($sql)) {
                    ?>
                      <tr>
                        <td><?php echo $s++ ?> </td>
                        <td><?php echo $display["workcategory_name"] ?> </td>
                        <td><?php echo $display["workcategory_description"] ?></td>
                        <td><?php echo "<img src='imageuploads/".$display["workcategory_cover_img"]."' height='100' width='100'/>"?><br><?php echo $display["workcategory_cover_img"]?></td>
                        <td>

                          <div class="btn-group">
                            <button type="button" class="btn btn-trasnparent action-btn btn-xs component-flat pr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="mdi mdi-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="workcategoryedit.php?workcategory_id=<?php echo $display['workcategory_id']; ?>" style="color: green;">Edit</a>

                              <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete?')" href="workcategorydelete.php?workcategory_id=<?php echo $display['workcategory_id']; ?>" style="color: red;">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                  </tbody>
                <?php
                      echo "</tr>";
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