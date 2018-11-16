<?php
global $content;
$nav = new Nav();
$main = new $content['class']();
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
   <meta charset="utf-8" />
   <title><?=$content['title']?></title>
   <link rel="stylesheet" href="/css/app.css" />
  </head>

  <body>

    <nav>
      <?php $nav->show() ?>
    </nav>

    <main>
      <?php $main->{$content['method']}($content['arg']) ?>
    </main>

    <footer>
      © 2018
    </footer>

  </body>
</html>
