<?php
include("config.php");
$categoryname=$_POST["category"];
$description=$_POST["description"];

$loc= "C:/xampp/htdocs/dsign_world/admin/pages/imageuploads/";
$img=$_FILES['txt_image']['name'];

move_uploaded_file($_FILES['txt_image']['tmp_name'],$loc.$img);

$sql=mysqli_query($conn,"SELECT  count(*) as count FROM tblworkcategory WHERE workcategory_name='$categoryname'");
$rowset=mysqli_fetch_array($sql);
if($rowset['count']>0)
{    
    echo "<script>alert('Category Registrated Successfull!!!'); window.location='./workcategoryview.php'</script>";
}
else 
{
$save=mysqli_query($conn,"insert into tblworkcategory(workcategory_name,workcategory_description,workcategory_cover_img)values('$categoryname','$description','$img')");
    
echo "<script>alert('Category Registrated Successfull!!!'); window.location='./workcategoryview.php'</script>";
}
?>
