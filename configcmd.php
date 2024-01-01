<?php
//include connection file
include('connection.php');
   

//create in instance of class Connection
$connection = new Connection();


//call the selectDatabase method
$connection->selectDatabase('poster');
$idcltValue = "";
$errorMesage = "";
$successMesage = "";

if ( isset($_POST['buy'])){

$idcltValue = $_POST['idClt'];

    //include the client file
    include('commande.php');

    //create new instance of client class with the values of the inputs
    $commande = new Commande($idClt);/**/
    //,$idCityValue

    //call the insertClient method
    $commande->insertCommande('Commandes',$connection->conn);

    //give the $successMesage the value of the static $successMsg of the class
    $successMesage = Commande::$successMsg;

    //give the $errorMesage the value of the static $errorMsg of the class
    $errorMesage = Commande::$errorMsg;

    // $emailValue = "";
    // $lnameValue = "";
    // $fnameValue = "";

    
    session_start();
    // $_SESSION["name"] = $nameValue;
    // $_SESSION["price"] = $priceValue;
    header("Location: article.php");

}


?>