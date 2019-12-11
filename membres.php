
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <?PHP
            include "../core/membrec.php";
            $membre1c = new membrec();
            $liste = $membre1c->affichermembres();
        ?>
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
                    <li><a href="AjouterProd.html">Produits</a></li>
                </ul>
            </div>
            <div class="content">
                <table border="1" class="center">
	 
                        <tr>
                            <td class="th">Cin</td>
                            <td class="th" >Nom</td>
                            <td class="th" >Prenom</td>
                            <td class="th" >tel</td>
                            <td class="th" >age</td>
                            <td class="th" >inscription</td>
                            <td class="th" >abonnement</td>
                            <td class="th">&emsp;&emsp;email</td>
                            <td class="th">mot de passe</td>
                            <td class="th">paiement</td>
                            <td class="th" >&emsp;supprimer</td>
                            <td class="th" >modifier&emsp;</td>
                        </tr>
                    
                        <?PHP
                        foreach ($liste as $row) {
                            ?>
                            
                            <tr>
                            
                                <td  class="ff"><?PHP echo $row['cin']; ?></td>
                                <td class="ff"><?PHP echo $row['nom']; ?></td>
                                <td class="ff"><?PHP echo $row['prenom']; ?></td>
                                <td class="ff" ><?PHP echo $row['tel']; ?></td>
                                <td class="ff" ><?PHP echo $row['age']; ?></td>
                                <td class="ff" ><?PHP echo $row['inscription']; ?></td>
                                <td class="ff" ><?PHP echo $row['abonnement']; ?></td>
                                <td class="ff"><?PHP echo $row['email']; ?></td>
                                <td class="ff" ><?PHP echo $row['mdp']; ?></td>
                                <td class="ff" ><?PHP echo $row['paiement']; ?></td>
                                <td class="center">
                                    <form  id="monform "method="POST" action="supprimermembre.php">
                                        <input type="submit" class="monformm" name="supprimer" value="">
                                        <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
                                    </form>
                                </td>
                                <td class="ff"><a href="modifiermembre.php?cin=<?PHP echo $row['cin']; ?>">
                                        Edit</a></td>
                                        
                            </tr>
                        <?PHP
                        }
                        ?>
                    </table>
                    <a href="ajoutermembre.html"><input type="submit"  value="ajouter membre"> </a>
                    <a href="ajouteradmin.html"><input type="submit"  value="ajouter admin"> </a>
            </div>
        </div>
        
    </body>
</html>

