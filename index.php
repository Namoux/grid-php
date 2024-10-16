<?php
require_once("/home/namoux/Documents/php/tp/grid-php/src/common/bdd.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop fruitz</title>
</head>

<body>
    <h2>Ma liste de course</h2>
    <div class = "fruits">
        <?php for ($i=0; $i < count($fruits); $i++): ?>
            <div class = "fruitsolo">
                <a href="src/product/product.php?id=<?php echo $i; ?>"><img src="<?= $fruits[$i]["photo"] ?>" alt="photo de fruits" style="width:40px;height:40px;" ?></a> 
                <div class = "nom"> <p><?= $fruits[$i]["name"];?></p> </div>
                <div class = "stock"><p><?= "Stock : " ?> <?= $fruits[$i]["stock"]; ?></p></div>
            </div>

        <?php endfor;?>
    </div>
</body>
</html>