<?php 
$conn = mysqli_connect('localhost','root',"",'codevendor') ;
  // $conn= mysqli_connect('localhost','id4814971_vishesh',"14021995",'id4814971_login_signup') ;
 ?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/logo.png">
    <title>Codevendor|Admin panel</title>

    <!-- Bootstrap -->
    <link href="component/css/bootstrap.css" rel="stylesheet">
    
    <link href="component/css/font-awesome.min.css" rel="stylesheet">
    <link href="component/css/font-awesome.css" rel="stylesheet">
    
    <style>

    h1{background-color:aqua;
       
     }
    </style>

</head>

<h1 align="center" font-size="15px" >CODEVENDOR|Admin Panel</h1>



<div class="container">
<form class="form-group" method="post" action="admin.php">

  <table class="table table-striped" border="1px" align="center">
  
<tr class="sucess">
  
<td><lable>ID</lable><input class="form-control" type="text" name="t1"></td>

<td>EMAIL<input class="form-control" type="text" name="t2"></td>

<td>PASSWORD<input class="form-control" type="text" name="t3"></td><br>
<td><button type="sumbmit" class="btn btn-danger" name="t4" >DELETE</button></td>
<td><button type="sumbmit" class="btn btn-warning" name="t5" >UPDATE</button></td>
<td><button class="btn btn-primary" type="sumbmit" name="t6" >INSERT</button></td>


</tr>


</table>
</form>
<?php 

if(isset($_POST['t4']))
{

  $q1="delete from signup where id ='$_POST[t1]'";
   mysqli_query($conn,$q1);

}


if(isset($_POST['t5']))
{

  $q2="update  signup set password='$_POST[t3]',email='$_POST[t2]' where id ='$_POST[t1]'";
   mysqli_query($conn,$q2);

}

if(isset($_POST['t6']))
{

  $q3="insert into signup(email,password) values('$_POST[t2]', '$_POST[t3]')";
   mysqli_query($conn,$q3);

}



 ?>


<br><br>

<div class="table-resp">
<table class="table table-striped "  align="center" border="2px" height="300px" width="400px" >
  <tr class="danger" align="center"> <thead>  
<th>ID
<th>EMAIL
<th>PASSWORD
  </tr></thead>
  <?php
// $conn = mysqli_connect('localhost','root',"",'codevendor') ;

  $query ="select *from signup ";
       $run = mysqli_query($conn,$query);
      $row=mysqli_fetch_array($run);
   $count = mysqli_num_rows($run);


 while ( $row=mysqli_fetch_array($run)) {
  

   echo "<tr>";
  echo "<td>". $row['id'] . "</td>";
   echo "<td>". $row['email'] . "</td>";
   echo "<td>". $row['password'] . "</td>";


 }


?>


</div>
  </div>
  

 
  



















