<?php include_once('./service/connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="src/img/note.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>HomePage - Articles</title>
</head>
<body>
  <a class="btn btn-info" href="index.php" role="button">LIST ALL</a>
  <a class="btn btn-primary" href="post.php" role="button">INSERT NEW</a>

  <h2>LISTING ARTICLES</h2>
  <hr>

  <?php
    include('./service/get.php');
  ?>
</body>
</html>