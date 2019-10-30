<!DOCTYPE html>
<html>
<head>
  <title>WWTBAM</title>
  <link rel="stylesheet" type="text/css" href="signup.css" />
</head>
<body>

<?php

 // Define variables and initialize with empty values
$errors = array();
 $fname = $lname = $pass = "";

 if(isset($_SERVER["REQUEST_MODE"]) == "POST")
 {
   if(empty($_POST["firstname"]))
   {
     $errors[] = "First name missing";
   }else
   {
    $fname = $_POST["firstname"];
   }

   if(empty($_POST["lastname"]))
   {
     $errors[] = "Last name missing";
   }else
   {
     $lname = $_POST["lastname"];
   }
 }

 if(empty($_POST["password"]))
 {
   $errors[] = "Password missing";
 }else
 {
   $pass = $_POST["password"];
 }

if(empty($errors))
{

  /*$file = "database.txt";
  $file_connect = fopen($file, "a+") or die("Can't open the file.");
  $new_data = $_POST["firstname"] ." ". $_POST["lastname"] ." ". $_POST["password"];
  fwrite($file_connect, $new_data."\n");
  fclose($file_connect);*/

  echo " <p><a href=\"game_logic.php\"><img src=\"logo_3.png\" alt=\"wwtbam\" id=\"logo\"></a></p>";
}
else{
  echo "Fill out every fields!";
}


 ?>
</body>
</html>
