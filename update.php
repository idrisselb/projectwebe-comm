<?php
session_start();
$emailValue = "";
$lastname = "";
$firstname = "";

$errorMesage = "";
$successMesage = "";

include('connection.php');
   

//create in instance of class Connection
$connection = new Connection();


//call the selectDatabase method
$connection->selectDatabase('poster');

    //include the client file
include('client.php');
if($_SERVER['REQUEST_METHOD']=='GET'){

    $id = $_GET['id'];

//call the staticbselectClientById method and store the result of the method in $row
$row=Client::selectClientById('Clients',$connection->conn,$id);

$emailValue = $row["email"];
$lastname = $row["lastname"];
$firstname = $row["firstname"];

}

else if(isset($_POST["update"])){

    $emailValue = $_POST["emails"];
    $lastname = $_POST["lname"];
    $firstname = $_POST["fname"];
   

    if(empty($emailValue) || empty($firstname) || empty($lastname) ){

            $errorMesage = "all fileds must be filed out!";

    }else{

        
        //create a new instance of client ($client) with inputs values
        $client = new Client($firstname,$lastname,$emailValue,'');

        //call the static updateClient method and give $client in the parameters
        Client::updateClient($client,'Clients',$connection->conn, $_GET['id']);
            
    }
}

?>

<!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title>Update</title> 

  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="img/logo.png" type="image"> 

 </head> 

 <body>

  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

   <div class="signin"> 

    <div class="content"> 

        <h2>Update</h2> 

        <form method="post"> 

            <div class="inputBox"> 
                <input value="<?php echo $firstname ?>" type="text" name="fname" require> <i>First Name</i>     
            </div> 
                <!-- <small style="color:red"><?php echo $fnameErrorMsg ?></small> -->

            <div class="inputBox"> 
                <input value="<?php echo $lastname ?>" type="text" name="lname" require> <i>Last Name</i>  
            </div>

                <!-- <small style="color:red"><?php echo $lnameErrorMsg ?></small> -->

            <div class="inputBox"> 
                <input value="<?php if(!empty($emailValue)) echo $emailValue ?>" type="text" name="emails" require> <i>E-mail</i>                 
            </div> 

                <!-- <small style="color:red"><?php echo $emailErrorMsg ?></small> -->

 

            <div class="inputBox">                 
                <div style="color:red"><?php if(!empty($errorMesage)) echo $errorMesage;if(!empty($successMesage)) echo $successMesage ?></div><br>
                <input name="update" type="submit" value="UPDATE">
            </div>

            <div class="links">
                <a href="admin.php">Cancel</a>
            </div>

        </form> 

    </div> 

   </div> 

  </section> 
 </body>

</html>