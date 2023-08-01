<?php
include('connection.php');
//include auth_session.php file on all user panel pages
include("auth_session.php");
$session=$_SESSION['username'];
if(isset($_POST['submit']))
{	
				
	$que = "SELECT uid from users where username='$session'";
	$ret = mysqli_query($con,$que);
	$row = mysqli_fetch_assoc($ret);
	$uid = $row['uid'];
	
	$n_id = intval($_GET['nid']);
	$bid_amt = $_POST['nprice'];
	$date = date('Y-m-d H:i:s');
	
	?>
	
	<?php
	$sql = "INSERT INTO bids VALUES ('NULL', '$uid', '$n_id', '$bid_amt', '$date')";
	$ret1 = mysqli_query($con,$sql);
		
	if($ret1)
	{
		echo "<script>alert('Records uploaded')</script>";
	
	}
	else
	{
		echo "<script>alert('Records not uploaded')</script>";
		echo mysqli_error($con);
	}
				
}	  


?>





<html>
<head>
<meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>





