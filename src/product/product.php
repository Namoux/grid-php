<?php require_once("/home/namoux/Documents/php/tp/grid-php/src/common/bdd.php");
$product_id = $_GET["id"]; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Produit</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="product.css">
</head>
<body>
    <h1>Page produit</h1>
    <img src="<?= $fruits[$product_id]["photo"] ?>" alt="photo de fruit" style="width:300px;height:300px;" />
    <p><?= $fruits[$product_id]["name"] ?></p>
    <p><?= $fruits[$product_id]["stock"] ?></p>
</body>
</html>
