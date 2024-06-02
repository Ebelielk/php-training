<?php

    $value = isset($_POST['value']) ? (float) $_POST['value'] : NULL;
    $taux = isset($_POST['taux']) ? (float) $_POST['taux'] : 2800;
    $devise = $_POST['devise'] ?? '';

switch($devise){
    case 'usd':
        $result = $value * $taux;
    break;
    case 'fc':
        $result = $value / $taux;
    default:
    break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur de devise</title>
</head>
<body>
    <button><a href="index.php">Retour</a></button>
    <h3>CONVERTISSEUR DE DEVISE</h3>

    <form action="" method="post">
        <label for="usd">valeur : </label>
        <input type="number" name="value" id="usd" step="0.0001">

        <label for="taux">Taux: </label>
        <input type="number" name="taux" id="taux" step="0.0001">

        <label for="devise">Devise</label>
        <select name="devise">
            <option value="usd">USD</option>
            <option value="fc">FC</option>
        </select>

        <input type="submit" value="convertir">
    </form>
    <?php if(isset($result) and $devise == 'fc'): ?>
       <p>la valeur est de : <?= $result ?> USD</p>
   <?php elseif($devise == 'usd'): ?>
       <p>la valeur est de: <?= $result ?> FC</p>
   <?php endif; ?>

</body>
</html>