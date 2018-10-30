<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>index.html</title>
  </head>
  <body>
  <h1>Piccean<h1>
    <?php
    include("./model/db_model.php");
    $test = test();
    echo $test["name"];
      ?>
  </body>
</html>
