<?php
include("./header.php");
include("./config.php");

?>

<script type="text/javascript" language="javascript">
    function getcategoryid(str)
    {
    //alert(str)
    //var s=document.form1.t1.value;
    //if (str==0)
    // {
    // document.getElementById("rose").innerHTML="";
    // return;
    // }
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
          //  alert("ff")
        document.getElementById("list_details1").innerHTML=xmlhttp.responseText;
        }
    }
    
    xmlhttp.open("GET","subcategory-ajax.php?id="+str,true);
    xmlhttp.send(null);
    }
</script>
<!-- partial -->
<div class="page-content-wrapper">
    <div class="page-content-wrapper-inner">
        <div class="viewport-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb has-arrow">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Category</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Category Registration</li>
                </ol>
            </nav>
        </div>
        <div class="content-viewport">
            <div class="row">

                <div class="col-lg-12">
                    <div class="grid">
                        <p class="grid-header">Template Registration</p>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <form action="templateregaction.php" method="post" enctype="multipart/form-data">
                                            <?php
                                            
                                            $sql = mysqli_query($conn, "SELECT * FROM `tblworkcategory`");

                                            ?>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputType14">Category Name</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <select name="workcategory_name" id="list_details" class="custom-select" onchange="getcategoryid(this.value)">
                                                        <option selected value="0">--------------- Select ---------------</option>
                                                        <?php
                                                        while ($display = mysqli_fetch_array($sql)) {
                                                        ?>
                                                            <option value="<?php echo $display['workcategory_id']; ?>"><?php echo $display['workcategory_name']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label>Sub Category Name</label>
                                                </div>

                                                <div class="col-md-9 showcase_content_area" id="list_details1">
                                                    <select name="worksubcategory_name" id="worksubcategory_name" class="custom-select">
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputType14">Template Title</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control form-control-sm" name="templatetitle" id="inputType14" placeholder="Enter the Template Title">
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputType14">Template Size</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control form-control-sm" id="inputType14" name="templatesize" placeholder="Enter the Size">
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputType9">Template Description</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <textarea class="form-control" id="inputType9" name="templatedescription" cols="12" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label>File Upload</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="txt_image" accept="image/*" id="customFile">
                                                        <label class="custom-file-label">Choose file</label>
                                                    </div>
                                                </div>
                                                <br><br><br>
                                            </div>
                                            <br>
                                            <div class="col-md-3 showcase_content_area">
                                                <button type="submit" name="submit" class="btn btn-primary btn-block mt-0"> Register </button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- content viewport ends -->

<?php
include("./footer.php");
?>