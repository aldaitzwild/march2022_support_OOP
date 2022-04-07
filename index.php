<?php

require_once 'Player.php';
require_once 'GoalKeeper.php';
require_once 'Team.php';

$player1 = new Player('Anthony', 'Lopes');
$player2 = new Player('Zinedine', 'Zidane');
$goalKeeper = new GoalKeeper('Grégory', 'Coupet', 36);

$team = new Team();

$team->addPlayer($player1);
$team->addPlayer($player2);
$team->addPlayer($goalKeeper);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football</title>
</head>
<body>

    <ul>
        <?php 
        
        foreach($team->players as $player) {
            echo '<li>' . $player . '</li>';
        }
        ?>
    </ul>
    
</body>
</html>