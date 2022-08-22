<?php
include("config.php");
if(isset($_GET["workcategory_id"]))
{
    $workcategory_id=$_GET["workcategory_id"];
    // sql to delete a record
    mysqli_query ($conn,"delete from tblworkcategory where workcategory_id= $workcategory_id");
    
        echo "<script>window.location='workcategoryview.php'</script>";	
			
}
?>