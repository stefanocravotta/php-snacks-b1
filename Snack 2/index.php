<?php


$isAuth = true;

if(empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])){
    $error = 'Inserire tutti i dati';
    $isAuth = false;
}elseif(strlen($_GET['name']) < 3){
    $error = 'Il nome deve essere lungo almeno 3 caratteri';
    $isAuth = false;
}elseif(!strpos($_GET['mail'], '@') || !strpos($_GET['mail'], '.') ){
    $isAuth = false;
    $error = 'La mail deve avere la chicciola e il punto';
}elseif(!is_numeric($_GET['age'])){
    $isAuth = false;
    $error = 'Age deve essere un numero';
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
    <title>Snack 2</title>
</head>
<body>
    <h1>
        <?php echo $output; ?>
    </h1>
    <?php if(!$isAuth) : ?>
        <i>Errore : <?php echo $error ?></i>
    <?php endif ?>
</body>
</html>