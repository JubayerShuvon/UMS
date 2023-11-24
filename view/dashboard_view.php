



<?php





    if(!isset($_SESSION["username"])){
      session_start();
        
    }

include("../view/head_dashboard.php");

  echo "<h1 align='middle'> Welcome ".$_SESSION['username']."</h2>";



 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <link rel="stylesheet" href="../CSS/login/loginCSS2.css">
   
    <title></title>
  </head>
  <body>
    <fieldset align = "center">


     <img src="pic.png" style="width: 60%;">
        
         
     </fieldset>
  </body>
</html>


<?php
include("../model/foot.php");
?>

