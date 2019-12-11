<?PHP
class membres
{
	private $cin;
	private $nom;
	private $prenom;
	private $tel;
	private $age;
	private $inscription;
	private $abonnement;
	private $email;
	private $mdp;
	private $paiement;
	private $role;
	
	
	function __construct($cin,$nom,$prenom,$tel,$age,$inscription,$abonnement,$email,$mdp,$paiement,$role){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->age=$age;
		$this->inscription=$inscription;
		$this->abonnement=$abonnement;
		$this->email=$email;
		$this->mdp=$mdp;
		$this->paiement=$paiement;
		$this->role=$role;
	}
	
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function gettel(){
		return $this->tel;
	}
	function getage(){
		return $this->age;
	}
	function getinscription(){
		return $this->inscription;
	}
	function getabonnement(){
		return $this->abonnement;
	}
	function getmail(){
		return $this->email;
	}
	function getmdp(){
		return $this->mdp;
	}
	function getpai(){
		return $this->paiement;
	}
	function getrole(){
		return $this->role;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function settel($tel){
		$this->tel;
	}
	function setage($age){
		$this->age;
	}
	
	function setinscription($inscription){
		$this->inscription;
	}
	function setabonnement($abonnement){
		$this->abonnement;
	}
	function setpaiement($paiement){
		$this->paiement=$paiement;
	}
	function setemail($email){
		$this->email=$email;
	}
	function setmdp($mdp){
		$this->mdp;
	}
	function setrole($role){
		$this->role=$role;
	}
}

?>