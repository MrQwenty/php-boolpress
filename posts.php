<?php
include "database.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

  <form class="form_tag" action="posts.php" method="get">
    <label for="text_tag">Tag</label>
  <input type="text" name="text_tag"  placeholder="filtra per...">
  <input type="submit" value="salva">

  </form>


   <?php
    $getTag = $_GET['text_tag'];
    ?>
        <div class="container">
        <?php
        foreach ($posts as $post) {
          foreach ($post['tag'] as $tag) {
           if ($getTag === $tag) {?>
          <div class="wrapper">
            <div class="title"><a href="http://localhost/php-boolpress/post-detail.php?slug=<?php echo $post['slug']; ?>"><?php echo $post['title']; ?></div>
            <div class="date"><?php echo $post['published_at'];?></div>
            <div class="content"><?php echo $post['content']; ?></div>
          </div>
      <?php
      };
      ?>

         </div>


    <?php  }
   }; ?>



  </body>
</html>
