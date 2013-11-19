<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="js/script.js"></script>
<!--[if lt IE 9]>
<script src="dist/html5shiv.js"></script>
<![endif]-->
<title>Pti Drama Club</title>
</head>

<body>
    	<ul>
        	<li><a href="index.html">Home</a></li>
            <li><a href="actors.html">Actors</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="schedule.html">Schedule</a></li>
            <li><a href="history.html">History</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>

		<?php
			if (isset($_REQUEST['email']))
	//if "email" is filled out, send email
  			{
  	//send email
 				 $email = $_REQUEST['email'] ;
  				 $subject = $_REQUEST['subject'] ;
 				 $message = $_REQUEST['message'] ;
  				 mail("m.ambrose88@gmail.com", $subject,
 				 $message, "From:" . $email);
 		    	 echo "Thank you for your contacting us!";
  			}
			else
	//if "email" is not filled out, display the form
  			{
  				echo "<form method='post' action='contactus.php'>
  					  Email: <input name='email' type='text'><br>
  					  Subject: <input name='subject' type='text'><br>
  					  Message:<br>
  					  <textarea name='message' rows='15' cols='40'>
  					  </textarea><br>
					  <input type='submit'>
					  </form>";
   			}
			
		?>	

</body>
</html>
