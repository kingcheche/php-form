<!DOCTYPE html>
<html>
   <head>

      <title> PHP Form </title>

   </head>

      <body>
      
      <div class="container">
      
      <?php 
      
       //Message if user is coming from reset password button
       if(isset($_POST["resetbtn"])) {

        if ($_POST["n_password"] != $_POST["nc_password"]) {
            echo "<h2> Error </h2>";
            echo "<hr>";
           echo "New password not confirmed, <a href='resetpsw.php'>Try again</a>";
           echo "<br>";
        } else {
  
            echo "<h2> Change successful </h2>";
            echo "<hr>";
           echo "<p class='message'>Login with new password <a href='login.php'>here</a></p>";
        }
        }
        ?>