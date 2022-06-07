<?php

$paragrafo = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere, suscipit rerum nam placeat quisquam velit. aperiam sint iste porro magni nobis? Nam dolorum eaque doloribus suscipit. mollitia velit porro voluptate quasi nostrum sapiente deserunt asperiores quo repudiandae nulla dolor iusto voluptates, blanditiis fugit reiciendis. nisi officiis neque, culpa consequatur tempore";

$paragrafoEsploso = explode('.', $paragrafo);

echo "<pre> ";
var_dump($paragrafoEsploso);
echo "</pre>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <?php for($i = 0; $i < count($paragrafoEsploso); $i++) : ?>
        <li> <?php echo $paragrafoEsploso[$i] ?></li>
    <?php endfor; ?>
</ul>
</body>
</html>