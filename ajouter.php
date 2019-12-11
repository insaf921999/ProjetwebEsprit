
<?PHP
include "../entities/membre.php";
include "../core/membrec.php";


if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['tel']) and isset($_POST['age'])and isset($_POST['inscription'])and isset($_POST['abonnement'])and isset($_POST['email']) and isset($_POST['mdp']) and isset($_POST['paiement'])and isset($_POST['role'])){
$membre1=new membres($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['tel'], $_POST['age'], $_POST['inscription'], $_POST['abonnement'], $_POST['email'],$_POST['mdp'], $_POST['paiement'],$_POST['role']);

$membre1c=new membrec();
$membre1c->ajoutermembree($membre1);
header('Location: membres.php');
	
}else{
	echo "vérifier les champs";
}
//*/
