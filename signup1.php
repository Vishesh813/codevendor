<?php
 

  session_start();

   // $conn= new mysqli('localhost','id4814971_vishesh',"14021995",'id4814971_login_signup') ;
 $conn= new mysqli('localhost','root',"",'codevendor') ;
     if($conn->connect_error)
     {

     	die("connection error".$conn->connect_error);
     } 
     // else{
     // 	echo" connected sucessfully";
     // }    



   if(isset($_POST['submit']))
   {
         $username =  $_POST['username'];
       $email =  $_POST['email'];
       $password =  $_POST['password'];
       $cpassword =  $_POST['cpassword'];



       if($password==$cpassword)
      {
      
     $firequery=$conn->query("insert into signup (username,email,password) values ('$username','$email','$password')");

       if($firequery)
       {
      
         // echo "registration successfull ";
          // header("Refresh: 1;url=home.html");
		    echo "<script>alert('you are successfully registered')</script>";
       }
       else{
       	echo "sorry";
       }

    }
    else{

	echo"invalid credential";
}
 
}


















?>