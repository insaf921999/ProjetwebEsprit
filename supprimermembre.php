<?PHP
include "../core/membrec.php";
$membrec=new membrec();
if (isset($_POST["cin"])){
	$membrec->supprimermembre($_POST["cin"]);
	header('Location: 	membres.php');
}

?>