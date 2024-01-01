<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id=$_GET['id'];

include('connection.php');

$connection = new Connection();
$connection->selectDatabase('poster');

include('produit.php');

produit::deleteProduit('produits',$connection->conn,$id);




}
?>