<?php
  //receive image data =>  plugins: { upload: { fileFieldName: 'image',
  $image_data = $_FILES['image'];

  //DirPath
  $dir_path = 'src/img/';

  //image with fake name
  $rand_name = substr(md5(rand()), 0, 16);
  $image_name = $image_data['name'];
  $extension = pathinfo($image_name, PATHINFO_EXTENSION);
  $fake_name = $rand_name . '.' . $extension;

  //moving the image
  // move_uploaded_file($image_data['tmp_name'], $dir_path . $image_name);
  move_uploaded_file($image_data['tmp_name'], $dir_path . $fake_name);

  //localhost
  $localhost = "http://localhost/text-editor/";
  
  //json
  $return['success'] = true;
  // $return['file'] = $localhost.$dir_path.$image_name;
  $return['file'] = $localhost.$dir_path.$fake_name;

  echo json_encode($return);

?>