<!DOCTYPE html>
<html>
 <head>
   <title>Login CodeIgniter</title>
 </head>
 <body>
   <h1>Login con CodeIgniter</h1>

     <?php

        if(isset($logout_message)) {
        echo "<div class='message'>";
        echo $logout_message;
        echo "</div>";
        }
        ?>

   <?php echo validation_errors(); ?>
   <?php 

 echo form_open('login/user_login_process'); 

 ?> <label for="usuario">Username:</label> <input type="text" size="20" id="usuario" name="usuario"/> <br/> <label for="contrasena">Password:</label> <input type="password" size="20" id="contrasena" name="contrasena"/> <br/> <input type="submit" value="Login"/> </form> </body> </html>