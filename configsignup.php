<!-- <?php

$emailErrorMsg="";
$passwordErrorMsg = ""; 
$fnameErrorMsg= "";
$lnameErrorMsg= "";
if ( isset($_POST['signup'])){

$emailValue = $_POST['emails'];
$passwordValue = $_POST['pass'];
$lastname=$_POST['lname'];
$firstname=$_POST['fname'];

if(empty($firstname)){

    $fnameErrorMsg= "first name must be filled out!";
}elseif(empty($lastname)){

    $lnameErrorMsg= "last name must be filled out!";
}elseif(empty($emailValue)){

    $emailErrorMsg= "email must be filled out!";
}else if(preg_match("/\w+(@gmail.com){1}$/", $emailValue)==0){

    $emailErrorMsg= "please enter a valid email!";

}elseif(empty($passwordValue)){
    $passwordErrorMsg= "password must be filled out!";
}elseif(strlen($passwordValue)<8){
    $passwordErrorMsg= "password must contains 8 chars!!";
}else{

   
    session_start();
    $_SESSION["email"] = $emailValue;
    $_SESSION["fname"] = $firstname;
    $_SESSION["lname"] = $lastname;
    header("Location: login.php");
}
}


?> /////////////////////////////////////////////////////////////////////////////-->


<?php
//include connection file
include('connection.php');
   

//create in instance of class Connection
$connection = new Connection();


//call the selectDatabase method
$connection->selectDatabase('poster');
$emailValue = "";
$lnameValue = "";
$fnameValue = "";
$passwordValue = "";
$errorMesage = "";
$successMesage = "";

if ( isset($_POST['signup'])){

$emailValue = $_POST['emails'];
$passwordValue = $_POST['pass'];
$lnameValue=$_POST['lname'];
$fnameValue=$_POST['fname'];

if(empty($fnameValue)){

    $errorMesage= "first name must be filled out!";
}elseif(empty($lnameValue)){

    $errorMesage= "last name must be filled out!";
}elseif(empty($emailValue)){

    $errorMesage= "email must be filled out!";
}else if(preg_match("/\w+(@gmail.com){1}$/", $emailValue)==0){

    $errorMesage= "please enter a valid email!";

}elseif(empty($passwordValue)){
    $errorMesage= "password must be filled out!";
}elseif(strlen($passwordValue)<8){
    $errorMesage= "password must contains 8 chars!!";
}else{
    //include the client file
    include('client.php');

    //create new instance of client class with the values of the inputs
    $client = new Client($fnameValue,$lnameValue,$emailValue,$passwordValue);/**/
    //,$idCityValue

    //call the insertClient method
    $client->insertClient('Clients',$connection->conn);

    //give the $successMesage the value of the static $successMsg of the class
    $successMesage = Client::$successMsg;

    //give the $errorMesage the value of the static $errorMsg of the class
    $errorMesage = Client::$errorMsg;

    // $emailValue = "";
    // $lnameValue = "";
    // $fnameValue = "";

    
    session_start();
    $_SESSION["email"] = $emailValue;
    $_SESSION["fname"] = $firstname;
    $_SESSION["lname"] = $lastname;
    header("Location: login.php");
}
}


?>