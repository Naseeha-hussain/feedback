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
$student_batch=$_POST['student-batch'];
$student_sem=$_POST['student-sem'];
$student_sec=$_POST['student-sec'];

// $faculty_designation=$_POST['faculty-designation'];
// $experience=$_POST['experience'];
// $status=$_POST['status'];
// $image=$_POST['image'];
$q=mysqli_query($confaculty,"SELECT * FROM student WHERE smail='".$student_email."' "); 
	$numrows1=mysqli_num_rows($q);
	 
	if($numrows1>0)  
    {  
	$msg="Student is already added with the entered email address";
	 echo "<script type='text/javascript'>alert('$msg');</script>"; 
	 //exit('Already Registered Please refresh the page and go back'); 
	 }
	//echo $messag;
    else 
	{
	 $sql="INSERT INTO student(sname,smail,sreg,sbatch,ssem,ssec) VALUES('$student_name','$student_email','$student_reg','$student_batch','$student_sem','$student_sec')";
	// echo $sql;
		$result=mysqli_query($confaculty,$sql);
		$msg="Faculty is already added with the entered email address";
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
  <meta property="og:image" content="http://noidatut.com/dashboard/noida-tut-fav.JPG">

  <title>Student List </title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Student Data</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Admin</li>
              <li><i class="fa fa-file-text-o"></i>Add Student</li>
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
                View student
              </header>
              <div class="panel-body">
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
				              <th><i class="icon_profile"></i> Full Name</th>
                      <th><i class="icon_mail_alt"></i> Email</th>
					            <th><i class="icon_mobile"></i> Regno</th>
					            <th><i class="icon_pin_alt"></i> Batch</th>
					            <th><i class="icon_pin_alt"></i> semester</th>  
                      <th><i class="icon_pin_alt"></i>Section</th>             
					            <th><i class="icon_cogs"></i> Delete</th>
                  </tr>
				  <?php 
						$subject_code=mysqli_query($confaculty,"SELECT * FROM student"); 
						$numrows1=mysqli_num_rows($subject_code);						
						
 while($row=mysqli_fetch_assoc($subject_code))
	 {    
         $s_code = $row['sid'];
        $s_name=$row['sname'];
        $s_email = $row['smail'];
		   $s_reg = $row['sreg'];
        $s_batch = $row['sbatch'];
        $s_sem=$row['ssem'];
	      $s_sec=$row['ssec'];
        
						?>
                  <tr>
                    <td><?php echo $s_name; ?></td>
                    <td><?php echo $s_email; ?></td>
                    <td><?php echo $s_reg; ?></td>
                    <td><?php echo $s_batch; ?></td>
					          <td><?php echo $s_sem; ?>
                    </td><td><?php echo $s_sec; ?></td>
					          
					 <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" href="delete_student.php?fc=<?php echo $s_code; ?>"><i class="icon_close_alt2"></i></a>
                       
                        
                      </div>
                    </td>
                  </tr>
                 
                
                 <?php } ?>
              
                </tbody>
              </table>
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
            </section>
          
           
          

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
