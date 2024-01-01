<?php

class Commande{

    public $id;
    public $cmd_date;
    public $idClt;
    
    public static $errorMsg = "";
    
    public static $successMsg="";
    
    
    public function __construct($idClt){
    
        //initialize the attributs of the class with the parameters, and hash the password
        $this->idClt = $idClt;
    }
    
    public function insertCommande($tableName,$conn){
    
    //insert a client in the database, and give a message to $successMsg and $errorMsg
        $sql = "INSERT INTO $tableName (idClt)
        VALUES ('$this->idClt')";/**//**/
        if (mysqli_query($conn, $sql)) {
            self::$successMsg= "New record created successfully";

        } else {
            self::$errorMsg ="Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
    }
    
    public static function  selectAllCommandes($tableName,$conn){
    
        //select all the client from database, and inset the rows results in an array $data[]
        $sql = "SELECT id, cmd_date, idClt FROM $tableName ";/**/
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $data=[];
        while($row = mysqli_fetch_assoc($result)) {
        
            $data[]=$row;
        }
        return $data;
        }   
    
    }
    
    static function selectCommandeById($tableName,$conn,$id){
        //select a client by id, and return the row result
        $sql = "SELECT cmd_date, idClt FROM $tableName  WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
        
        }
        return $row;
    
    }
    
    // static function updateCommande($commade,$tableName,$conn,$id){
    //     //update a client of $id, with the values of $client in parameter
    //     //and send the user to read.php
    //     $sql = "UPDATE $tableName SET cmd_date='$commande->cmd_date',idClt='$commande->idClt' WHERE id='$id'";
    //         if (mysqli_query($conn, $sql)) {
    //             self::$successMsg= "New record updated successfully";
    //             header("Location:admincmd.php");
    //         } else {
    //             self::$errorMsg= "Error updating record: " . mysqli_error($conn);
    //         }
    
    // }
    
    static function deleteCommande($tableName,$conn,$id){
        //delet a client by his id, and send the user to read.php
        $sql = "DELETE FROM $tableName WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
            self::$successMsg= "Record deleted successfully";
            header("Location:admincmd.php");
        } else {
            self::$errorMsg= "Error deleting record: " . mysqli_error($conn);
        }
      
    }
    
    public static function selectCommandeByIdClt($tableName,$conn,$idClt){
    
        $sql = "SELECT id, cmd_date,idClt FROM $tableName  WHERE idClt='$idClt'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $data=[];
        while($row = mysqli_fetch_assoc($result)) {
        
            $data[]=$row;
        }
        return $data;
    }

    }

}


?>