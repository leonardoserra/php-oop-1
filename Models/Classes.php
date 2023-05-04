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
?>