<?php
  class Movie{
    public $title;
    public $language;
    public $year;

    function __construct ($_title, $_language, $_year){
      $this->title = $_title;
      $this->language = $_language;
      $this->year = $_year;
    }
  }

  $spider_man1 = new Movie('Spider-Man, Homecoming', 'Inglese', '2017');
  var_dump($spider_man1);

  $spider_man2 = new Movie('Spider-Man, Far From Home', 'Inglese', '2019');
  var_dump($spider_man2);

  $spider_man3 = new Movie('Spider-Man, No Way Home', 'Inglese', '2021');
  var_dump($spider_man3);


?>

