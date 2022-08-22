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
            <a href="#">Work</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Request View</li>
        </ol>
      </nav>
    </div>
    <div class="content-viewport">
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
            <p class="grid-header">Work Request View</p>
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
                        <td>
                          <div class="display-avatar">
                            <img class="profile-img img-lg " src="../image_5.png" alt="profile image">
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