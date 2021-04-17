<?php session_start();?>
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


        // Give error if confirmation password is not the same with new password
        if ($_POST["n_password"] != $_POST["nc_password"]) {
            echo "<h2> Error </h2>";
            echo "<hr>";
           echo "New password not confirmed, <a href='resetpsw.php'>Try again</a>";
           echo "<br>";
        } else {

            //Decode user file details
            
         $entry_data = file_get_contents("entry/" .$_SESSION["email"] .".json");
         $user_data = json_decode($entry_data);
   
   //Convert data from user file to new variables
   $name = $user_data->name;
   $email = $user_data->email;
   $password = $user_data->password;
   //change password in file to new password
   $password = $_POST["n_password"];

   //create a new array and save the new data      
   $new_data =  [
            "name" => $user_data->name,
            "email" => $user_data->email,
            "password" => $_POST["n_password"]
        ];

        file_put_contents("entry/" .$_SESSION["email"] . ".json", json_encode($new_data));


  //password change successful
            echo "<h2> Change successful </h2>";
            echo "<hr>";
           echo "<p class='message'>Login with new password <a href='login.php'>here</a></p>";
        }
        }

        ?>