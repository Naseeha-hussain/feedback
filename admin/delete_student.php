<?php 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require_once('fcon.php');
if (isset($_GET['fc']))
{
 $s_code=$_GET["fc"];
 }
 else 
 {
 header("location: view-student.php");
 }
   //extract
						$subject_code=mysqli_query($confaculty,"SELECT * FROM student  WHERE sid =" .$s_code); 
						// $question=mysqli_query($con,"SELECT * FROM ".$s_code. " WHERE c_id =" .$q_code);
						$numrows1=mysqli_num_rows($subject_code);	
						if($numrows1<1)  
    {  
	header("location: view-faculty.php"); 
	}						
if(isset($_POST["add-student"])){ 
//$facul=$_POST['facul'];
//DELETE FROM subject WHERE sid = ' $s_code';
$sql1 = "DELETE FROM student WHERE sid = ' $s_code'";
//echo $sql1;
$result=mysqli_query($confaculty,$sql1);
$msg="Student Deleted";
	 echo "<script type='text/javascript'>alert('$msg');</script>"; 

	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Delete Student</title>

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
              <li><i class="fa fa-file-text-o"></i>Subject List</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                View student
              </header>
			   <form class="form-horizontal " enctype="multipart/form-data" method="post">
              <div class="panel-body">
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                   
				             <th><i class="icon_profile"></i>Student Name</th>
                    <th><i class="icon_mail_alt"></i>  Email</th>
					          <th><i class="icon_mobile"></i> Reg no</th>
                    <th><i class="icon_pin_alt"></i>Batch</th>
					          <th><i class="icon_pin_alt"></i>Semester </th>
                    <th><i class="icon_calendar"></i> Section</th>
					          <th><i class="icon_cogs"></i> Delete</th>
                  </tr>
				  <?php
				  // $sub=mysqli_query($confaculty,"SELECT * FROM subject  WHERE sid =" .$s_code); 
				 //$subject_code=mysqli_query($confaculty,"SELECT * FROM faculty  WHERE fid =" .$s_code); 
						$subj=mysqli_query($confaculty,"SELECT * FROM student  WHERE sid =" .$s_code); 
						$numrows1=mysqli_num_rows($subj);						
						
 while($row=mysqli_fetch_assoc($subj))
	 {
         $s_name=$row['sname'];
		     $s_reg = $row['sreg'];
         $s_batch = $row['sbatch'];
        $s_sem=$row['ssem'];
	      $s_sec=$row['ssec'];
       
	//  $fid = $row['fid'];
	// 	 $fnm = $row['fname'];
	// 	  $fmail = $row['fmail'];
	// 	   $fmob = $row['fmob'];
	// 	    $fd = $row['designation'];
	// 		$fs = $row['status'];
			
	// $ncid = md5($id);
	 //} 
						?>
                  <tr>
                    
                    <td><?php echo $s_name; ?></td>
                    <td><?php echo $s_reg; ?></td>
                    <td><?php echo $s_batch; ?></td>
				            <td><?php echo $s_sem; ?></td>
                    <td><?php echo $s_sec; ?></td>
				    
					 <td>
                   
                    
                       
                         <button type="submit" class="btn btn-danger" name="add-student">Delete</button>
                    
                    </td>
                  </tr>
                 
                
                 <?php } ?>
              
                </tbody>
              </table>
            </section>
          
          </form> 
          

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
