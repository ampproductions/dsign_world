<?php
include("config.php");
if(isset($_GET["worksubcategory_id"]))
{
    $worksubcategory_id=$_GET["worksubcategory_id"];
    // sql to delete a record
    mysqli_query ($conn,"delete from tblworksubcategory where worksubcategory_id= $worksubcategory_id");
    
        echo "<script>window.location='worksubcategoryview.php'</script>";	
			
}
?>