<link rel="stylesheet" href="../CSS/signup/signupCSS2.css">


<?php
session_start();

if(isset($_SESSION['username']))
{
  include("../view/head_dashboard.php");

  ?>

<?php

require_once '../controller/info_controller.php';



if(isset($_SESSION['username']))
{
$data = fetch_volunteer($_SESSION['username']);


  if($data!=NULL)
  {
    foreach ($data as $i => $volunteer):

         $name= $volunteer['NAME'] ;
         $email=$volunteer['EMAIL'];
         $username= $volunteer['USERNAME'] ;
         $birth=$volunteer['BIRTH'];
         $gender= $volunteer['GENDER'] ;
    endforeach;

    echo "<br />$name";
    echo "<br />$email";
    echo "<br />$username";
    echo "<br />$birth";
    echo "<br />$gender";
    echo "</div>";
   echo "<div class='profile'>";
  }
}

else{ echo header('Location:../view/login_view.php');}

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    
    
    <title></title>
  </head>
  <body>
    
  </body>
</html>

<?php
include("../model/foot.php");

}
else {
header("location:../view/login_view.php");
}
 ?>