<?php

class Produit{

    public $id;
    public $name;
    public $price;
    public $lien;
    
    public static $errorMsg = "";
    
    public static $successMsg="";
    
    
    public function __construct($name,$price,$lien){
    
        //initialize the attributs of the class with the parameters, and hash the password
        $this->name = $name;
        $this->price = $price;
        $this->lien=$lien;
    }
    
    public function insertProduit($tableName,$conn){
    
    //insert a client in the database, and give a message to $successMsg and $errorMsg
        $sql = "INSERT INTO $tableName (name, price,lien)
        VALUES ('$this->name', '$this->price', '$this->lien')";/**//**/
        if (mysqli_query($conn, $sql)) {
            self::$successMsg= "New record created successfully";

        } else {
            self::$errorMsg ="Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
    }
    
    public static function  selectAllProduits($tableName,$conn){
    
        //select all the client from database, and inset the rows results in an array $data[]
        $sql = "SELECT id, name, price, lien FROM $tableName ";/**/
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
    
    static function selectProduitById($tableName,$conn,$id){
        //select a client by id, and return the row result
        $sql = "SELECT name, price ,lien FROM $tableName  WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
        
        }
        return $row;
    
    }
    
    static function updateProduit($produit,$tableName,$conn,$id){
        //update a client of $id, with the values of $client in parameter
        //and send the user to read.php
        $sql = "UPDATE $tableName SET name='$produit->name',price='$produit->price',lien='$produit->lien' WHERE id='$id'";
            if (mysqli_query($conn, $sql)) {
                self::$successMsg= "New record updated successfully";
                header("Location:adminproduit.php");
            } else {
                self::$errorMsg= "Error updating record: " . mysqli_error($conn);
            }
    
    }
    
    static function deleteProduit($tableName,$conn,$id){
        //delet a client by his id, and send the user to read.php
        $sql = "DELETE FROM $tableName WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
            self::$successMsg= "Record deleted successfully";
            header("Location:adminproduit.php");
        } else {
            self::$errorMsg= "Error deleting record: " . mysqli_error($conn);
        }
      
    }
    
    

}


?>