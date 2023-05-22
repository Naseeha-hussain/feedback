<?php 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
        
        $reg=$_SESSION['sreg'];  
    } 
if (isset($_SESSION["success"])) {
     $msg="Feedback Submitted,Thank You";
					 echo "<script type='text/javascript'>alert('$msg');</script>";
					  unset($_SESSION['success']);
    }
require_once('fcon.php');

  //  $d="SELECT DISTINCT ssec FROM Subject";
  //  $sec= mysqli_query($confaculty, $d);
      
    

// if(isset($_POST["add-faculty"])){ 
// $faculty_name=$_POST['faculty'];
// $_SESSION["facultynm"] = $faculty_name;
// 	//$msg="Faculty Updated";
// header("location: choose_subject.php");
// }
if (isset($_POST["add-faculty"])) {

  $_SESSION['batch'] = $_POST['batch'];
  
  $_SESSION['dept'] = $_POST['dept'];
  $_SESSION['subj'] = $_POST['subj'];
  $_SESSION['sem'] = $_POST['sem'];
  
  $_SESSION['sem'] = $_POST['sec'];
  $sem = $_POST['sem'];
  $sec=$_POST['sec'];
  $_SESSION['sem'] = $sem;
  $_SESSION['sec'] = $sec;
   

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
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script type="text/javascript">

  $(document).ready(function(){
    $('#semno').on('change', function(){
        var SemID = $(this).val();
        if(SemID){
            $.ajax({
                type:'POST',
                url:'./ajaxData.php',
                data:'ssem='+SemID,
                success:function(html){
                    $('#subj').html(html);
                    $('#faculty').html('<option value="">Select sem first</option>'); 
                }
            }); 
        }
        else
        {
            $('#subj').html('<option value="">Select Semester first</option>');
            $('#faculty').html('<option value="">Select Dept first</option>'); 
        }
    });

});


    // $('#dept').on('change', function(){
    //     var DeptID = $(this).val();
    //     if(DeptID){
    //         $.ajax({
    //             type:'POST',
    //             url:'./ajaxData.php',
    //             data:'dept='+DeptID,
    //             success:function(html){
    //                 $('#subj').html(html);
    //                 $('#faculty').html('<option value="">Select subject first</option>'); 
    //             }
    //         }); 
    //     }else{
    //         $('#subj').html('<option value="">Select Dept first</option>');
    //         $('#faculty').html('<option value="">Select Subject first</option>'); 
    //     }
    // });

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
                      <?php
                         if(strpos($reg,'0019',2)!=false){
                                $batch="2019-2023";
                             }
                             else if(strpos($reg,'0020',2)!=false){
                                $batch="2020-2024";
                             }
                             else if(strpos($reg,'0021',2)!=false){
                                $batch="2021-2025";
                             }
                             else if(strpos($reg,'0022',2)!=false){
                                $batch="2022-2026";
                             }
                             else if(strpos($reg,'0023',2)!=false){
                                $batch="2023-2027";
                             }
                             
                             ?>
                             <div class="col-sm-5" style="padding: 7px;">
                        <?php echo $batch?>                  
                      </div>
                      </div>
</div> 
                      <?php
                           if(strpos($reg,'103',5)!=false || strpos($reg,'126',5)!=false){
                                $dep="CIVIL";
                             }
                             else if(strpos($reg,'104',5)!=false){
                                $dep="CSE";
                             }
                             else if(strpos($reg,'105',5)!=false){
                                $dep="EEE";
                             }
                             
                             else if(strpos($reg,'205',5)!=false){
                                $dep="IT";
                             }
                             
                             else if(strpos($reg,'106',5)!=false){
                                $dep="ECE";
                             }
                             else if(strpos($reg,'114',5)!=false){
                                $dep="Mech";
                             }
                             else if(strpos($reg,'214',5)!=false){
                                $dep="Bio-Tech";
                             }
                             else if(strpos($reg,'219',5)!=false){
                                $dep="Petro";
                             }
                             else if(strpos($reg,'237',5)!=false){
                                $dep="Pharma";
                             }

           $t = "SELECT DISTINCT ssem FROM Subject WHERE dept ='" .$dep. "' && batch='" .$batch. "' "; 
          $sem = mysqli_query($confaculty, $t);
          ?>
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
          
          <!-- <div class="form-group">
                  <label class="col-sm-2 control-label">Select Dept</label>
                  <div class="col-sm-8">
                    <select id="dept" class="form-control m-bot15" name="dept" required >
                      <option value="">Select Dept</option> 
                       <?php 
                            // if($dept->num_rows > 0){ 
                            //   while($row = $dept->fetch_assoc()){  
                            //         echo '<option value="'.$row['dept'].'">'.$row['dept'].'</option>'; 
                            //   } 
                            // }else{ 
                            //     echo '<option value="">Dept not available</option>'; 
                            // } 
                      ?>
                    </select>
                    </div> 
                    </div> -->

          <div class="form-group">
                  <label class="col-sm-2 control-label">Select Subject</label>
                  <div class="col-sm-8">
                    <select id="subj" class="form-control m-bot15" name="subj" required >
                      <option value="">Select sem First</option> 
                    </select>
                    </div> 
                    </div>

          <div class="form-group">
                  <label class="col-sm-2 control-label">Select Section</label>
                  <div class="col-sm-8">
                    <select id="section" class="form-control m-bot15" name="sec" required >
                       <!-- <option value="">Select Sec</option>
                        <option></option> -->
                        <option></option>
                        <option>A</option>
                       <option>B</option>
                       <option>TM</option>
                    
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
