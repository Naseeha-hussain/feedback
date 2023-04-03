<?php 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (isset($_SESSION["success"])) {
     $msg="Feedback Submitted,Thank You";
					 echo "<script type='text/javascript'>alert('$msg');</script>";
					  unset($_SESSION['success']);
    }
require_once('fcon.php');
 $t = "SELECT DISTINCT ssem FROM Subject ORDER BY ssem ASC"; 
   $sem = mysqli_query($confaculty, $t);
        
// if(isset($_POST["add-faculty"])){ 

// $faculty_name=$_POST['faculty'];
// $_SESSION["facultynm"] = $faculty_name;
// 	//$msg="Faculty Updated";
// header("location: choose_subject.php");
// }
if (isset($_POST["add-faculty"])) {

  $_SESSION['batch'] = $_POST['batch'];
  
  $_SESSION['subj'] = $_POST['subj'];
  $_SESSION['sem'] = $_POST['sem'];
  $sem = $_POST['sem'];
  $_SESSION['sem'] = $sem;
  $_SESSION['sec'] = $_POST['sec'];
   

  header("Location: choose_subject.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<script src="//platform-api.sharethis.com/js/sharethis.js#property=5c9e29cf6f05b20011c6d7d3&product=inline-share-buttons"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5139634720777851",
    enable_page_level_ads: true
  });
</script>
  <meta charset="utf-8">
   <meta property="og:image" content="images/faculty.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="images/faculty.png">

  <title>Choose Dept in Faculty Feedback section php mysql</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
$(document).ready(function(){
    $('#semno').on('change', function(){
        var SemID = $(this).val();
        if(SemID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'ssem='+SemID,
                success:function(html){
                    $('#subj').html(html);
                    $('#faculty').html('<option value="">Select subject first</option>'); 
                }
            }); 
        }else{
            $('#subj').html('<option value="">Select Semester first</option>');
            $('#faculty').html('<option value="">Select Subject first</option>'); 
        }
    });
    
    // $('#subj').on('change', function(){
    //     var SubjID = $(this).val();
    //     if(SubjID){
    //         $.ajax({
    //             type:'POST',
    //             url:'ajaxData.php',
    //             data:'s_name='+SubjID,
    //             success:function(html){
    //                 $('#faculty').html(html);
    //             }
    //         }); 
    //     }
    //     else{
    //         $('#faculty').html('<option value="">Select  first</option>'); 
    //     }
    // });
});
</script>
</head>

<body>

  <!-- container section start -->
  <section id="container" class="">
   <?php include 'header-st.php';
include 'sidebar-st.php';
 ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Feedback Section</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Feedback</li>
              <li><i class="fa fa-file-text-o"></i>Choose Dept</li>
            </ol>
          </div>
        </div>
		<script src="//platform-api.sharethis.com/js/sharethis.js#property=5c9e29cf6f05b20011c6d7d3&product=inline-share-buttons"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5139634720777851",
    enable_page_level_ads: true
  });
</script>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Select Dept
              </header>
              <form class="form-horizontal" enctype="multipart/form-data" method="post">
              <div class="form-group">
                     <div class="col-sm-2 control-label">Batch </div>
                    <div class="col-sm-8">
                      <select class="form-control m-bot15" name="batch" required>
					  <option></option> 
            <option>2020-24</option> 
            <option>2021-25</option> 
</select>
</div>
</div>    
           <div class="form-group">
                    <div class="col-sm-2 control-label">semester</div>
                    <div class="col-sm-8">
                      <select id="semno" class="form-control m-bot15" name="sem" required>
                       <option value="">Select Sem</option>
                       <?php 
                            if($sem->num_rows > 0){ 
                              while($row = $sem->fetch_assoc()){  
                                    echo '<option value="'.$row['ssem'].'">'.$row['ssem'].'</option>'; 
                              } 
                            }else{ 
                                echo '<option value="">Sem not available</option>'; 
                            } 
                      ?>
                  </select>
					  </div>
          </div>
          <div class="form-group">
                  <label class="col-sm-2 control-label">Select Subject</label>
                  <div class="col-sm-8">
                    <select id="subj" class="form-control m-bot15" name="subj" required >
                      <option value="">Select Semester First</option> 
                    </select>
                    </div> 
                    </div>
                    
          <div class="form-group">
                  <label class="col-sm-2 control-label">Select Section</label>
                  <div class="col-sm-8">
                    <select id="section" class="form-control m-bot15" name="sec" required >
                      <option></option> 
                      <option value="A">A</option> 
                      <option value="B">B</option> 
                    
                    </select>
                    </div> 
                    </div>
				    <button type="submit" class="btn btn-primary" name="add-faculty">Submit</button>
                </form>
              </div>
            </section>
          
           
          

          </div>
        </div>

       
                      <!--color picker end-->

    <!--main content end-->
      <div class="text-center">
        <div class="credits">
          University College of Engineering - BIT Campus.
        </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>


</body>

</html>
