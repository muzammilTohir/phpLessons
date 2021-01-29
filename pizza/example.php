<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="KeyAndPair.php" method="post">
      <input type="text" name="numbers">
      <br>
      <input type="submit">
    </form>

    <?php
      $phones = array("Ibrohim"=>977547541,"Dilshod"=>977550209);
      #print $phones["Ibrohim"];
      echo $phones[$_POST["numbers"]];
     ?>
  </body>
</html>
