<?PHP

include "../view/config.php" ;
// include "../config2.php" ;

class prodC
{
	function AjouterProd($prod)
	{
		$sql = "insert into prod (idP,nomP,imageP,descriP) values(:idP,:nomP,:imageP,:descriP)";
		$db = Database::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;

			$req->BindValue(':idP',$prod->getidP()) ;
			$req->BindValue(':nomP',$prod->getnomP()) ;
			$req->BindValue(':imageP',$prod->getimageP()) ;
			$req->BindValue(':descriP',$prod->getdescriP()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
	
	function AfficherProds($prod)
	{
		echo "idP: ".$prod->getidP()."<br>";
		echo "nomP: ".$prod->getnomP()."<br>";
		echo "imageP: ".$prod->getimageP()."<br>";
		echo "descriP: ".$prod->getdescriP()."<br>";
	}
	
	function AfficherProd()
	{
		$sql="SElECT * From prod";
		$db = Database::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function modifierProd($prod,$idP)
{
		$sql="UPDATE prod SET idP=:idPS, nomP=:nomP,imageP=:imageP,descriP=:descriP WHERE idP=:idP";
		
		$db = Database::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$idPS=$prod->getidP();
        $nomP=$prod->getnomP();
        $imageP=$prod->getimageP();
         $descriP=$prod->getdescriP();

		$datas = array(':idPS'=>$idPS, ':idP'=>$idP, ':nomP'=>$nomP,':imageP'=>$imageP,':descriP'=>$descriP);

		$req->bindValue(':idPS',$idPS);
		$req->bindValue(':idP',$idP);
		$req->bindValue(':nomP',$nomP);
		$req->bindValue(':imageP',$imageP);
		$req->bindValue(':descriP',$descriP);
		
		
            $s=$req->execute();
			  // header('Location: index.php');

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	function supprimerProd($idP)
	{
		$sql="DELETE FROM prod where idP= :idP";
		$db = Database::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idP',$idP);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function recupererProd($idP){
		$sql="SELECT * from prod where idP=$idP";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeProd($nomP){
		$sql="SELECT * from prod where nomP=$nomP";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherDESC()
     {
    $sql="select * from prod ORDER BY idP DESC";
    $db = Database::getConnexion();
    return ($db->query($sql));
    
     }

   function afficherASC()
   {
    $sql="select * from prod ORDER BY idP ASC";
    $db = config::getConnexion();
    return ($db->query($sql));
    }

}
?>