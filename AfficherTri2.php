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
            <section id="main-content">
          <section class="wrapper">            

              <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Gestion de Produit</h3>
                                            
                    </ol>
                </div>
            </div>
              <!-- houni -->
              <?PHP
include "../core/prodC.php";
$prod1C=new prodC();
$listeProd=$prod1C->afficherDESC() ;
?>
 <center> <table border="1">
<tr>
<th> Ref Produit </th>
<th> Nom Produit </th>
<th> Image Produit </th>
<th> Description </th>
<th>Supprimer</th>
<th>Modifier</th>
</tr>

<?PHP
foreach($listeProd as $row)
{
    ?>
    <tr>
    <td><?PHP echo $row['idP']; ?></td>
    <td><?PHP echo $row['nomP']; ?></td>
    <td><a><img class="" src="<?php echo $row['imageP'];?>" style="width: 100px; height:100px;"></a></td>
    <td><?PHP echo $row['descriP']; ?></td>
    <td><form method="POST" action="supprimerProd.php">
    <input type="submit" name="supprimer" value="supprimer">
    <input type="hidden" value="<?PHP echo $row['idP']; ?>" name="idP">
    </form>
    </td>
    <td><a href="modifierProd1.php?idP=<?PHP echo $row['idP']; ?>">
    Modifier</a></td>
    </tr>
    <?PHP
}
?>
</table>

<ul class="sub">
                          <a class="" href="AjouterProd.html">Ajouter Produit</a>        
                          <a class="" href="AfficherProd1.php">Afficher Produit</a>
                          <a class="" href="recherche1.php">Chercher Produit</a>
                          <a class="" href="AfficherTri1.php">Tri Produit Ascendant</a>
                           <a class="" href="AfficherTri2.php">Tri Produit Descendant </a>
                        <a class="" href="stat1.php">Statistique Produit</a>
                      </ul>



           
</section>
</section>
</div> 
        </div>
        
    </body>
</html>