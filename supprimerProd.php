<?PHP
include "../core/prodC.php";
$prodC=new prodC();
if (isset($_POST["idP"])){
	$prodC->supprimerProd($_POST["idP"]);
	header('Location: AfficherProd.php');
}

?>
