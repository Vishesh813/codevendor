﻿<?php


session_start();

 if (isset($_SESSION['username'])) 
   {
     header('location:home.php');
   }



?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="component/img/logo.png">
    <title>Codevendor &mdash; Inhance your learning</title>

    <!-- Bootstrap -->
    <link href="component/css/bootstrap.css" rel="stylesheet">
    <link href="component/css/mainstyle.css" rel="stylesheet">
    <link href="component/css/font-awesome.min.css" rel="stylesheet">
    <link href="component/css/font-awesome.css" rel="stylesheet">
    <link href="component/css/login.css" rel="stylesheet">
    <style>
	 body {
            background:  url(component/img/16.jpg) no-repeat center top;
            background-size: cover;
			
        }		
    </style>
</head>

<body>
<!--
 <div>
<video autoplay muted loop id="myVideo">
  <source src="component/img/bg4.mp4" alt="component/img/16.jpg" type="video/mp4">
</video> 
</div>
-->
    <div id="section3">
        <div class="navbar navbar-inverse navbar-fixed-top">
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
                        <li><a href="login.php">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
   <!--  <h1 align="center">
        <font color=" blue" >Apprise education, Reprise innovation </font>
    </h1>  -->
<!------login form ends---->
<div class="container">
<div class="row">
		                        <div class="col-sm-5">
		                        <div class="box1">	
		                        	<div class="loginbox">
			                        	<div class="form-top">
			                        		<div class="form-top-left">
			                        			<h3 align="center" >Login to our site</h3>
			                            		<p>Enter username and password to log on:</p>
			                        		</div>
			                        		<div class="form-top-right">
			                        			<i class="fa fa-lock"></i>
			                        		</div>
			                            </div>
										
			                            <div class="form-bottom">
						                    <form role="form" action="login1.php" method="post" class="login-form">
						                    	<div class="form-group">
						                        	<label class="sr-only" for="form-email">Email</label>
						                        	<input name="email" type="email"  placeholder="Email..." class="form-email form-control" id="form-email"required/>
						                        </div>
						                        <div class="form-group">
						                        	<label class="sr-only" for="form-password">Password</label>
						                        	<input name="password" type="password"  placeholder="Password..." class="form-password form-control" id="form-password"required/>
						                        </div>
						                        <button name ="login_btn"type="submit" class="btn">Sign in!</button>
						                    </form>
					                    </div>
				                    </div>
									<br>
						        <a href="forgot.php">forgot password?</a>	
						
								
									

				                <!------login form ends----->
								

	</div>			                        
		                        </div>
		                        <!------ social login ends----->
		                        <div class="col-sm-1 middle-border"></div>
		                        <div class="col-sm-1"></div>
		                        	
		                        <div class="col-sm-5">
		                        	
									
									<!------sign up form start form ---->
									<div class="box1">
		                        	<div class="form-box">
		                        		<div class="form-top">
			                        		<div class="form-top-left">
			                        			<h3 align="center">Sign up now</h3>
			                            		<p>Fill in the details below to get access:</p>
			                        		</div>
			                        		<div class="form-top-right">
			                        			<i class="fa fa-pencil"></i>
			                        		</div>
			                            </div>
			                            <div class="form-bottom">
						                    <form role="form" action="signup1.php" method="post" class="registration-form">
						                    	<div class="form-group">
						                    		<label class="sr-only" for="form-first-name">User name</label>
						                        	<input  name="username" type="text"  placeholder="User name..." class="form-first-name form-control" id="form-first-name"required/>
						                        </div>
						      
						                        <div class="form-group">
						                        	<label class="sr-only" for="form-email">Email</label>
						                        	<input name="email" type="email"  placeholder="Email..." class="form-email form-control" id="form-email"required/>
						                        </div>
												
												 <div class="form-group">
						                        	<label class="sr-only" for="form-password">Password</label>
						                        	<input name="password" type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password"required/>
						                        </div>
												
												 <div class="form-group">
						                        	<label class="sr-only" for="form-password">Confirm Password</label>
						                        	<input name="cpassword" type="password" name="form-password" placeholder="Confirm Password..." class="form-password form-control" id="form-password"required/>
						                        </div>
												
						                        <div class="form-group">
						                        	<label class="sr-only" for="form-about-yourself">About yourself</label>
						                        	<textarea name="details" placeholder="Please fill detail about yourself" 
						                            class="form-about-yourself form-control" id="form-about-yourself"required/></textarea>
						                        </div>
						                        <button name="submit" type="submit" class="btn" align="center">Sign up!</button>
						                    </form>	                                     									   
					                    </div>
		                        	</div>
		                        	
		                        </div>
		                    </div>

</div>
</div>


  <footer id="footer" class="midnight-blue">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            &copy; 2018 <a target="_blank" href="#" title="#">Codevendor</a>. All Rights Reserved.
                        </div>
                        <div class="col-sm-6">

                            <ul class="pull-right">
                                <img class="img-circle" src="component/img/fb.jpg" width="30" height="30">
                        <a href="http://codevendor9.blogspot.in"><img class="img-circle" src="component/img/blog.jpg" width="30" height="30"></a>
                        <a href="https://www.youtube.com/channel/UCCRy3ob-9u_omSP_aGw82QQ"><img class="img-circle" src="component/img/youtube.jpg" width="30" height="30"></a>
                        <img class="img-circle" src="component/img/gm.jpg" width="30" height="30">
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="component/js/parallax.min.js"></script>
    <script src="component/js/bootstrap.min.js"></script>
    <script src="component/js/jquery-3.2.1.js"></script>
    <script src="component/js/particles.js"></script>
    <script src="component/js/app.js"></script>
    <script>
        //   $('#myCarousel').on("slide.bs.carousel", function(){
        //     $(".carousel-control",this).css('top',($(".active img",this).height()*0.46)+'px');
        //     $(this).off("slide.bs.carousel");
        //});
    </script>



    <!-- Include all compiled plugins (below), or include individual files as needed -->

</body>

</html>