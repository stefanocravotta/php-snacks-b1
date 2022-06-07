<?php

$partite_giugno = [
    [
        'squadra_casa' => 'Olimpia',
        'squadra_ospite' => 'Cantù',
        'punti_squadra_casa' => 78,
        'punti_squadra_ospite' => 90
    ],
    [
        'squadra_casa' => 'New Basket Brindisi',
        'squadra_ospite' => 'Reggiana',
        'punti_squadra_casa' => 108,
        'punti_squadra_ospite' => 88
    ],
    [
        'squadra_casa' => 'Virtus Bologna',
        'squadra_ospite' => 'Fortitudo Bologna',
        'punti_squadra_casa' => 79,
        'punti_squadra_ospite' => 76
    ],
    [
        'squadra_casa' => 'Reyer Venezia Mestre',
        'squadra_ospite' => 'Dinamo',
        'punti_squadra_casa' => 80,
        'punti_squadra_ospite' => 97
    ],
];

/* echo '<pre>';
var_dump($partite_giugno);
echo '</pre>';
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>Elenco Partite Giugno</h1>
    <ul>
        <?php for($i = 0; $i < count($partite_giugno); $i++) : ?>
            <li> 
                <?php
                echo $partite_giugno[$i]['squadra_casa'], ' - ' , $partite_giugno[$i]['squadra_ospite'], ' | ' ,$partite_giugno[$i]['punti_squadra_casa'], ' - ' ,$partite_giugno[$i]['punti_squadra_ospite'];
                ?> 
            </li>
        <?php endfor ?>
    </ul>
</body>
</html>
