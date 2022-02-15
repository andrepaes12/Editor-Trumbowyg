Posts page using the Trumbowug package (access https://alex-d.github.io/Trumbowyg/ for more info)

1- Connect to server (see connection.php file)

2- In the index.php file: Into HTML structure, include the get.php file (from service folder)

3- In the post.php file: 
    * Include the post.php file (from service folder)
    * Insert a form HTML with POST method
    * Based on Trumbowyg Documentation, insert the scripts (see scripts file into service folder)

4- In the scripts file was included a plugin for image upload. It has the serverPath params, then it is necessary to create the upload.php file (see service folder) as Trumbowyg Documentation.