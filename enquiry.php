














       

<?php
	if(isset($_POST['submit']))
{     

    $name = $_POST['Name']; 
    $email = $_POST['email']; 
    $message = $_POST['message'];
    
    
    $email_to = 'vishesh.tiwari2427@gmail.com';//replace with your email

    $body = 'Quoate From';
    $header = 'From:'.$email;


$msg = "Name:".$_POST['Name']."\n". 
                 "FROM:".$_POST['email']."\n".
                  "MESSAGE:".$_POST['message'];


    if(mail($email_to, $body,$msg,$header))
{

    echo '<script>alert("Your email has been send successfully.We will contact you early")</script>';
}

   else
{

echo "oops sorry ERROR";
}
    
}  
?>


















<!DOCTYPE html>
<html >

<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="shortcut icon" href="component/img/logo0.png">
    <title>Codevendor &mdash; Inhance your learning</title>
    
    <!-- Bootstrap -->

    <link href="component/css/bootstrap.min.css" rel="stylesheet">
    <link href="component/css/bootstrap.css" rel="stylesheet">

    <link href="component/css/mainstyle.css" rel="stylesheet">
    
	
    <link href="component/css/font-awesome.min.css" rel="stylesheet">
    <link href="component/css/font-awesome.css" rel="stylesheet">
	
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/component/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="component/css/style.css">
      <link href="component/css/htmlviewer.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

                 <style>	
			
			body {
				background: #7f9b4e url(component/img/21.jpg) ;				
				webkit-background-size: cover;
               -moz-background-size: cover;
               -o-background-size: cover;
                background-size: cover;
                  
          }
			 #section2
			 {
			 padding-top:10%;
			 }
		</style>

</head>
<body>
<div id="section1" >
        <div class="navbar navbar-inverse navbar-top  ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
                   <a class="navbar-brand wow flip"><img src ="component/img/logo.png" class="img-circle" class="img-responsive" style="background-color:#cccccc" width="50" height="50"> codevendor</a>
                </div>
                  <div class="collapse navbar-collapse" id="myNavbar">
                     <ul class="nav navbar-nav navbar-right">
                     <li><a href="home.html">Home</a></li>
					<li><a href="about.html">About</a></li>
                    <li><a href="htmlviewer.html">HTML live</a></li>
                    <li><a href="#">Tutorials</a>
					   <ul class="dropdown">
						            <div class="fpage">
                                <table style="float:right;background: grey;border-radius: 10px;" cellpadding="10px">
                                    <tr>
                                        <td><a href="data.html"><img src="component/img/ds.jpg" width="100" height="100"><a></td>
                                        <td><a href="html.html"><img src="component/img/HTML.png" width="100" height="100"><a></td>
                                        <td><a href="css.html"><img src="component/img/css.jpg" width="100" height="100"><a></td>
										
                                    </tr>
                                    <tr>
									     <td><a href="oos.html"><img src="component/img/oss.jpg" width="100" height="100"><a></td>
                                         <td><a href="java.html"><img src="component/img/java.jpg" width="100" height="100"><a></td>
										 <td><a href="php.html"><img src="component/img/a4.jpg" width="100" height="100"><a></td>
                                        <td></td>
                                       <td></td>
                                </table>
                            </div>
						      </ul>				
                    <li class="active"><a href="enquiry.html">Contact Us </a></li>
                    <li><a href="#">Logout</a></li>
                </div>
            </div>
        </nav>
    </div>									
				
				<div id="section2" >
					<div class="container" >						
						<div class="row" >								
							<div  >
							<div class="fh5co-hero-intro">
										<h1 align="center"><font color ="#41f495"><span><b>FEEDBACK</b></span></font></h1>
								</div>
								<form action="" method="post">
									<div class="col-md-12">
										<div class="form-group" >
											<label for="name"  class="sr-only" align="center" width="40px">Name</label>
											<input placeholder="Name" id="name" name="Name" type="text" class="form-control input-lg">
										</div>	
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="email" class="sr-only" align="center">Email</label>
											<input placeholder="Email" name="email" id="email" type="text" class="form-control input-lg">
										</div>	
									</div>
									
									<div class="col-md-12">
										<div class="form-group">
											<label for="message" class="sr-only">Message</label>
											<textarea placeholder="Message" name="message" id="message" class="form-control input-lg" rows="3"></textarea>
										</div>	
									</div>
									<div class="col-md-12">
										<div class="form-group" align="center">
											<input type="submit" name="submit" class="btn btn-primary btn-lg " value="Send" >

										</div>	
									</div>
								</form>	
							</div>							
				</div>
			</div>
	

 <div class="footer">      
	  <div class= "logo2">
	     <br><img class="img-circle" src="component/img/fb.jpg" width="30" height="30">
		  <a href="http://codevendor9.blogspot.in"><img class="img-circle" src="component/img/blog.jpg" width="30" height="30"></a>
		   <a href="https://www.youtube.com/channel/UCCRy3ob-9u_omSP_aGw82QQ"><img class="img-circle" src="component/img/youtube.jpg" width="30" height="30"></a>
		    <img class="img-circle" src="component/img/gm.jpg" width="30" height="30"></div>		 
      <div class="hr"><hr></hr></div>
		   	 
	 <div class="text2"><h5><font color="black"><b>&copy; 2018  All Rights Reserved.CodeVendor</b>
	 <font color="black"><a href="about.html"><b> About | </b></a><a href="enquiry.html"><b>Send Mail</b></a></font></h5>
	</div> </div>	 
</div>

			
	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->



    <script src="component/js/bootstrap.min.js"></script>
    <script src="component/js/jquery-3.2.1.js"></script>
    <script src="component/js/jquery.bxslider.js"></script>
	</body>
</html>
