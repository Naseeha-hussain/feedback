<?php 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
        $id = $_SESSION['fcid'];
        $name = $_SESSION['fname'];
    } 

require_once('fcon.php');
if(isset($_POST["fc_submit"])){ 
		

        
  header("Location: faculty_login.php");
}
// if(isset($_POST["add-faculty"])){ 

// $faculty_name=$_POST['faculty-name'];
// $faculty_email=$_POST['faculty-email'];
// $faculty_mobile=$_POST['faculty-mobile'];
// $faculty_qualification=$_POST['faculty-qualification'];
// $faculty_specialization=$_POST['faculty-specialization'];
// $faculty_designation=$_POST['faculty-designation'];
// $experience=$_POST['experience'];
// $status=$_POST['status'];
// $image=$_POST['image'];
// $q=mysqli_query($confaculty,"SELECT * FROM faculty WHERE fmail='".$faculty_email."' "); 
// 	$numrows1=mysqli_num_rows($q);
	 
// 	if($numrows1>0)  
//     {  
// 	$msg="Faculty is already added with the entered email address";
// 	 echo "<script type='text/javascript'>alert('$msg');</script>"; 
// 	 //exit('Already Registered Please refresh the page and go back'); 
// 	 }
// 	//echo $messag;
//     else 
// 	{
// 	 $sql="INSERT INTO faculty(fname,fmail,fmob,fqual,fexp,specialization,pic,designation,status,date) VALUES('$faculty_name','$faculty_email','$faculty_mobile','$faculty_qualification','$experience','$faculty_specialization','$image','$faculty_designation','$status',now())";
// 	// echo $sql;
// 		$result=mysqli_query($confaculty,$sql);
// 		$msg="Faculty is already added with the entered email address";
// 	 echo "<script type='text/javascript'>alert('$msg');</script>"; 

// 	}
// 	}

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
  
  <title>View Feedback</title>

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
   <?php include 'header-fc.php';
include 'sidebar-fc.php';
 ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Faculty Data</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Faculty</li>
              <li><i class="fa fa-file-text-o"></i>Feedback</li>
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
                View Feedback
              </header>
              <div class="panel-body">
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                   
				    <th><i></i>SNo</th>
                    <th><i ></i> Subject</th>
                    <th><i ></i> Puntuality</th>
				    <th><i></i> Conceptual</th>
                    <th><i></i> Elequant</th>
				    <th><i></i> Syllabus</th>
                    <th><i></i> Approachable</th>
					<th><i></i> Grading</th>
					<th><i></i> Clarity</th>
                    <th><i></i> Feedback</th>
					<th><i></i> Advice</th>
              
                  </tr>
				  <?php 
        
						$subj=mysqli_query($confaculty,"SELECT * FROM feedback WHERE fnm='" .$name. "'"); 
						$numrows1=mysqli_num_rows($subj);						
						
 while($row=mysqli_fetch_assoc($subj))
	 {
	        $fbid = $row['fbid'];
	        $sname = $row['stnm'];
	        $sem = $row['stem'];
	        $fname = $row['fnm'];
	        $sub = $row['sub'];
	        $pun = $row['pun'];
			$con = $row['con'];
			$eleq = $row['eleq'];
			$syll = $row['syll'];
			$approach = $row['approach'];
			$grading = $row['grading'];
      $clarity=$row['clk'];
      $feedform=$row['fbf'];
      $advice=$row['adv'];	
	// $ncid = md5($id);
	 //} 
						?>
                  <tr>
				 
                    <td><?php echo  $fbid; ?></td>
                    <td><?php echo $sub; ?></td>
                    <td><?php echo $pun; ?></td>
                    <td><?php echo $con; ?></td>
                    <td><?php echo $eleq; ?></td>
					<td><?php echo $syll; ?></td>
				    <td><?php echo $approach; ?></td>
				    <td><?php echo $grading; ?></td>
					<td><?php echo $clarity; ?></td>
					<td><?php echo $feedform; ?></td>
					<td><?php echo $advice; ?></td>
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
