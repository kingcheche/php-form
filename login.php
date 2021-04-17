<!DOCTYPE html>
<html>
   <head>

      <title> PHP Form </title>

   </head>

      <body>
      <div class="container">
      <h2> Login </h2>
      <hr>
      <?php 
      
      //Message if user is coming from reset password button
      if(isset($_POST["resetbtn"])) {
          echo "Login with new password";}

      //Message if user is coming from cancel password button
          if(isset($_POST["cancelbtn"])) {
            echo "Continue with old password";
      } ?>
 <!-- Simple login form -->
        <form action="formaction.php" method="post">
                    
                     <label for="l_email">Email</label></br>
                <input type="email" name="l_email" placeholder="Email" required></br>

                     <label for="l_password"> Password </label></br>
                <input type="password" name="l_password" placeholder="Password" id="psw" required></br>
                
                <button type="submit" name="loginbtn" id="btn"> Login </button>
        </form>
        <p> Don't have an account? <a href="index.php"> Register </a> </p>
        </div>
      </body>
</html>