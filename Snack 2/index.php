<?php


$isAuth = true;

var_dump($_GET);

if(strlen($_GET['name']) < 3){
    $isAuth = false;
}elseif(!strpos($_GET['mail'], '@') || !strpos($_GET['mail'], '.') ){
    $isAuth = false;
}elseif(!is_numeric($_GET['age'])){
    $isAuth = false;
}

if($isAuth){
    $output = "Accesso Riuscito";
}else{
    $output = "Accesso Negato";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack</title>
</head>
<body>
    <h1>
        <?php echo $output; ?>
    </h1>
</body>
</html>