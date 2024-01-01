<!-- <?php

// $emailErrorMsg="";
// $passwordErrorMsg = "";   
// if ( isset($_POST['login'])){


// $emailValue = $_POST['emaill'];
// $passwordValue = $_POST['passv'];

// if(empty($emailValue)){

//     $emailErrorMsg= "email must be filled out!";
// }elseif(preg_match("/\w+(@gmail.com){1}$/", $emailValue)==0){

//     $emailErrorMsg= "please enter a valid email!";

// }elseif(empty($passwordValue)){
//     $passwordErrorMsg= "password must be filled out!";

// }else{

   
//     session_start();
//     $_SESSION["email"] = $emailValue;
//     header("Location: home.php");
// }
// }

?> -->



<?php
//include connection file
include('connection.php');
   

//create in instance of class Connection
$connection = new Connection();


//call the selectDatabase method
$connection->selectDatabase('poster');


$emailErrorMsg="";
$passwordErrorMsg = ""; 
$emailValue = $_POST['emaill'];
$passwordValue = $_POST['passv'];


if($emailValue=='admin' && $passwordValue=='admin123'){
header('location:admin.php');
}elseif ( isset($_POST['login'])){

$emailValue = $_POST['emaill'];
$passwordValue = $_POST['passv'];

if(empty($emailValue)){

    $emailErrorMsg= "email must be filled out!";
}elseif(preg_match("/\w+(@gmail.com){1}$/", $emailValue)==0){

    $emailErrorMsg= "please enter a valid email!";

}elseif(empty($passwordValue)){
    $passwordErrorMsg= "password must be filled out!";

}else{   
    // session_start();
    // $_SESSION["email"] = $emailValue;
    // header("Location: home.php");

    // $client = new Client('','',$emailValue,$passwordValue);

    $sql="SELECT * FROM Clients WHERE email ='$emailValue'"; //AND PW="$password"
    $reponse = $connection->conn->query($sql);
if ($reponse) {
    $donnees = $reponse->fetch_assoc();
    if ($donnees && password_verify($passwordValue, $donnees['password'])) {
        session_start();
        $_SESSION["email"] = $emailValue;
        header('location: home.php');
    } else {
        $passwordErrorMsg= "email or password doesn't match!";
    }     
}

}
}

?>
<!-- $reponse = $connection->conn->query($sql);
if ($reponse) {
    $donnees = $reponse->fetch();
    if ($donnees && password_verify($passwordValue, $donnees['password'])) {
        header('location: home.php');
    } else {
        header('Location:signup.php');
    } -->
