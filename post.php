<?php include_once('./service/connection.php'); 
  //https://alex-d.github.io/Trumbowyg/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="src/img/note.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="src/Trumbowyg-main/dist/ui/trumbowyg.min.css">
  <link rel="stylesheet" href="src/Trumbowyg-main/dist/plugins/emoji/ui/trumbowyg.emoji.min.css">
  <title>New Article</title>
</head>
<body>
  <a class="btn btn-info" href="index.php" role="button">LIST ALL</a>
  <a class="btn btn-primary" href="post.php" role="button">INSERT NEW</a>

  <h1>INSERT A NEW ARTICLE</h1>

  <?php
    include('./service/post.php');
  ?>

  <form action="" method="post">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" placeholder="Article's Title">
    <br><br>

    <label for="content">Content:</label>
    <textarea name="content" id="trumbowyg-content" cols="30" rows="10" placeholder="Article's Content"></textarea>
    <br><br>

    <input class="btn btn-success" type="submit" value="SUBMIT" name="postArticle">
  </form>

  <?php include('./service/scripts.html')?>
</body>
</html>