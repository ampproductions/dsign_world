<?php
session_start();
include("./header.php");
include("./config.php");
?>

<script type="text/javascript" language="javascript">
  function gettemplateid(str) {
    //alert(str)
    //var s=document.form1.t1.value;
    //if (str==0)
    // {
    // document.getElementById("rose").innerHTML="";
    // return;
    // }
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        //  alert("ff")
        document.getElementById("list_details1").innerHTML = xmlhttp.responseText;
      }
    }

    xmlhttp.open("GET", "templateview-ajax.php?id=" + str, true);
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
            <a href="#">Template</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Categorywise Template View</li>
        </ol>
      </nav>
    </div>
    <div class="content-viewport">
      <div class="row">

        <div class="col-lg-12">
          <p class="grid-header">Categorywise Template View</p>
          <div class="grid-body">
            <div class="item-wrapper">
              <div class="row">
                <div class="col-md-8 mx-auto">
                  <form action="" method="post">

                    <div class="row showcase_row_area">
                      <div class="col-md-3 showcase_text_area">
                        <label>Sub Category Name</label>
                      </div>
                      <div class="col-md-9 showcase_content_area">
                        <select name="templateview_name" id="list_details" class="custom-select" onchange="gettemplateid(this.value)">
                          <option selected value="0">--------------- Select ---------------</option>
                          <?php
                            $sql = mysqli_query($conn, "SELECT * FROM `tblworkcategory`");

                          while ($display = mysqli_fetch_array($sql)) {
                          ?>
                            <option value="<?php echo $display['workcategory_id']; ?>"><?php echo $display['workcategory_name']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>

                      <div class="col-md-9 showcase_content_area" id="data_view">
                        </div>
                      </div>
                      
                      <div class="col-md-3 showcase_content_area">
                      <!-- <select name="worksubcategory_name" class="custom-select">
                        <button type="submit" class="btn btn-primary btn-block mt-0"> Submit </button>
                      </select> -->
                    </div>
                  </form>
                    <div><br><br>
                      <a href="./templatereg.php" style="color:white; align-items:center; text-align:center;">
                        <button class="btn action-btn btn-like btn-outline-success btn-rounded">
                          <i class="mdi mdi-plus"></i>
                        </button>
                        <span style="color:green;"> &nbsp;Add</span>
                      </a>
                    </div><br>
                    <div class="col-md-12 showcase_text_area">
                      <div class="grid">
                        <p class="grid-header">Template Registration View</p>
                        <div class="item-wrapper">
                          <div class="table-responsive" id="list_details1">
                                 
                            
                             
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
  </div>
</div>
<!-- content viewport ends -->
<?php
include("footer.php");
?>