<?php session_start();?>
<!DOCTYPE html>
<html>
   <head>

      <title> Reset password </title>
      <link rel="stylesheet" href="styles.css">

   </head>

      <body>
      
      <div class="container">      
      
      <?php 
       
       //Message if user is coming from reset password button
       if(isset($_POST["resetbtn"])) {


        // Give error if confirmation password is not the same with new password
        if ($_POST["n_password"] != $_POST["nc_password"]) {
            echo "<h2 class='error'> Error </h2>";
            echo "<hr>";
           echo "<p>New password not confirmed, <a href='resetpsw.php'>Try again</a></p>";
           echo "<br>";
        } else {

            //Decode user file details
            
         $entry_data = file_get_contents("entry/" .$_SESSION["email"] .".json");
         $user_data = json_decode($entry_data);
   
   //Convert data from user file to new variables
   $name = $user_data->name;
   $email = $user_data->email;
   $password = $user_data->password;
   //change password in file to new password - With password encryption
   $password = password_hash($_POST["n_password"], PASSWORD_BCRYPT);

   //create a new array and save the new data      
   $new_data =  [
            "name" => $user_data->name,
            "email" => $user_data->email,
            "password" => $password
        ];

        file_put_contents("entry/" .$_SESSION["email"] . ".json", json_encode($new_data));


  //password change successful
  
            echo "<h2 class='success'> Change successful</h2>";
            echo "<hr>";
           echo "<p class='message'>Login with new password <a href='login.php'>here</a></p>";
        }
        }

        ?>