<?php 
class Movie{
    public $title;
    public $year;

    public function __construct($title, $year){
        $this->title = $title;
        $this->year = $year;
    }

    public static function getMovieInfo($movie){
        echo $movie->title . ' - ' . $movie->year;
    }
}


$firstMovie = new Movie('Toy Story', '1995');
$secondMovie = new Movie('Pokemon', '1998');
$thirdMovie = new Movie('Avengers', '2010');

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

        Movie::getMovieInfo($firstMovie);
        echo '<br>';
        Movie::getMovieInfo($secondMovie);
        echo '<br>';
        Movie::getMovieInfo($thirdMovie);
    ?>
    
</body>
</html>