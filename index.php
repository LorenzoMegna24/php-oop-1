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
  };

  // $spider_man1 = new Movie('Spider-Man, Homecoming', 'Inglese', '2017');
  // var_dump($spider_man1);

  // $spider_man2 = new Movie('Spider-Man, Homecoming', 'Inglese', '2017');
  // var_dump($spider_man2);

  // $spider_man3 = new Movie('Spider-Man, No Way Home', 'Inglese', '2021');
  // var_dump($spider_man3);

  $arrayMovies = [
    new Movie('Spider-Man, Homecoming', 'Inglese', '2017'),
    new Movie('Spider-Man, Homecoming', 'Inglese', '2019'),
    new Movie('Spider-Man, No Way Home', 'Inglese', '2021'),
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Movie php</title>
</head>
<body>
  <h1>Movies</h1>
  <div class="container">
    <div class="row">
      <?php foreach( $arrayMovies as $element ) {?>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $element->title ?></h5>
            <h6><?php echo $element->year ?></h6>
            <p><?php echo $element->language ?></p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>

  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

