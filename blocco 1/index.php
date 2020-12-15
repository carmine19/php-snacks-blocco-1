<?php

/*Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.
ogni partita avrà le seguenti caratteristiche:
squadra di casa
squadra ospite
punti fatti dalla squadra di casa
punti fatti dalla squadra ospite
*/

$matches = [
        [
                's_casa' => 'Napoli',
                's_ospite' => 'Genova',
                'punti_casa' => 2,
                'punti_ospite' => 1,
        ],

        [
                's_casa' => 'Roma',
                's_ospite' => 'Lazio',
                'punti_casa' => 2,
                'punti_ospite' => 1,
        ],

];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-badwords</title>
</head>
<body>

<h1>Risulatati partite: </h1>
        <ul>
            <?php

                for ($i=0; $i < count($matches) ; $i++) {
                     print_r('<li>' . $matches[$i]['s_casa'] .' - '. $matches[$i]['s_ospite'] .' | '. $matches[$i]['punti_casa'] .' - '. $matches[$i]['punti_ospite'].'</li>');
                     }
            ?>
        </ul>
</body>
</html>
