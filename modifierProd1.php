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
include "../entities/prod.php";
include "../core/prodC.php";
if (isset($_GET['idP'])){
    $prodC=new prodC();
    $result=$prodC->recupererProd($_GET['idP']);
    foreach($result as $row){
        $idP=$row['idP'];
        $nomP=$row['nomP'];
        $imageP=$row['imageP'];
        $descriP=$row['descriP'];
?>
<form method="POST">
<table>
<caption>Modifier Produit</caption>
<tr>
<td>Id Produit</td>
<td><input type="number" name="idP" value="<?PHP echo $idP ?>"></td>
</tr>
<tr>
<td>Nom Produit</td>
<td><input type="text" name="nomP" value="<?PHP echo $nomP ?>"></td>
</tr>
<tr>
<td>Image Produit</td>
<td><input type="file" name="imageP" value="<?PHP echo $imageP ?>"></td>
</tr>
<tr>
<td>Description Produit</td>
<td><input type="text" name="descriP" value="<?PHP echo $descriP ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idPS" value="<?PHP echo $_GET['idP'];?>"></td>
</tr>
</table>
   <ul class="sub">
                            <a class="" href="AjouterProd.html">Ajouter Produit</a>        
                            <a class="" href="AfficherProd1.php">Afficher Produit</a>
                            <a class="" href="recherche1.php">Chercher Produit</a>
                            <a class="" href="AfficherTri1.php">Tri Produit Ascendant</a>
                           <a class="" href="AfficherTri2.php">Tri Produit Descendant </a>
                          <a class="" href="stat1.php">Statistique Produit</a>
                        </ul>
</form>
<?PHP
    }
}
if (isset($_POST['modifier'])){
    $prod=new prod($_POST['idP'],$_POST['nomP'],$_POST['imageP'],$_POST['descriP']);
    $prodC->modifierProd($prod,$_POST['idPS']);
    
  
}
?>
           
</section>
</section>
        </div>
        
    </body>
</html>

