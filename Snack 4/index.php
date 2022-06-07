<?php 



function getUniqueNumberRandom($min, $max, $nItem){

    $numbers = [];

    if($max < $min){
        $tmp = $max;
        $max = $min;
        $min = $tmp;
    }

    if($nItem > ($max - $min)){
        $nItem = $max - $min + 1;
    }

    while(count($numbers) < $nItem){
        $number = rand($min,$max);
        if(!in_array($number, $numbers)){
            $numbers[] = $number;
        }
    }

    return $numbers;
};

$numbersUnique = getUniqueNumberRandom(1,100,10);

echo '<pre>';
var_dump($numbersUnique);
echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>

</body>
</html>