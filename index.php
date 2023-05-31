<?php
  class Movie{
    public $title;
    public $language;
    public $year;

    function _construct ($_title, $_language, $_year){
      $this->title = $_title;
      $this->language = $_language;
      $this->year = $_year;
    }
  }
?>