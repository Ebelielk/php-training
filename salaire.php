<?php

    $overtime_1 = 1.3; 
    $overtime_2 = 1.5; 
    $weekend_rate = 2.0;    


if (isset($_GET['hour_rate']) && isset($_GET['normal_hour_week']) && isset($_GET['week_worked']) && isset($_GET['week_worked'])) {
   
    $hour_rate = (float)$_GET['hour_rate'];
    $normal_hour_week = (int)$_GET['normal_hour_week'];
    $week_worked = (int)$_GET['week_worked'];
    $weekend_worked = (int)$_GET['weekend_worked'];

    
    
    $overtime_hours = $week_worked - $normal_hour_week;
    if ($overtime_hours < 0) {
        $overtime_hours = 0;
    }

    
    $overtime_hours_1 = $overtime_hours;
    if ($overtime_hours_1 > 6) {
        $overtime_hours_1 = 6;
    }
    $overtime_hours_2 = $overtime_hours - 6;
    if ($overtime_hours_2 < 0) {
        $overtime_hours_2 = 0;
    }

   
    $normal_hours = $week_worked;
    if ($normal_hours > $normal_hour_week) {
        $normal_hours = $normal_hour_week;
    }
    $normal_pay = $normal_hours * $hour_rate;

    $overtime_pay_1 = $overtime_hours_1 * $hour_rate * $overtime_1;
    $overtime_pay_2 = $overtime_hours_2 * $hour_rate * $overtime_2;
    $weekend_pay = $weekend_worked * $hour_rate * $weekend_rate;

    $total = $normal_pay + $overtime_pay_1 + $overtime_pay_2 + $weekend_pay;
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
    <form action="" method="get">
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
   <?php endif; ?>
</body>
</html>

