<?php


if(isset($_POST['number_1']) and isset($_POST['number_2']) and isset($_POST['operation'])){
    $number_1 = isset($_POST['number_1']) ? (float) $_POST['number_1'] : NULL;
    $number_2 =  isset($_POST['number_2']) ? (float)$_POST['number_2'] : NULL;
    $operation = $_POST['operation'] ?? NULL;

switch($operation){
    case '+' : $result = $number_1 + $number_2;
    break;
    case '-': $result = $number_1 - $number_2;
    break;
    case '*': $result = $number_1 * $number_2;
    break;
    case '/' : $result = $number_1 / $number_2;
    break;
    default : 
    break;
}}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>calculatrice</title>
</head>
<body>
    <button><a href="index.php">Retour</a></button>
    <header class="head">
        <h3>Calculatrice</h3>
    </header>
    <form action="" method="post">
        
        <input type="number" id="number_1" name="number_1" step="0.01" required>

        
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

    
        <input type="number" id="number_2" name="number_2" step="0.01" required>
        <input type="submit" value="calculer">
    </form>
    <?php if(isset($result)): ?>
       <p>le resultat est : <?= $result ?></p>
   <?php endif; ?>
</body>
</html>