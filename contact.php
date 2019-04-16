<!DOCTYPE html>
<html lang="en">
<?php
	
	function sendMail($first_name,$email_from,$telephone,$comments){
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "n.nasiriyani@yahoo.com";
    $email_subject = "This is super awesome...";
	$set_email = "najmeh_na@yahoo.com";
 
   
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
	try{
$headers = 'From: '.$set_email."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);  
	}catch(Exception $e){
		echo 'This is what went wrong: '.$e.'<br>';
	}
 }
	function saveData($first_name,$email_from,$telephone,$comments){
		//echo 'Saving your data....';
		//Establishing the connection...
		include('connection.php');
		$mysqli=openDB();
		if($mysqli!=Null){
		////Establishing the connection...
		$currTime=date('Y-m-d H:i:s'); 
		//Inserintg the Data		
		$sqlAdd= "INSERT INTO contact_data (id, name, email, phone,comment, time) VALUES(Null, '$first_name', '$email_from', '$telephone','$comments', '$currTime')";
		if (!($result= $mysqli->query($sqlAdd)))
		{
			echo "There was a problem with saving your data to our system... Here is the problem: <br>";
			echo mysqli_error($mysqli);
		}
		///Inserintg the Data
		
		
		//Closing the connection...
		$mysqli->close();
		///Closing the connection...
		}
	}
	
if(isset($_POST['email'])) {
	 function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['Message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['Message']; // required
 
	sendMail($first_name,$email_from,$telephone,$comments);
	//saveData( $first_name,$email_from,$telephone,$comments);
		
 
?>
 
<!-- include your own success html here -->
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<head>
	<title>Exclusive a Personal Category Bootstrap Responsive Web Template | Home :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Exclusive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->
	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>
<body>
	<!-- header -->
		<!-- navigation -->
		<div class="main-top">
		 <header>
			<div class="container-fluid px-lg-5 ">
				<nav class="mnu mx-auto">
						  <label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop">
							<ul class="menu">
								<li class="mr-lg-4 mr-3 active"><a href="index.html">Home</a></li>
								<li class="mr-lg-4 mr-3"><a href="index.html#about" class="scroll">About Me</a></li>
								<li class="mr-lg-4 mr-3"><a href="index.html#services" class="scroll">Services</a></li>
								 <li class="mr-lg-4 mr-3"><a href="index.html#work" class="scroll">My Work</a></li>
								<li><a href="index.html#contact" class="scroll">Contact Me</a></li>
							</ul>
						</nav>
			</div>
		</header>
		</div>
		<!-- //navigation-->
	<section class="banner-bottom" id="about">
		<div class="container">
            <div class="inner-sec">
                <div class="row middle-grids">
                    <div class="col-lg-4 advantage-grid-info1">
                        <div class="advantage_left1 text-center">
                            <img src="images/g3.jpg" class="img-fluid" alt="">
                        </div>
                    </div> 
					 <div class="col-lg-8 advantage-grid-info">
                        <div class="advantage_left">
                            
                             <p class="mt-4">Thank you for your message...</p>
</div>
                    </div>
                </div>
            </div>
		</div>
    </section>

	</body>
<?php
 
}
?>

</body>
</html>