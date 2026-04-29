<?php include "function.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja stranka</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php $file_path = "parts/header.php"; if(!include($file_path)) { echo "Failed to include $file_path"; } ?>

<main>
  <section class="banner">
    <div class="container text-white">
      <h1>Portfolio</h1>
    </div>
  </section>
  <section class="container">
    <div class="row">
      <div class="col-25 portfolio text-white text-center" id="portfolio-1">Web stranka 1</div>
      <div class="col-25 portfolio text-white text-center" id="portfolio-2">Web stranka 2</div>
      <div class="col-25 portfolio text-white text-center" id="portfolio-3">Web stranka 3</div>
      <div class="col-25 portfolio text-white text-center" id="portfolio-4">Web stranka 4</div>
    </div>
    <div class="row">
      <div class="col-25 portfolio text-white text-center" id="portfolio-5">Web stranka 5</div>
      <div class="col-25 portfolio text-white text-center" id="portfolio-6">Web stranka 6</div>
      <div class="col-25 portfolio text-white text-center" id="portfolio-7">Web stranka 7</div>
      <div class="col-25 portfolio text-white text-center" id="portfolio-8">Web stranka 8</div>
    </div>
  </section>
</main>

<?php $file_path = "parts/footer.php"; if(!include($file_path)) { echo "Failed to include $file_path"; } ?>
<script src="js/menu.js"></script>
</body>
</html>
