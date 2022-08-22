<?php
include("config.php");
if(isset($_GET["template_id"]))
{
    $templatereg_id=$_GET["templatereg_id"];
    // sql to delete a record
    mysqli_query ($conn,"delete from tbltemplatereg where templatereg_id= $templatereg_id");
    
        echo "<script>window.location='templateview.php'</script>";	
			
}
?>