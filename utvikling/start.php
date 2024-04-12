<!DOCTYPE html>
<html lang="no">
  <head>
    <link rel="stylesheet" href="../hoved.css">
  </head>
  <body>
    <div class="grid-container">
      <div class="item1"><?php include '../topMenu.php';?></div>
      <div class="item2"><?php include 'sideMenu.php';?></div>
      <div class="item3"><?php include $_GET['hovedSide'];?></div>  
      <div class="item4"><?php include '../reklame.php';?></div>
      <div class="item5"><?php include '../footer.php';?></div>
    </div>
  </body>
</html>