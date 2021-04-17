<!DOCTYPE html>
<html>
   <head>
      <title> Reset Password</title>
   </head>

      <body>
      <div class="container">
      <h2> Reset Password </h2>
      <hr>
        <form action="login.php" method="post">
                     <label for="n_password">New password</label></br>
                <input type="password" name="n_password" placeholder="Input new password" id="psw" required> </br>

                <button type="submit" name="resetbtn" id="btn"> Reset </button>
               
        </form>
        <br>
        <form action="login.php" method="post">
        <button type="submit" name="cancelbtn" id="btn"> Cancel </button>
       </form>
        </div>
      </body>
</html>