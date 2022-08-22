<link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
<!-- endinjeFct -->
<!-- vendor css for this page -->
<!-- End vendor css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="../assets/css/shared/style.css">
<!-- endinject -->
<!-- Layout style -->
<link rel="stylesheet" href="../assets/css/demo_1/style.css">
<!-- Layout style -->
<link rel="shortcut icon" href="../asssets/images/favicon.ico" />

<?php
include('config.php');
?>

<?php
$templateid = $_GET['id'];
$s = 1;
$sql = mysqli_query($conn, "SELECT * FROM `tbltemplatereg` where template_id=$templateid;");
// echo $f="SELECT * FROM `tbltemplatereg` where template_id=3;";

echo "<table name=templateview_name id=templateview_name class=custom-select table >";
while ($display = mysqli_fetch_array($sql)) {
?>


  <div class="col-lg-12 showcase_text_area">
    <div class="grid">

      <thead>
        <tr>
          <th>Sl.no </th>
          <th>Title</th>
          <th>Category Name</th>
          <th>Sub Category Name</th>
          <th>template Size</th>
          <th>Description</th>
          <th>Image</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        echo "<tr>";
        echo "<td>" . $s++ . "</td>";
        echo "<td>" . $display["template_title"] . "</td>";
        echo "<td>" . $display["workcategory_id"] . "</td>";
        echo "<td>" . $display["worksubcategory_id"] . "</td>";
        echo "<td>" . $display["template_size"] . "</td>";
        echo "<td>" . $display["template_description"] . "</td>";
        ?>

        <td><img src='./imageUploads/<?php echo $display['template_img']; ?>' height='80' width='80' /></td>;


        ?>
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

        <tr>


      </tbody>
      </table>
    <?php
  }
    ?>
    </div>
  </div>

  ?>