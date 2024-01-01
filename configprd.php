<?php
//include connection file
include('connection.php');
   

//create in instance of class Connection
$connection = new Connection();


//call the selectDatabase method
$connection->selectDatabase('poster');
$nameValue = "";
$priceValue = "";
$lienValue = "";
$errorMesage = "";
$successMesage = "";

if ( isset($_POST['ajoutprd'])){

$nameValue = $_POST['name'];
$priceValue = $_POST['price'];
$lienValue = $_POST["lien"];


if(empty($nameValue)){

    $errorMesage= "name must be filled out!";
}elseif(empty($priceValue)){

    $errorMesage= "price must be filled out!";
}elseif(empty($lienValue)){

    $errorMesage= "link must be filled out!";
}else{
    //include the client file
    include('produit.php');

    //create new instance of client class with the values of the inputs
    $produit = new Produit($nameValue,$priceValue,$lienValue);/**/
    //,$idCityValue

    //call the insertClient method
    $produit->insertProduit('Produits',$connection->conn);

    //give the $successMesage the value of the static $successMsg of the class
    $successMesage = Produit::$successMsg;

    //give the $errorMesage the value of the static $errorMsg of the class
    $errorMesage = Produit::$errorMsg;

    // $emailValue = "";
    // $lnameValue = "";
    // $fnameValue = "";

    
    session_start();
    $_SESSION["name"] = $nameValue;
    $_SESSION["price"] = $priceValue;
    $_SESSION["lien"] = $lienValue;
    header("Location: createproduit.php");
}
}


?>