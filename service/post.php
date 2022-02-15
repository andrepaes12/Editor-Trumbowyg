<?php
    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    // $array = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    // array_pop($array);

    if (!empty($data['postArticle'])){  //if button has been clicked
      // var_dump($array);
      $query = "INSERT INTO articles (title, content) VALUES (:title, :content)";
      $post = $conn->prepare($query);
      // $post->execute($array);
      $post->bindParam('title', $data['title'], PDO::PARAM_STR);
      $post->bindParam('content', $data['content'], PDO::PARAM_STR);
      $post->execute();

      if ($post->rowCount()){
        echo "<p style='color: blue'>Article has been inserted with success!</p>";
      } else{
        echo "<p style='color: red'>Error: Article has not been inserted!</p>";
      }
    }

  ?>