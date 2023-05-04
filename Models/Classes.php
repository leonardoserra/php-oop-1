<?php
class Movie{
    public $title;
    public $year;

    public function __construct($title, $year){
        $this->title = $title;
        $this->year = $year;
    }

    public function getMovieInfo(){
        echo $this->title . ' - ' . $this->year;
    }
}
?>