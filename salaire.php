<?php

$erreur = NULL;

function calculateSalary($hour_rate, $normal_hour_week, $week_worked, $weekend_worked) {
  
  $overtime_1 = 1.3;
  $overtime_2 = 1.5;
  $weekend_rate = 2; 

  
  $overtime_hours = max(0, $week_worked - $normal_hour_week);

  
  $overtime_hours_1 = min($overtime_hours, 6);
  $overtime_hours_2 = max(0, $overtime_hours - 6);

  
  $normal_hours = min($week_worked, $normal_hour_week);

  
  $normal_pay = $normal_hours * $hour_rate;
  $overtime_pay_1 = $overtime_hours_1 * $hour_rate * $overtime_1;
  $overtime_pay_2 = $overtime_hours_2 * $hour_rate * $overtime_2;
  $weekend_pay = $weekend_worked * $hour_rate * $weekend_rate;

  
  $total = $normal_pay + $overtime_pay_1 + $overtime_pay_2 + $weekend_pay;

  return $total;
}


if (isset($_POST['hour_rate']) && isset($_POST['normal_hour_week']) && isset($_POST['week_worked']) && isset($_POST['weekend_worked'])) {
  $hour_rate = (float)$_POST['hour_rate'];
  $normal_hour_week = (int)$_POST['normal_hour_week'];
  $week_worked = (int)$_POST['week_worked'];
  $weekend_worked = (int)$_POST['weekend_worked'];

}
if ($hour_rate <= 0 || $normal_hour_week < 40 || $week_worked < 0 || $weekend_worked < 0) {
    $erreur = "Valeurs invalides";
} else {
    // Calcul du salaire
    $total = calculateSalary($hour_rate, $normal_hour_week, $week_worked, $weekend_worked);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculateur de Salaire</title>
</head>
<body>
    <button><a href="index.php">Retour</a></button>
    <p></p>
    <form action="" method="post">
        <label for="hour_rate">Salaire horaire :</label>
        <input type="number" id="hour_rate" name="hour_rate" required><br><br>

        <label for="weekly_normal_hours">Heures normales par semaine :</label>
        <input type="number" id="normal_hour_week" name="normal_hour_week" required><br><br>

        <label for="week_worked">Heures travaillées pendant la semaine :</label>
        <input type="number" id="week_worked" name="week_worked" required><br><br>

        <label for="weekend_worked">Heures travaillées pendant le week-end :</label>
        <input type="number" id="weekend_worked" name="weekend_worked" required><br><br>

        <input type="submit" value="Calculer le Salaire">
    </form>

    <?php if(isset($total) and $total != 0): ?>
       <p>le salaire mensuel est de : <?= $total ?> dollars</p>
   <?php else: ?>
    <p><?= $erreur?></p>
    <?php endif;?>
</body>
</html>

