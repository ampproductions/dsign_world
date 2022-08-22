
<?php
session_start();
include("config.php");
if (isset($_POST['submit'])) 
{
    $workcategory_name = $_POST['workcategory_name'];
    $worksubcategory_name = $_POST['worksubcategory_name'];
    $template_name = $_POST["templatetitle"];
    $template_size = $_POST["templatesize"];
    $template_description = $_POST["templatedescription"];

    $loc = "C:/xampp/htdocs/dsign_world/admin/pages/imageuploads/";
    $img = $_FILES['txt_image']['name'];
    move_uploaded_file($_FILES['txt_image']['tmp_name'],$img.$loc);


    $save = mysqli_query($conn,"INSERT INTO tbltemplatereg (workcategory_id,worksubcategory_id,template_title,template_size,template_description,template_img)VALUES('$workcategory_name','$worksubcategory_name','$template_name','$template_size','$template_description','$img')");

    echo "<script>alert('Template Registrated Successfull!!!'); window.location='../pages/templateview2.php'</script>";

}
?>