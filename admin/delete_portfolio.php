<?php 

include('includes/settings.php');

?>
<?php 
	$id = $_GET['id'];
	

	$sql1 = "SELECT * FROM portfolio WHERE portfolio_id = $id";
	$res = mysqli_query($con, $sql1);
	$row = mysqli_fetch_assoc($res);
	$file = $row['portfolio_image'];
	$todelete = $_SERVER['DOCUMENT_ROOT'].'/binayaktech/uploads/'.$file;
	if(file_exists($todelete))
	{
		unlink($todelete);
	}

	$sql = "DELETE FROM portfolio WHERE portfolio_id = $id";
	mysqli_query($con, $sql);
	header('location:portfolios.php');
?>