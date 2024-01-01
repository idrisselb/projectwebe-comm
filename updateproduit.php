<?php
session_start();
$nameValue = "";
$priceValue = "";
$lienValue ="";

$errorMesage = "";
$successMesage = "";

include('connection.php');
   

//create in instance of class Connection
$connection = new Connection();


//call the selectDatabase method
$connection->selectDatabase('poster');

    //include the client file
include('produit.php');
if($_SERVER['REQUEST_METHOD']=='GET'){

    $id = $_GET['id'];

//call the staticbselectClientById method and store the result of the method in $row
$row=Produit::selectProduitById('Produits',$connection->conn,$id);

$nameValue = $row["name"];
$priceValue = $row["price"];
$lienValue = $row["lien"];

}

else if(isset($_POST["updateprd"])){

    $nameValue = $_POST["name"];
    $priceValue = $_POST["price"];
    $lienValue = $_POST["lien"];
   

    if(empty($nameValue) || empty($priceValue) || empty($lienValue)){

            $errorMesage = "all fileds must be filed out!";

    }else{

        
        //create a new instance of client ($client) with inputs values
        $produit = new Produit($nameValue,$priceValue,$lienValue);

        //call the static updateClient method and give $client in the parameters
        Produit::updateproduit($produit,'Produits',$connection->conn, $_GET['id']);
            
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
                <input value="<?php echo $nameValue ?>" type="text" name="name" require> <i>Product Name</i>     
            </div> 
                <!-- <small style="color:red"><?php echo $fnameErrorMsg ?></small> -->

            <div class="inputBox"> 
                <input value="<?php echo $priceValue ?>" type="text" name="price" require> <i>Product Price</i>  
            </div>

                <!-- <small style="color:red"><?php echo $lnameErrorMsg ?></small> -->
            
            <div class="inputBox"> 
                <input value="<?php echo $lienValue ?>" type="text" name="lien" require> <i>Product Link</i>  
            </div>

                <!-- <small style="color:red"><?php echo $lnameErrorMsg ?></small> -->
 

            <div class="inputBox">                 
                <div style="color:red"><?php if(!empty($errorMesage)) echo $errorMesage;if(!empty($successMesage)) echo $successMesage ?></div><br>
                <input name="updateprd" type="submit" value="UPDATE">
            </div>

            <div class="links">
                <a href="adminproduit.php">Cancel</a>
            </div>

        </form> 

    </div> 

   </div> 

  </section> 
 </body>

</html>