<HTML>
<head>
</head>
<body>
<?PHP
include "entites/prod.php";
include "core/prodC.php";
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
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$prod=new prod($_POST['idP'],$_POST['nomP'],$_POST['imageP'],$_POST['descriP']);
	$prodC->modifierProd($prod,$_POST['idPS']);
		echo $_POST['idPS'];
	header('Location: AfficherProd1.php');
	
}
?>
</body>
</HTMl>