<?php

require_once 'FootballTeam.php';

$equipe = new FootballTeam('real', 'perez', '23', 'carlo', 23);
echo $equipe->getName();
