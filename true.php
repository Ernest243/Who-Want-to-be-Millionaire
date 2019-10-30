<?php
session_start();
include("play.php");
$_SESSION["check"] = $questions[0];

if($_SESSION["First Question"] === $_SESSION["check"])
{
  echo " Correct answer!." ."<p><a href=\"true_2.php\">Next Question</a></p>";
  $_SESSION["score"]++;
  echo "<p>Score: " .$_SESSION["score"];
}
 ?>
