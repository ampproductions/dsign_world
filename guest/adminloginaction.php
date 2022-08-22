<?php
    include("config.php");
     if (isset($_POST["submit"]))
     {
        $admin_username=$_POST['username'];
        $admin_password=$_POST['password'];



        $result=mysqli_query($con ,"SELECT * FROM tbladminlogin WHERE admin_username='$admin_username' AND admin_password='$admin_password'");
        $row=mysqli_fetch_array($result);

        if($row>0) 
        {
           echo"<script>alert('Sucess');window.location='../admin/pages/index.php'</script>";

        }
        else 
        {
          echo"<script>alert('Invalid Username/Password');window.location='..\guest\adminlogin.php'</script>";
        }
     }



?>
