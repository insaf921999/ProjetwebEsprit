<?PHP
include "../entities/prod.php" ;
include "../core/prodC.php" ;
	if (isset($_GET['idP']) and isset ($_GET['nomP']) and isset($_GET['imageP']) and isset($_GET['descriP']))
{	
$prod=new prod($_GET['idP'],$_GET['nomP'],$_GET['imageP'],$_GET['descriP']);
$prodC=new prodC() ;
$prodC->AjouterProd($prod);
$prodC->AfficherProds($prod);
}
header('location: AfficherProd1.php')


?>