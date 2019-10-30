<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="signup.css" />
    <meta charset="utf-8">
    <title>Register!</title>
  </head>
  <body>
    <img src="logo_3.png" alt="wwtbam" id="logo">
    <div class="container">
      <div class="form_holder">
        <form action="sign_up_submit.php" method="post">
          First Name: <input type="text" name="firstname" value="" required><br>
          Last Name: <input type="text" name="lastname" value="" required><br>
          Password: <input type="password" name="password" value="" required><br>
          <button type="submit" name="signUp">Sign Up</button>
          <button type="reset" name="reset">Reset</button>
        </form>
      </div>
    </div>
  </body>
</html>
