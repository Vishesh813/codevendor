﻿<?php
session_start();

 ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="shortcut icon" href="component/img/logo0.png">
        <title>Codevendor &mdash; Inhance your learning</title>

        <!-- Bootstrap -->
        <link href="component/css/bootstrap.css" rel="stylesheet">
        <link href="component/css/mainstyle.css" rel="stylesheet">
        <link href="component/css/font-awesome.min.css" rel="stylesheet">
        <link href="component/css/font-awesome.css" rel="stylesheet">
        <style>
        
  
        
        
          
        
        
        </style>
        

    </head>

    <body>
        <div class="navbar navbar-inverse navbar-top">
            <div class="container-fluid">
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <a class="navbar-brand wow flip"><img src ="component/img/logo0.png" class="img-circle" class="img-responsive" style="background-color:#cccccc" width="50" height="50"> codevendor</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                     <ul class="nav navbar-nav navbar-right">
                     <li class="active"><a href="home.html">Home</a></li>
					
                    
                    <li><a href="#">Tutorials</a>
					    <ul class="dropdown">
						            <div class="fpage">
                                <table style="float:right;background:gray;border-radius: 10px;" cellpadding="10px">
                                    <tr>
                                        <td><a href="data.html"><img class="img-circle" src="component/img/ds.jpg" width="100" height="100"></a></td>
                                        <td><a href="html.html"><img class="img-circle" src="component/img/HTML.png" width="100" height="100"></a></td>
                                        <td><a href="css.html"><img class="img-circle" src="component/img/css.jpg" width="100" height="100"></a></td>
										
                                    </tr>
                                    <tr>
									     <td><a href="oos.html"><img class="img-circle" src="component/img/oss.jpg" width="100" height="100"></a></td>
   										 <td><a href="php.html"><img class="img-circle" src="component/img/a4.jpg" width="100" height="100"></a></td>
                                         <td><a href="quiz.html"><img class="img-circle" src="component/img/quiz.jpg" width="100" height="100"></a></td>
									  </tr> 
									  <tr>
									     
										 </tr> 
                                </table>
                            </div>
						      </ul>		
                      <li><a href="htmlviewer.html">HTML live</a></li>							  
                    <li><a href="enquiry.html">Contact Us </a></li>
					<li><a href="about.html">About</a></li>
                      <li>
                            <a href="">
                                <?php echo "Welcome ". $_SESSION['username']."" ;?>
                            </a>
                        </li>
                    <li><a href="logout.php">Logout</a></li>
                </div>
            </div>
        </nav>
    </div>
	
        <div id="x1">
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="component/img/26.jpg" alt="img">
                        </div>

                        <div class="item">
                            <img src="component/img/28.jpg" alt="New York">
                        </div>


                        <div class="item">
                            <img src="component/img/23.jpg" alt="New York">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
                </div>
            </div>
        </div>

        <br>
        <div class="box2">
            <div class="tech"><div class="container-fluid">
                <h1 align="center"> Technology </h1>
                </div>
            </div>
            <div class="row centered">
                <br><br>
                <div class="col-md-3">
                    <div class="box5">
                        <img src="component/img/a1.jpg" width="110" height="110" alt="">
                        <h4><a href="html.html">HTML & CSS</a></h4>
                        <p></p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box5">
                        <img class="img-circle" src="component/img/a3.jpg" width="110" height="110" alt="">
                        <h4><a href="#">JavaScript</a></h4>
                        <p></p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box5">
                        <img class="img-circle" src="component/img/DS.jpg" width="110" height="110" alt="">
                        <h4><a href="data.html">DATA STRUCTURE</a></h4>
                        <p></p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box5">
                        <img class="img-circle" src="component/img/a4.jpg" width="110" height="110" alt="">
                        <h4><a href="php.html">PHP</a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        </div>


        <div class="tech">
            <h1 align="center"> " A Community that learns together "</h1>
        </div>

        <div class="container ">
            <div class="row centered">
                <br><br>
                <div class="col-md-4 wow fadeInLeft">
                    <div class="box">
                        <h4><b>Vision</b></h4>
                        <p>Our vision with this site is that we want all beginner who want to learn some thing they learn at same place with practice. We provide all given facilities to student..</p>
                        <p> All program of the course </p>
                        <p> All time best Interview queation </p>
                        <p> Quiz </p>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInLeft ">
                    <div class="box">
                        <h4><b>Mision</b></h4>
                        <p> We are try to provide all the basic tool to visitor who want to learn any thing easily. Here some technology are given which can all of you learn from this site.</p>
                        <p> HTML & CSS</p>
                        <p> DATA STRUCTURE</p>
                        <p> AUTOMATA </p>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInLeft ">
                    <div class="box">
                        <h4><b>Technology</b></h4>
                        <p> We are try to provide all the basic tool to visitor who want to learn any thing easily. Here some technology are given which can all of you learn from this site.</p>
                        <p> HTML & CSS</p>
                        <p> DATA STRUCTURE</p>
                        <p> AUTOMATA </p>
                    </div>
                </div>
            </div>
        </div>

        <br>
                                                    
                            
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

                            
<!--
        <div class="container">
          
                <div id="footer">
                    <div class="logo2">
                        <br><img class="img-circle" src="component/img/fb.jpg" width="30" height="30">
                        <a href="http://codevendor9.blogspot.in"><img class="img-circle" src="component/img/blog.jpg" width="30" height="30"></a>
                        <a href="https://www.youtube.com/channel/UCCRy3ob-9u_omSP_aGw82QQ"><img class="img-circle" src="component/img/youtube.jpg" width="30" height="30"></a>
                        <img class="img-circle" src="component/img/gm.jpg" width="30" height="30">
                    </div>
                <div class="hr">
                    <hr>
                </div>
          <div class="text2">
                    <h5 align="center">
                        <font color="black"><b>&copy; 2018  All Rights Reserved.CodeVendor</b><br>
                            <font color="black"><a href="about.html"><b> About | </b></a><a color="black" href="enquiry.html"><b>Contact Us</b></a></font>
                    </h5>
                </div>
        </div>
        </div>
-->

        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="component/js/bootstrap.min.js"></script>
        <script src="component/js/jquery-3.2.1.js"></script>
        <script>
            //   $('#myCarousel').on("slide.bs.carousel", function(){
            //     $(".carousel-control",this).css('top',($(".active img",this).height()*0.46)+'px');
            //     $(this).off("slide.bs.carousel");
            //});
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
    </body>

    </html>