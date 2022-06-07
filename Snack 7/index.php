<?php 

$classe61 = [
    [
        'name' => 'Ugo',
        'lastname' => 'De Ughi',
        'vote' => [8,7,9,6,10]
    ],
    [
        'name' => 'Giuseppe',
        'lastname' => 'Verdi',
        'vote' => [5,4,3,6,6]
    ],
    [
        'name' => 'Fabrizio',
        'lastname' => 'De Andrè',
        'vote' => [10,10,9,9,10]
    ],
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>
    <ul>
        <?php for($i = 0; $i < count($classe61); $i++) : ?>
            <li>
                <p>Lo studente <i> <?php echo $classe61[$i]['name'] , ' ' , $classe61[$i]['lastname'] ?> </i> ha come media voti : <i> <?php echo (array_sum($classe61[$i]['vote']) / count($classe61[$i]['vote'])) ?> </i> </p>
            </li>
        <?php endfor ?>
    </ul>
</body>
</html>