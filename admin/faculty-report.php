<?php 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
        $name = $_SESSION['fname'];
        $batch = $_SESSION['batch'];
        $dept = $_SESSION['dept'];
        $semno = $_SESSION['semno'];
        $numrows1=0;
        $stotal=0;
        $spun=0;
        $datapoints=array(array());
        
    } 

require_once('fcon.php');
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
   <title>Report Generation</title>

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
              <li><i class="fa fa-file-text-o"></i>Report Generation</li>
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
                Report
              </header>
              <div class="panel-body">
                <form name="report"  method="POST">
                <h3><center>UNIVERSITY COLLEGE OF ENGINEERING-BIT CAMPUS</center></h3>
                <h4><center>Faculty REPORT</center></h4>
                <ul>
            <li>Name of the Staff : <?php echo  $name; ?></li>
            <li>Dept of the staff: <?php echo  $dept; ?></li>
            <li>Batch: <?php echo  $batch;?></li>
            <li>Semester: <?php echo  $semno;?></li>
              <?php $feed=mysqli_query($confaculty,"SELECT * FROM feedback WHERE fnm='" .$name. "' && sem='" .$semno."' && batch='" .$batch."'"); 
              $numrows1=mysqli_num_rows($feed);	
              $stotal=0;
              while($row=mysqli_fetch_assoc($feed)){
	        $fbid = $row['fbid'];
	        $sname = $row['stnm'];
	        $sem = $row['stem'];
	        $fname = $row['fnm'];
	        $sub = $row['sub'];
	        $pun = $row['pun'];
          $spun +=$pun;
			$con = $row['con'];
			$eleq = $row['eleq'];
			$syll = $row['syll'];
			$approach = $row['approach'];
			$grading = $row['grading'];
      $clarity=$row['clk'];
      $feedform=$row['fbf'];
      $advice=$row['adv'];
      $total = $pun+$con+$eleq+$syll+$approach+$grading+$clarity+$feedform+$advice;	
      $stotal +=$total;
   }
   $stotal=$stotal/$numrows1;
   $spun = $spun/$numrows1;
   $datapoints = array(array("y"=>$total,"label"=>"total"),array("y"=>$stotal,"label"=>"Average"),array("y"=>$con,"label"=>"Concept"));

            ?>				
            <li>Subject = <?php echo $sub?></li>	
            <li>No of Feedback = <?php echo $numrows1?></li>
            <li>Average(/45) = <?php echo $stotal?></li>
  </ul>
  </form>
  <a href="../TCPDF-main/generatepdf.php"><input class="btn btn-primary" name="submitpdf" value="Download PDF"></a>


  <div id ="chartContainer" style="height:370px ;width: 100%;"></div>
  <script>
    window.onload = function(){
      var chart = new CanvasJS.Chart("chartContainer",{
        animationEnabled:true,
        title:{
          text:"FeedBack Analysis"
        },
        axisY:{
          title:"Questions",
          includeZero:true,
        },
        data:[{
          type:"bar",
          indexLabelPlacement: "inside",
          indexLabelFontWeight: "bolder",
          indexLabelFontColor: "White",
          dataPoints:
          <?php echo json_encode($datapoints,JSON_NUMERIC_CHECK);?>
        }]
      });
      chart.render();
    } 
  </script>
  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

              <!-- <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                   
				    <th><i class="icon_profile"></i> Subject Name</th>
                    <th><i class="icon_calendar"></i> Subject Code</th>
                    <th><i class="icon_mail_alt"></i> Semester</th>
					<th><i class="icon_mobile"></i> year</th>
                    <th><i class="icon_pin_alt"></i> Faculty</th>
					<th><i class="icon_pin_alt"></i> Allot Faculty</th>
                    <th><i class="icon_cogs"></i> Edit Subject</th>
					 <th><i class="icon_cogs"></i> Delete Subject</th>
                  </tr>
              
                </tbody>
              </table> -->
			  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
