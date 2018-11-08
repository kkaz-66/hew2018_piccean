<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>index.html</title>
    <style type="css"></style>
  </head>
  <body>
  <h1>Piccean<h1>
    <img src="./images/test.png">
    <?php
    include("./model/db_model.php");
    $test = test();
    echo $test["name"];
      ?>
  </body>
</html>
