
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="entete">
            <p>Tennis Club de Mégrine</p>
            <img class="logo" src="logo.png" width="80"></br>
        </div>
        <div class="page">
            
            <div class="menu">
                <h2>Menu</h2>
                <ul>
                    <li><a href="actualité.php">Actualités</a></li>
                    <li><a href="membres.php">Membres</a></li>
                    <li><a href="admins.php">Admins</a></li>
                    <li><a href="produits.php">Produits</a></li>
                </ul>
            </div>
            <div class="content">
			<?PHP
	include "../entities/membre.php";
	include "../core/membrec.php";
	include "user.php";
	if (isset($_GET['cin'])) {
		$membrec = new membrec();
		$result = $membrec->recuperermembre($_GET['cin']);
		foreach ($result as $row) {
			$cin = $row['cin'];
			$nom = $row['nom'];
			$prenom = $row['prenom'];
			$tel = $row['tel'];
			$age = $row['age'];
			$inscription = $row['inscription'];
			$abonnement = $row['abonnement'];
			$pay = $row['paiement'];
			$eemail = $row['email'];
			$mdp = $row['mdp'];
			$role = $row['role'];
			?>
			<form method="POST">
				<table>
					<caption class='titre'>Modifier membre</caption>
					<tr>
						<td class="ff">CIN</td>
						<td class="ff"><input type="number" name="cin"  class='gg'value="<?PHP echo $cin ?>"></td>
					</tr>
					<tr>
						<td class="ff">Nom</td>
						<td class="ff" ><input type="text" class='gg' name="nom" value="<?PHP echo $nom ?>"></td>
					</tr>
					<tr>
						<td class="ff">Prenom</td>
						<td class="ff"><input type="text" class='gg' name="prenom" value="<?PHP echo $prenom ?>"></td>
					</tr>



					<tr>
						<td class="ff">tel</td>
						<td class="ff"><input type="number" class='gg' name="tel" value="<?PHP echo $tel ?>"></td>
					</tr>
					<tr>
						<td class="ff">age</td>
						<td class="ff"><input type="number" class='gg' name="age" value="<?PHP echo $age ?>"></td>
					</tr>
					<tr>
						<td class="ff">inscription</td>
						<td class="ff"><input type="date" class='gg' name="inscription" value="<?PHP echo $inscription ?>"></td>
					</tr>
					<tr>
						<td class="ff">abonnement</td>
						<td class="ff"><input type="date" class='gg' name="abonnement" value="<?PHP echo $abonnement ?>"></td>
					</tr>


					<tr>
						<td class="ff">paiment</td>
						<td class="ff"><input class='gg' type="text" name="pay" value="<?PHP echo $pay ?>"></td>
					</tr>
					<tr>
						<td class="ff">email</td>
						<td class="ff"><input class='gg' type="text" name="eemail" value="<?PHP echo $eemail ?>"></td>
					</tr>
					<tr>
						<td class="ff">mot de passe</td>
						<td class="ff"><input class='gg' type="text" name="mdp" value="<?PHP echo $mdp ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td class="ff"><input  type="submit" name="modifier" value="modifier"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin']; ?>"></td>
					</tr>
					<tr>
						<td</td>
						<td class="ff"><input class='gg' type="hidden" name="role" value="<?PHP echo $role ?>"></td>
					</tr>
				</table>
			</form>
			<?PHP
				}
			}
			if (isset($_POST['modifier'])) {
				$membre = new membres($_POST['cin'], $_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['age'], $_POST['inscription'], $_POST['abonnement'], $_POST['eemail'], $_POST['mdp'], $_POST['pay'], $_POST['role']);
				$membrec->modifiermembre($membre, $_POST['cin_ini']);
				echo $_POST['cin_ini'];
				header('Location: membres.php');
			}
			?>
            </div>
        </div>
        
    </body>
</html>