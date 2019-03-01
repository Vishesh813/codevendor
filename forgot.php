<?php 
session_start();
$_SESSION['msg']='you session started';
     if(isset($_POST['submit']))
     {


        // echo "button clicked";

            $email=$_POST['email'];
            $npassword=$_POST['npassword'];
            $cpassword=$_POST['cpassword'];

      // echo 'username:'.$username.'<br>'.'npassword:'.$npassword.'<br>';
            if ($npassword==$cpassword)
             {
                $conn= mysqli_connect('localhost','root','','codevendor') or die('database not selected');

                $updateq="UPDATE `signup` SET `password`='$npassword' WHERE email='$email'";
                $fire=mysqli_query($conn,$updateq) or die('did not run');

               // echo "<script>alert('you password has been changed')</sript>";
                echo "<script>alert('you password has been changed')</script>";
            }

            else
            {

                 echo "cpassword and new password does not mactch";


            }
mysqli_close($conn);

     }

   session_destroy();


 ?>
<!DOCTYPE html>
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
<div class="container">
<div class="row">
                                <div class="col-sm-12">
                                <div class="box1">  
                                    <div class="loginbox">
                                        <div class="form-top">
                                            <div class="form-top-left">
                                                <h3 align="center" >Forgot Pssword.</h3>
                                            </div>
                                            <div class="form-top-right">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                        </div>
                                        
                                        <div class="form-bottom">
                                             <form action="forgot.php" method="post">
                                                <div class="form-group">
                                                    <lable>Enter your email:</lable><input type="text" name="email"><br>
                                                </div>
                                                <div class="form-group">
                                                    <lable>New password:    </lable><input type="text" name="npassword"><br>
                                                </div>
                                                <div class="form-group">
                                                  <label> Comfirm password: </label><input type="text" name="cpassword"><br><br>
                                                </div>
                                                <input type="submit" name="submit" value="change password">
                                            </form>
                                        </div>
                                    </div>
                                    <br>  
                        
                         <a href="login.php">  <button  class="btn-primary"  >Back to homepage</button>    </a> 
                                    

                                <!------login form ends----->
                                

    </div>                                  
                                </div>
                               
</div>
</div>


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