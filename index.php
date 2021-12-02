<?php

require_once "data/movies.php";
require_once "classes/Movie.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

  <main class="container py-4">
    <div class="row row-cols-2">
      <!-- start PHP -->
      <?php foreach ($movies as $movie) {
        $singleMovie = new Movie($movie); ?>
        <div class="col border border-dark py-2">
          <h3 class="text-primary m-0 pb-2 border-bottom border-dark"><?php echo $singleMovie->movieData["title"] ?></h3>
          <div class="py-2 text-end">
            <p class="m-0"><strong>Director : </strong> <?php echo $singleMovie->movieData["director"] ?></p>
            <p class="m-0"><strong>Lenght : </strong> <?php echo $singleMovie->movieData["minutes"] ?></p>
            <p class="m-0"><strong>Year : </strong> <?php echo $singleMovie->movieData["year"] ?></p>
            <p class="m-0"><strong>Rating : </strong> <?php echo $singleMovie->movieData["rating"] ?>/10</p>
          </div>
        </div>
      <?php } ?>
      <!-- end PHP -->
    </div>

  </main>

</body>

</html>