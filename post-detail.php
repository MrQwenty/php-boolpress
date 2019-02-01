<?php
include "database.php";
$slug = $_GET['slug'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.min.js" charset="utf-8"></script>
    <title></title>
  </head>
  <body>

  <div class="container">
  <?php
  foreach ($posts as $post) {
    if ($slug === $post['slug']) {?>
      <div class="wrapper" id="slug" slug="<?php echo $post['slug']; ?>">

        <div class="title_detail"><?php echo $post['title']; ?></div>
        <div class="date_detail"><?php echo $post['published_at'];?></div>
        <div "img_cont">
          <div class="image"><img src="<?php echo $post['image'];?>"></div>
          <div class="content_detail"><?php echo $post['content']; ?></div>
        </div>


          <div class="tags">
          TAG:
          <?php
            foreach ($post['tag'] as $tag) {?>

              <?php echo $tag; ?>

        <?php    }
           ?>
        </div>

      </div>

<?php
    }
};
?>


   </div>
   <div class="cardPost"></div>

   <script id="post-template" type="text/x-handlebars-template">

      <div class="name">{{nome}}<div class="email">{{email}}</div></div>

      <div class="comment">{{comment}}</div>
    </div>
  </script>




    <script src="main.js" charset="utf-8"></script>
  </body>
</html>
