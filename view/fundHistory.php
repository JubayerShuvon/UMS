<?php
session_start();

if(isset($_SESSION['username']))
{
	include("../view/head_dashboard.php");

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/dashboard.css">



  </head>
  <body>


  <?php
require_once '../controller/Info.php';

$fund = fetchAllFund();

?>

<table border="1" style="width:100%;padding:10px;">
	<thead>
		<tr>
			<th>Librarian id</th>
			<th>Amount</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($fund as $i => $fund): ?>
			<tr>
				<td><?php echo $fund['v_id'] ?></a></td>
				<td><?php echo $fund['amount'] ?></td>
			</tr>
		<?php endforeach; ?>


	</tbody>


</table>


</div>



</div>



  </body>
</html>





<?php
include("../model/foot.php");

}
else {
header("location:../view/login_view.php");
}
 ?>
