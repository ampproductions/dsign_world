<?php
    include("config.php");
     if (isset($_POST["submit"]))
     {
        $customer_name=$_POST['customer_name'];
        $customer_email=$_POST['customer_email'];
        $customer_phone=$_POST['customer_phone'];
        $customer_pass=$_POST['customer_pass'];
        $customer_cpass=$_POST['customer_cpass'];



        $result=mysqli_query($con ,"INSERT INTO tblcustomer WHERE (customer_name,customer_email,customer_phone,customer_pass,customer_cpass) VALUES ('$customer_name','$customer_email','$customer_phone','$customer_pass','$customer_cpass'");
        $row=mysqli_fetch_array($result);

        if($row>0) 
        {
           echo"<script>alert('Sucess');window.location='../guest/index.php'</script>";

        }
        else 
        {
          echo"<script>alert('Invalid Username/Password');window.location='../guest/customerreglogin.php'</script>";
        }
     }



?>
