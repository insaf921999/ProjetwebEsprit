<?PHP
include "../config2.php";

class membrec
{
	function affichermembres()
	{
		$sql = "SELECT * From membres";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	//Pour executer une requete on a trois possibilites
	//$db->exec($sql) execute la requete et ne renvoie pas le resultat renvoie juste le
	//nombre de ligne affecte ==> a utilise dans le cas d'un insert ou update
	//$db->query($sql) execute une requete et renvoie le resultat
	//dans un PDOStatement(C'est un objet qui permet de representer une requete et le resultat )
	//$db->prepare($sql) execute une requete prepare

	function affichermembre($membre)
	{
		echo "Cin: " . $membre->getCin() . "<br>";
		echo "Nom: " . $membre->getNom() . "<br>";
		echo "Prénom: " . $membre->getPrenom() . "<br>";
		echo "tel: " . $membre->gettel() . "<br>";
		echo "age: " . $membre->getage() . "<br>";
		echo "inscription: " . $membre->getinscription() . "<br>";
		echo "abonnement: " . $membre->getabonnement() . "<br>";
		echo "paiement: " . $membre->getpai() . "<br>";
		echo "email: " . $membre->getmail() . "<br>";
		
	}
	
	function supprimermembre($cin)
	{
		$sql = "DELETE FROM membres where cin= :cin";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':cin', $cin);
		try {
			$req->execute();
			
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	
	
	function ajoutermembree($membre)
	{
		$sql = "insert into membres (cin,nom,prenom,tel,age,inscription,abonnement,email,mdp,paiement,role) values (:cin, :nom,:prenom,:tel,:age,:inscription,:abonnement,:email,:mdp,:paiement,:role) ;insert into users(user_id,user_name,user_email,user_pass,joining_date,role) VALUES(:cin,:nom,:email,:mdp,:inscription,:role) ";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$cin = $membre->getCin();
			$nom = $membre->getNom();
			$prenom = $membre->getPrenom();
			$tel = $membre->gettel();
			$age = $membre->getage();
			$inscription = $membre->getinscription();
			$abonnement = $membre->getabonnement();
			$email = $membre->getmail();
			$mdp = $membre->getmdp();
			$paiement = $membre->getpai();
			$role=$membre->getrole();
			$req->bindValue(':cin', $cin);
			$req->bindValue(':nom', $nom);
			$req->bindValue(':prenom', $prenom);
			$req->bindValue(':tel', $tel);
			$req->bindValue(':age', $age);
			$req->bindValue(':inscription', $inscription);
			$req->bindValue(':abonnement', $abonnement);
			$req->bindValue(':email', $email);
			$req->bindValue(':mdp', $mdp);
			$req->bindValue(':paiement', $paiement);
			$req->bindValue(':role',$role);
			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
    }
	function modifiermembre($membre, $cin)
	{
		$sql = "UPDATE membres SET cin=:cinn, nom=:nom,prenom=:prenom,tel=:tel,age=:age,inscription=:inscription,abonnement=:abonnement,paiement=:pay,role=:role,email=:malo,mdp=:mdp WHERE cin=:cin; UPDATE users SET user_id=:cinn, user_name=:nom,user_email=:malo,user_pass=:mdp,joining_date=:inscription,role=:role ";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try {
			$req = $db->prepare($sql);
			$cinn = $membre->getCin();
			$nom = $membre->getNom();
			$prenom = $membre->getPrenom();
			$tel = $membre->gettel();
			$age = $membre->getage();
			$inscription = $membre->getinscription();
			$abonnement = $membre->getabonnement();
			$ma = $membre->getmail();
			$mdp = $membre->getmdp();
			$paiiment = $membre->getpai();
			$role = $membre->getrole();
			$datas = array(':cinn' => $cinn, ':cin' => $cin, ':nom' => $nom, ':prenom' => $prenom,  ':tel' => $tel, ':age' => $age, ':inscription' => $inscription, ':abonnement' => $abonnement, ':malo' => $ma,':mdp' => $mdp, ':pay' => $paiiment,':role' => $role);
			$req->bindValue(':cinn', $cinn);
			$req->bindValue(':cin', $cin);
			$req->bindValue(':nom', $nom);
			$req->bindValue(':prenom', $prenom);
			$req->bindValue(':tel', $tel);
			$req->bindValue(':age', $age);
			$req->bindValue(':inscription', $inscription);
			$req->bindValue(':abonnement', $abonnement);
			$req->bindValue(':malo', $ma);
			$req->bindValue(':mdp', $mdp);
			$req->bindValue(':pay', $paiiment);
			$req->bindValue(':role', $role);


			$s = $req->execute();

			
		} catch (Exception $e) {
			echo " Erreur ! " . $e->getMessage();
			echo " Les datas : ";
			print_r($datas);
		}
	}
	function recuperermembre($cin)
	{
		$sql = "SELECT * from membres where cin=$cin";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	}
