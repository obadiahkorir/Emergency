<?php
session_start ();
include("config.php");
?>
<!DOCTYPE HTML>

<html>
  <head>
    <title>E-HELP </title>
    <link rel="stylesheet" type="text/css" href="frsc.css"/>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.minn.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  </head>
  <body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
      <div id="container"> 
            <div class="header">
                <img style="margin:0px 0px 0px 0px;float:left;" width="140" height="120"src="images/logo.png" alt="Police logo"/>
                <img style="margin:0px 0px 0px 0px;float:right;" src="images/logo.png" width="117" height="117" alt="E-HELP LOGO"/>
                <h3 class="headtext"> &nbsp;<b>THE EMEREGENCY ALERT SYSTEM</b> </h3>
                <h5 style="color:#A52A2A;text-align:right;margin:0 0px 0px 0px; font-size:22px; font-face:"><i><center>...Crime Reporting System</center></i></h5>
             <hr /></div>
             <marquee>LOGIN TO REPORT EMREGENCY INCIDENCES</marquee>
			   <ul id="saturday">
			   <li><a href="index.php" class="current"><span>Home</span></a></li>
			  <li><a href="login.php"><span>Login</span></a></li>
  <li><a href="registration.php"><span>Register</span></a></li>
  <li><a href="viewmissingcitizen.php"><span>Missing Persons</span></a></li>
  <li><a href="wanted.php"><span>Wanted Persons</span></a></li>
  <li><a href="aboutus.php"><span>About</span></a></li>
  <li><a href="econtact.php"><span>Emergency Contacts</span></a></li>
                    </ul>
            <div id="site_content">		
	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
          <h2>  <marquee alt="up">Latest Crime News</marquee></h2>
     <p>  <a href="#" title="NEWS" style="color:#708090" text-decoration="none";>Police Commissioner </a></p>			
       <p><a href="#" title="NEWS" style=color:#708090>LAMU AL-SHABAB ATTACK</a></p>			
	<p> <a href="#" title="NEWS" style=color:#708090>President Sacks Interior Minister</a></p> 
	 <p><a href="#" title="NEWS" style=color:#708090>Breaking: 2 Killed in LAMU ATTACK</a></p>			
	<p> <a href="#" title="NEWS" style=color:#708090>"LECTURERS STRIKE"- The latests</a></p> 
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>FAQs</h2>
            <p><a href="econtact.php" title="Emergency" style=color:#708090 text-decoration:none;>Emergency Numbers? <br></a>
			 <p><a href="#" title="How to" style=color:#708090 text-decoration:none;> How to report crime? <br>
			  <p><a href="#" title="Police Recruitment" style=color:#708090 text-decoration:none;>Police Recruitment?</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
	  <div class="slideshow">
	    <ul class="slideshow">
        <li class="show"><img width="700" height="350" src="images/b2.jpeg" alt="&quot;The Police commissioner&quot;" /></li>
		  <li><img width="700" height="350" src="images/p7.png" alt="&quot;Enter your caption here&quot;" /></li>
		  <li><img width="700" height="350" src="images/p4.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          <li><img width="700" height="350" src="images/p1.jpg" alt="&quot;Enter your caption here&quot;" /></li>
		  <li><img width="700" height="350" src="images/p2.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          <li><img width="700" height="350" src="images/p3.jpg" alt="&quot;Enter your caption here&quot;" /></li>
        </ul>
      </div>	  	   
	</div><!--close site_content--> 
 <?php include("footer.php");?>
</div><!--close container-->
  </body>
</html>