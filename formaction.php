<!DOCTYPE html>
<html>
   <head>
      <title> Home Page </title>
   </head>

      <body>
      <div class="container">
            
      <?php
        if(isset($_POST["registerbtn"])) 
{
    $name = $_POST ["name"];
    $email = $_POST ["email"];
    $password = $_POST ["password"];
   
    $entry_data =  [
        "name" => $name,
        "email" => $email,
        "password" => $password
    ];

    echo "<h2> Welcome </h2>";
      echo "<hr>";
    echo "<p class='message'> Hello $name! You just registered <br>What action would you like to perform?";
    echo ("<br>");

   echo ("<form action='resetpsw.php'> <button type='submit' name='resetpsw' id='btn'> Reset password </button> </form>");
     echo ("<br>");
   echo ("<form action='login.php'> <button type='submit' name='logout' id='btn'> Logout </button> </form>");
    file_put_contents("entry/". $entry_data["email"] . ".json", json_encode($entry_data));
   }

   if(isset($_POST["loginbtn"])) 
   {

      if(file_exists("entry/" .$_POST["l_email"].".json"))
      {
         $entry_data = file_get_contents("entry/". $_POST ["l_email"] . ".json");
         $user_data = json_decode($entry_data);
         //to access user data
         $name = $user_data->name;
         $email = $user_data->email;
         $password = $user_data->password;

         if($_POST['l_password'] === $password){
            echo "<h2> Welcome </h2>";
      echo "<hr>";
            echo ("<p class='message'>Hello $name! You just logged in <br>What action would you like to perform?");
         echo ("<br>");

   echo ("<form action='resetpsw.php'> <button type='submit' name='resetpsw' id='btn'> Reset password </button> </form>");
     echo ("<br>");
   echo ("<form action='login.php'> <button type='submit' name='logout' id='btn'> Logout </button> </form>");
          } 
          
          else 

          {
            echo "<h2> Error </h2>";
            echo "<hr>";
            echo "<p class='message'> Incorrect password", " <a href='login.php'> Try again </a>";
            
          }


      } else 
         {
            echo "<h2> Error </h2>";
            echo "<hr>";
            echo "<p class='message'> You do not have an account", " <a href='index.php'> Register </a>";
         }
   }
    

?>

      </div>
      </body>
</html>

