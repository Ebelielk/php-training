<?php
require_once 'classe/session.php';
require_once 'classe/Table.php';

Session::start();

$name = Session::get('name', 'N/A');
$email = Session::get('email', 'N/A');
$comments = Session::get('comments', 'N/A');
$country = Session::get('country', 'N/A');
$newsletter = Session::get('newsletter', 'N/A');
$gender = Session::get('gender', 'N/A');

$table = new Table();
$table->addRow(['Nom', $name]);
$table->addRow(['Email', $email]);
$table->addRow(['Commentaires', $comments]);
$table->addRow(['Pays', $country]);
$table->addRow(['Newsletter', $newsletter]);
$table->addRow(['Genre', $gender]);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations Soumises par l'utilisateur</title>
</head>
<body>
    <h1>Informations Soumises</h1>
    <?php echo $table->render(); ?>
</body>
</html>