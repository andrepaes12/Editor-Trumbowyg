<?php
    $query = "SELECT idarticle, title, content FROM articles ORDER BY idarticle DESC";
    $get = $conn->prepare($query);
    $get->execute();

    while($row_article = $get->fetch(PDO::FETCH_ASSOC)){
      // var_dump($row_article);
      extract($row_article);
      echo "<h6>ID: $idarticle <br></h6>";
      echo "<h5>Title:<b style='color: blue'> $title </b><br></h5>";
      echo "<h6> $content <br></h6>";
      echo "<hr>";
    }
  ?>