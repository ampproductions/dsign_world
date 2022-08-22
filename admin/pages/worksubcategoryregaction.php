<?php
include("config.php");
if(isset($_POST['submit']))
{

$workcategoryid=$_POST["workcategory_name"];
$subcategoryname=$_POST["subcategory"];
$description=$_POST["subdescription"];

$sql=mysqli_query($conn,"SELECT count(*) as count FROM tblworksubcategory WHERE worksubcategory_name='$subcategoryname'");

$display=mysqli_fetch_array($sql);

if($display['count']>0)
{
echo "<script>alert('Already exist');window.location='./worksubcategoryreg.php';</script>"; 
}
else
{

$sql="INSERT INTO tblworksubcategory (workcategory_id,worksubcategory_name,worksubcategory_description)VALUES('$workcategoryid','$subcategoryname','$description')";
// echo $sql;
// exit;
$result=mysqli_query($conn,$sql);
echo "<script>alert('Sub Category registered successfully'); window.location='./worksubcategoryview.php';</script>";
}
}
