<?php
include("header.php");
?>


<!-- partial -->
<div class="page-content-wrapper">
    <div class="page-content-wrapper-inner">
        <div class="content-viewport">
            <div class="row">
                <div class="col-12 py-5">
                    <h4>Category Dashboard</h4>
                    <p class="text-gray">Welcome aboard, Allen Clerk</p>
                </div>
            </div>
            <div class="row">
                <?php
                    include("config.php");
                    $s = 1;
                    $sql = mysqli_query($conn, "SELECT * FROM tblworkcategory");
                    while ($display = mysqli_fetch_array($sql)) {
                ?>
                <div class="col-md-2 col-sm-9 col-6 ">
                    <div class="grid">
                        <div class="grid-body text-gray">
                            <a href="./workcategoryreg.php">

                                <div class="d-flex justify-content-between">
                                    <h6><?php echo $s++ ?></h6>
                                    <br><h5 class="text-black"><b><?php echo $display["workcategory_name"] ?></b></h5>
                                    <br>
                                    <p><?php echo $display["workcategory_description"] ?></p><br>
                                </div>
                                <div class="wrapper w-50 mt-4">
                                    <div class="display-avatar">
                                        <img class="profile-img img-lg " src="../image_5.png" alt="profile image">
                                        
                                    </div>
                                </div>
                        </div>
                        </a>
                    </div>
                </div>
                <?php
                      echo "</tr>";
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- content viewport ends -->

    <?php
    include("footer.php");
    ?>