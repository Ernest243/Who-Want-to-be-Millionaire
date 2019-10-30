<?php
session_start();
$_SESSION["score"] = 0;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Game</title>
    <link rel="stylesheet" href="game-design.css" type="text/css">
  </head>
  <body>
    <div class="container">
      <div class="questionHolder">
        <p id="Question"><?php include("play.php"); echo $questions[0];  ?></p>
        <p id="Answer1"><a href="true.php"><img src="true.png", alt="true"></a></p>
        <p id="Answer2"><a href="false.php"><img src="false.png", alt="false"></a></p>
        <p id="score">Score: <?php echo $_SESSION['score']; ?> </p>

      </div>
    </div>
  </body>
</html>
