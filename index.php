<!DOCTYPE html>
<html>
   <head>
      <title> Registration</title>
   </head>

      <body>
      <div class="container">
      <h2> Registration </h2>
      <hr>
      <!-- Simple registration form -->
        <form action="formaction.php" method="post">
                     <label for="name">Name</label></br>
                <input type="text" name="name" placeholder="Name" id="name" required> </br>

                     <label for="email">Email</label></br>
                <input type="email" name="email" placeholder="Email" required></br>

                     <label for="password"> Password </label></br>
                <input type="password" name="password" placeholder="Password" id="psw" required></br>

                <button type="submit" name="registerbtn" id="btn"> Register </button>
               
        </form>
        <p> Already have an account? <a href="login.php"> Login </a>  </p>
       
        </div>
      </body>
</html>