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

$catid=$_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM `tblworksubcategory` where workcategory_id=$catid;");
// echo $f="SELECT * FROM `tblworksubcategory` where workcategory_id=$catid;";

// $sql = mysqli_query($conn, "SELECT * FROM `tblworksubcategory` s inner join tblworkcategory c on s.workcategory_id=c.workcategory_id;");

echo "<select name=worksubcategory_name class=custom-select >";
while($display=mysqli_fetch_array($sql))
{
echo "<option value=".$display['worksubcategory_id'].">".$display['worksubcategory_name']."</option>"; 
}
echo "</select>"
?>  