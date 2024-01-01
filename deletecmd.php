<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id=$_GET['id'];

include('connection.php');

$connection = new Connection();
$connection->selectDatabase('poster');

include('commande.php');

commande::deleteCommande('commandes',$connection->conn,$id);




}
?>