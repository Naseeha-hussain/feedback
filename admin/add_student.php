<?php 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

require_once('fcon.php');
if(isset($_POST["add-student"])){ 

$student_name=$_POST['student-name'];
$student_email=$_POST['student-email'];
$student_reg=$_POST['student-reg'];
$student_dob=$_POST['student-dob'];
$student_batch=$_POST['student-batch'];
$student_sem=$_POST['student-sem'];

if(strlen($student_name)>=3){}
    
$q=mysqli_query($confaculty,"SELECT * FROM student WHERE smail='".$student_email."' "); 
	$numrows1=mysqli_num_rows($q);
	 
	if($numrows1>0)  
    {  
	$msg="student is already added with the entered email address";
	 echo "<script type='text/javascript'>alert('$msg');</script>"; 
	 //exit('Already Registered Please refresh the page and go back'); 
	 }
	//echo $messag;
    else 
	{
         $sql="INSERT INTO student(sname,smail,sreg,sdob,sbatch,ssem) VALUES('$student_name','$student_email','$student_reg','$student_dob','$student_batch','$student_sem')";
	// echo $sql;
		//$target = "images/".basename($image);
		//$tar = basename($image);
		//$check = getimagesize($_FILES["image"]["tmp_name"]);
		 $ext = pathinfo($target, PATHINFO_EXTENSION);
	$d = "png";
	 $e = "jpeg";
	 $f = "jpg";
	
	// echo $ext;
	 if  ( $ext == $e or $ext == $f or $ext == $d  )
	 {
		move_uploaded_file($_FILES['image']['tmp_name'], $target);
		}
		$result=mysqli_query($confaculty,$sql);
		$msg="student Added";
	 echo "<script type='text/javascript'>alert('$msg');</script>"; 

	}
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <title>Add student in Faculty Feedback section php mysql</title>

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

 
</head>

<body>

  <!-- container section start -->
  <section id="container" class="">
   <?php include 'header.php';
include 'sidebar.php';
 ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> student Data</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Admin</li>
              <li><i class="fa fa-file-text-o"></i>Add student</li>
            </ol>
          </div>
        </div>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsivenoida -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5139634720777851"
     data-ad-slot="2364206017"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><br>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Add Student
              </header>
              <div class="panel-body">
                <form class="form-horizontal " enctype="multipart/form-data" method="post">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Full Name </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="student-name" required>
                    </div>
                  </div>
				   
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Student Email </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="student-email" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Register number </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="student-reg">
                    </div>
                  </div>
                
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Date of birth</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="student-dob">
                    </div>
                  </div>
				    
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Batch </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="student-batch">
                    </div>
                  </div>
				   
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Semester </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="student-sem">
                    </div>
                  </div>
				   
                  <!-- <div class="form-group">
                    <label class="col-sm-2 control-label">Experience in Years </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="experience">
                    </div>
                  </div>
				   <div class="form-group">
                    <label class="col-sm-2 control-label">Status </label>
                    <div class="col-sm-10">
                      <select class="form-control m-bot15" name="status">
                                              <option>Active</option>
                                              <option>Deactive</option>
-->
                                          </select> 
                    </div>
                  </div>
				   <!-- <div class="form-group">
                    <label class="col-sm-2 control-label"><img src="captcha1.php"></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="vercode">
                      <span class="help-block">Enter the Code in the box to continue .( To let us know you are not a robot)</span>
                    </div>
                  </div> -->
				    <button type="submit" class="btn btn-primary" name="add-student">Submit</button>
                </form>
              </div>
            </section>
          
           <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsivenoida -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5139634720777851"
     data-ad-slot="2364206017"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><br>
          

          </div>
        </div>

       
                      <!--color picker end-->

    <!--main content end-->
     <?php include 'footer.php';

 ?>
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
