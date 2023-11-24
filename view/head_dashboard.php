
<?php
if(isset($_SESSION['username']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   <link rel="stylesheet" href="../CSS/login/loginCSS2.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   
  

    <fieldset align = "right">

      <h1 align="left"><b> University<span style="color:green"> Management</span> System</b></h1>

       <div class="topnav">
        <a href='dashboard_view.php'>Dashboard |</a>
        <a href='view_profile.php'>View Profile |</a>
        <a href='edit_view.php'>Edit Profile |</a>
      
        <a href ='fund.php'>Ask for fund |</a>
        <a href ='fundHistory.php'>Fund history |</a>
        <a href ='add_book.php'>Add books and stocks |</a>
        <a href ='book_details.php'>Library books details |</a>
         <a href ='../controller/logout_controller.php'>Logout </a>
       </div>




     </fieldset>

  </body>
</html>
<?php
}
else {
header("location:../view/login_view.php");
}
?>