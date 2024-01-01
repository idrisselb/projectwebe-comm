<?php
session_start();
session_destroy();
include('configsignup.php');
?>

<!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title>Sign Up</title> 

  <link rel="stylesheet" href="style.css"> 
  <link rel="icon" href="img/logo.png" type="image">

 </head> 

 <body>

  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

   <div class="signin"> 

    <div class="content"> 

        <h2>Sign Up</h2> 

        <form method="post" action=""> 

            <div class="inputBox"> 
                <input value="<?php if(isset($fnameValue)) echo $fnameValue ?>" type="text" name="fname" require> <i>First Name</i>     
            </div> 
                <!-- <small style="color:red"><?php echo $fnameErrorMsg ?></small> -->

            <div class="inputBox"> 
                <input value="<?php if(isset($lnameValue)) echo $lnameValue ?>" type="text" name="lname" require> <i>Last Name</i>  
            </div>

                <!-- <small style="color:red"><?php echo $lnameErrorMsg ?></small> -->

            <div class="inputBox"> 
                <input value="<?php if(isset($emailValue)) echo $emailValue ?>" type="text" name="emails" require> <i>E-mail</i>                 
            </div> 

                <!-- <small style="color:red"><?php echo $emailErrorMsg ?></small> -->

            <div class="inputBox"> 
                <input id='passw' type="password" name="pass" require> <i>Password</i>                 
            </div> 

                <!-- <small style="color:red"><?php echo $passwordErrorMsg ?></small> -->

            <div class="links"> 
                <div>
                    <input type="checkbox" id="show" onclick="showPass()"> <label for="show" style="color:white">Show Password</label>
                </div>
                <a href="login.php">Login</a> 
            </div> 

            <div class="inputBox">                 
                <div style="color:red"><?php if(!empty($errorMesage)) echo $errorMesage;if(!empty($successMesage)) echo $successMesage ?></div><br>
                <input name="signup" type="submit" value="Sign Up">                 
            </div> 

        </form> 

    </div> 

   </div> 

  </section> 
  <script>
        function showPass(){

            var passInput = document.getElementById('passw');

            if(passInput.type == 'password'){
                passInput.type = 'text';
            }else if(passInput.type == 'text'){
                passInput.type = 'password';
            }
        }
    </script>
 </body>

</html>