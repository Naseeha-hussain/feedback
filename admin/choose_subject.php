<?php
require_once('fcon.php'); 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
                     $t="SELECT sfaculty from subject WHERE sname='" . $_SESSION["subj"] . "' && sec='".$_SESSION["sec"]."' ";
                      $faculty = mysqli_query($confaculty, $t);
                      //$numrows1 = mysqli_num_rows($subject_code);

                      while ($row = mysqli_fetch_assoc($faculty)) {
                        $fname = $row['sfaculty'];}
                        // $ncid = md5($id);
                    
		//$faculnm = $_SESSION["facultynm"];
    //$_SESSION["facultynm"];
	} 
	
//$uid = $_SESSION["userid"] ;

if(isset($_POST["add-faculty"])){ 

$faculty_name=$_POST['faculty-name'];
$_SESSION["facultynm"] = $_POST['faculty-name'];
//header("location: choose_subject.php");

}
if(isset($_POST["feedback"])){ 

  $stnm = $_SESSION['sname'];
  $stem = $_SESSION['sreg'];
  $batch = $_SESSION['batch'];
  $sem = $_SESSION['sem'];
	$subj=$_SESSION['subj'];
	$sec=$_SESSION['sec'];
  
  $faculty=$fname;
	$punctuality=$_POST['punctuality'];
	$conceptual=$_POST['conceptual'];
	$elequant=$_POST['elequant'];
	$syllabus=$_POST['syllabus'];
	$approachable=$_POST['approachable'];
	$grading=$_POST['grading'];
  $clarity=$_POST['clarity'];
  $feedform=$_POST['feedform'];
  $advice=$_POST['advice'];
	//$feedback=$_POST['feedback'];
	$sql="INSERT INTO feedback(batch,sem,sec,stnm,stem,fnm,sub,pun,con,eleq,syll,approach,grading,clk,fbf,adv,date) VALUES('$batch','$sem','$sec','$stnm','$stem','$faculty','$subj',$punctuality,$conceptual,$elequant,$syllabus,$approachable,$grading,$clarity,$feedform,$advice,now())";
	$result=mysqli_query($confaculty,$sql);
		$_SESSION["success"] = "Thank You for your valuable time " ;			
			header("location: ./choose-faculty.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enter Feedback in Faculty Feedback section php mysql</title>

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
   <?php
   include 'header-st.php';
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
              <li><i class="fa fa-file-text-o"></i>Choose Subject</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Enter Feedback
              </header>
              <form class="form-horizontal " enctype="multipart/form-data" method="post">
                <div class="form-group">
                <table class="table table-advance table-hover" style="width:50%">
                <div class="col-sm-1 control-label"></div>
                <p>Marking Scheme</p>
                <div class="col-sm-1 control-label"></div>
                  <tr>
                  <th><i>Mark</i></th>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  </tr>
                    <tr>
                      <th><i>values</i></th>
                      <td>Very poor</td>
                      <td>Poor</td>
                      <td>Average</td>
                      <td>Good</td>
                      <td>Excellent</td>
                    </tr>
                      </table>
                  </div>
                <div class="form-group">
                     <label class="col-sm-2 control-label">Faculty</label>
                      <div class="col-sm-5" style="padding: 7px;">
                        <?php echo $fname?>                  
                      </div>
                  </div>   
             
				     <div class="form-group">
                    <label class="col-sm-2 control-label">Syllabus coverage</label>
                    <div class="col-sm-10">
                    <p class="help-block">Has the teacher covered entire syllabus?</p>
                     <input type="radio" name="punctuality" value="1" style="margin-right:10px; margin-left:10px" required>Very poor
                    <input type="radio" name="punctuality" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="punctuality" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="punctuality" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="punctuality" value="5" style="margin-right:10px; margin-left:10px">Excellent
                    </div>
                  </div>
				    <div class="form-group">
                    <label class="col-sm-2 control-label">Extra information </label>
                    <div class="col-sm-10">
                    <p class="help-block">Has the staff covered relevent topic beyond syllabus?</p>
                      <input type="radio" name="conceptual" value="1" style="margin-right:10px; margin-left:10px" required>Very poor
                    <input type="radio" name="conceptual" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="conceptual" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="conceptual" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="conceptual" value="5" style="margin-right:10px; margin-left:10px">Excellent
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label">Effectiveness</label>
                    <div class="col-sm-10">
                      <p class="help-block">Effectiveness of staff in terms of:</p>
                    <p class="help-block">(a)Technical content (b)Communication skills (c)Use of Teaching aids.</p>
                     <input type="radio" name="elequant" value="1" style="margin-right:10px; margin-left:10px" required>Very poor
                    <input type="radio" name="elequant" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="elequant" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="elequant" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="elequant" value="5" style="margin-right:10px; margin-left:10px">Excellent

                    </div>
                  </div>
				   <div class="form-group">
                    <label class="col-sm-2 control-label">Course content </label>
                    <div class="col-sm-10">
                    <p class="help-block">Pace on which contents were covered.</p>
                    <input type="radio" name="syllabus" value="1" style="margin-right:10px; margin-left:10px" required>Very poor
                    <input type="radio" name="syllabus" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="syllabus" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="syllabus" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="syllabus" value="5" style="margin-right:10px; margin-left:10px">Excellent

                    </div>
                  </div>
                  <div class="form-group">
             <label class="col-sm-2 control-label">Motivation</label>
                    <div class="col-sm-10">
                    <p class="help-block">Motivation and inspiration for students to learn?</p>
                     <input type="radio" name="approachable" value="1" style="margin-right:10px; margin-left:10px" required>Very poor
                    <input type="radio" name="approachable" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="approachable" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="approachable" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="approachable" value="5" style="margin-right:10px; margin-left:10px">Excellent

                    </div>
                  </div>
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Practical Knowledge</label>
                    <div class="col-sm-10">
                      <p class="help-block">Support for thr development of the student skill</p>
                    <p class="help-block">(a) Practical Demonstration (b)Hands on training.</p>
                     <input type="radio" name="grading" value="1" style="margin-right:10px; margin-left:10px" required>Very poor
                    <input type="radio" name="grading" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="grading" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="grading" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="grading" value="5" style="margin-right:10px; margin-left:10px">Excellent</option>
                    
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Clarity</label>
                    <div class="col-sm-10">
                    <p class="help-block">Clarity of expectation of students?</p>
                     <input type="radio" name="clarity" value="1" style="margin-right:10px; margin-left:10px" required>Very poor
                    <input type="radio" name="clarity" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="clarity" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="clarity" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="clarity" value="5" style="margin-right:10px; margin-left:10px">Excellent

                    </div>
                  </div>
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Feedback</label>
                    <div class="col-sm-10">
                    <p class="help-block">Feedback provided on students.</p>
                     <input type="radio" name="feedform" value="1" style="margin-right:10px; margin-left:10px" required>Very poor
                    <input type="radio" name="feedform" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="feedform" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="feedform" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="feedform" value="5" style="margin-right:10px; margin-left:10px">Excellent

                    </div>
                  </div>
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Helping</label>
                    <div class="col-sm-10">
                    <p class="help-block">Willingness to offer help and advice to students?</p>
                    <input type="radio" name="advice" value="1" style="margin-right:10px; margin-left:10px" required>Very poor
                    <input type="radio" name="advice" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="advice" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="advice" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="advice" value="5" style="margin-right:10px; margin-left:10px">Excellent

                      </div>
                  </div>
				  
				 <!-- <div class="form-group">
                    <label class="col-sm-2 control-label"><img src="captcha1.php"></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="vercode">
                      <span class="help-block">Enter the Code in the box to continue .( To let us know you are not a robot)</span>
                    </div>
                  </div>  -->
            <div class="form-group">
            <div class="col-sm-10" style="margin:10px;">
				    <button type="submit" class="btn btn-primary" name="feedback">Submit</button>
            </div>
            </div>
            </form>
            </div>
            </section>
          
           
          

          </div>
        </div>

       
                      <!--color picker end-->

    
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
