<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	 
	require_once('./admin/fcon.php');
	if(isset($_POST["submit"])){ 
		$reg = $_POST['reg'];
		$name = $_POST['name'];

		$t = "SELECT * FROM student WHERE sreg ='" . $reg . "'";
        $student = mysqli_query($confaculty, $t);
        $numrow = mysqli_num_rows($student);
		if($numrow==0){
			echo "<script type='text/javascript'>alert('No such student exists');</script>";
		}
		while ($row = mysqli_fetch_assoc($student)) {
            $sname = $row['sname'];
			if($sname==$name){
				$_SESSION["sname"] = $_POST['name'];
				$_SESSION["sreg"] = $_POST['reg'];
				//header("location: admin/header-st.php")
				header("location: admin/choose-faculty.php");
			}
			else{
				echo "<script type='text/javascript'>alert('Please Enter the correct details');</script>";
			}
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
<title>Faculty Feedback System </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta property="og:image" content="images/faculty-feedback">
<meta name="keywords" content="Faculty feedbackback, faculty feedback system in php mysql, free download faculty feedback system, faculty feedback management system " />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<!-- css files -->
<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<!-- //css files -->

<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->

</head>
<!-- body starts -->
<body>
<!-- section -->
<section class="register">
	<div class="register-full">
		<div class="register-left">
			<div class="register">
				<div class="logo">
					<a href="#"><span class="fa fa-graduation-cap" aria-hidden="true"></span></a>
				</div>
				<h1>Faculty Feedback System</h1>
				<p>Please enter your name and email address to enter the fedback of your concerned faculty. Entering your name and email address , will not be visible to the feedback panel as it is not needed to know who gave the feedback. The feedback is important. <br>
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
</script><br></p>
				<div class="content3">
					<ul>
						<li><a class="" href="https://noidatut.com/"> Know More</a></li>
						<li><a class="read" href="https://noidatut.com/st-subject-list.php"> Study Resources</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="register-right">
			<div class="register-in">
				<h2><span class="fa fa-pencil"></span> Students Login</h2>
				<div class="register-form">
					<form action="#" method="post">
						<div class="fields-grid">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" required=""> 
								<label>Enter Full Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="reg" required="">
								<label>Register Number</label>
								<span></span>
							</div>
						
						
													<div class="clear"> </div>
							 </div>
						<input type="submit" value="Proceed" name="submit">
					</form>
				</div>
			</div>
			<div class="clear"> </div>

		</div>
		
		<span class="agile-copyright">Faculty Login <a href="./admin/faculty_login.php"> Click Here</a></span>
       
	<div class="clear"> </div>
				
	</div>

	<!-- copyright -->
	<p class="agile-copyright">University College of Engineering ,BIT campus</p>
	<!-- //copyright -->
</section>
<!-- //section -->
</body>	
<!-- //body ends -->
</html>