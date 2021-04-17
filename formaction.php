<!DOCTYPE html>
<html>
   <head>
      <title> Home Page </title>
   </head>

      <body>
      <div class="container">
            
      <?php 
   //If action is from registration page
        if(isset($_POST["registerbtn"])) 
{
   //Convert data inputs to a new variable
    $name = $_POST ["name"];
    $email = $_POST ["email"];
    $password = $_POST ["password"];
   
    //Save new variable as an associative array
    $entry_data =  [
        "name" => $name,
        "email" => $email,
        "password" => $password
    ];
   
    // Welcome message
    echo "<h2> Welcome </h2>";
    echo "<hr>";
    echo "<p class='message'> Hello $name! You just registered <br>What action would you like to perform?";
    echo ("<br>");
    
    //Logout and Reset password form
   echo ("<form action='resetpsw.php'> <button type='submit' name='resetpsw' id='btn'> Reset password </button> </form>");
   echo ("<br>");
   echo ("<form action='login.php'> <button type='submit' name='logout' id='btn'> Logout </button> </form>");
   
   //Save as a new file in Entry folder
   file_put_contents("entry/". $entry_data["email"] . ".json", json_encode($entry_data));
   }

   //If action is from login page
   if(isset($_POST["loginbtn"])) 
   {

   
   //Check if user file exist
      if(file_exists("entry/" .$_POST["l_email"].".json"))
      {
         
   //Decode user file details
         $entry_data = file_get_contents("entry/". $_POST ["l_email"] . ".json");
         $user_data = json_decode($entry_data);
   
   //Convert data from user file to new variables
         $name = $user_data->name;
         $email = $user_data->email;
         $password = $user_data->password;

   //Check if password input is the same with the one in the file
         if($_POST['l_password'] === $password){

   //If Correct show login message
   echo "<h2> Welcome </h2>";
   echo "<hr>";
   echo ("<p class='message'>Hello $name! You just logged in <br>What action would you like to perform?");
   echo ("<br>");

   //Logout and Reset password form
   echo ("<form action='resetpsw.php'> <button type='submit' name='resetpsw' id='btn'> Reset password </button> </form>");
   echo ("<br>");
   echo ("<form action='login.php'> <button type='submit' name='logout' id='btn'> Logout </button> </form>");
          } 
          
          else 

          {

   //If password input is incorrect, show error message
            echo "<h2> Error </h2>";
            echo "<hr>";
            echo "<p class='message'> Incorrect password", " <a href='login.php'> Try again </a>";
            
          }


      } else 
         {

   // If user file not found, show message: Pleas register
            echo "<h2> Error </h2>";
            echo "<hr>";
            echo "<p class='message'> You do not have an account", " <a href='index.php'> Register </a>";
         }
   }
    

?>

      </div>
      </body>
</html>

