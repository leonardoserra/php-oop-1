<?php 


require __DIR__ . '/Models/Classes.php';
require __DIR__ . '/db.php';


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
    <?php
        $firstMovie->getMovieInfo();
        echo '<br>';
        $secondMovie->getMovieInfo();
        echo '<br>';
        $thirdMovie->getMovieInfo();
    ?>
    
</body>
</html>