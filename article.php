<?php
session_start();


// include('city.php');
//include connection file
include('connection.php');

//create in instance of class Connection
$connection = new Connection();


//call the selectDatabase method
$connection->selectDatabase('poster'); 
 //include the client file
 include('produit.php');

 
  //call the static selectAllClients method and store the result of the method in $clients
  $produits = Produit::selectAllProduits('Produits',$connection->conn);

//   if(isset($_POST['submit'])){
//     $clients = Client::selectClientByCityId('Clients',$connection->conn,$_POST['cities']);

//   }
include('commande.php');

 
//call the static selectAllClients method and store the result of the method in $clients


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    <style>
        .product__image {
  background-color: #e5e5e5;
  display: block;
  min-height: 200px;
  width: 100%;
  overflow: hidden;
}

.product__image img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* or 'contain' depending on your preference */
}

.collection {
  display: grid;
  grid-auto-columns: max-content;
  grid-auto-flow: dense;
  grid-auto-rows: minmax(100px, auto);
  grid-gap: 25px;
  grid-template-columns: repeat(3, 1fr);
  margin: 60px auto;
  max-width: 800px;
}

.product__image {
  background-color: #e5e5e5;
  display: block;
  min-height: 200px;
  width: 100%;
  overflow: hidden;
}

.product__image img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* or 'contain' depending on your preference */
}

.product__name p {
  font-family: sans-serif;
  font-size: 16px;
  font-weight: bold;
}

.product__name a {
  color: #000000;
  text-decoration: none;
}

.product__price p {
  font-family: sans-serif;
  font-size: 14px;
}
    </style>
    <link rel="icon" href="img/logo.png" type="image">
</head>
<body>
    <center>
        <a href="home.php"><button>Home</button></a>
        <span><+--------</span>
        <span><?php if(isset($_SESSION['email'])) echo $_SESSION["email"] ?></span>
        <span>--------+></span>
        <a href="login.php"><button>Log out</button></a>
    </center>
    <div class="collection">
        <!-- Imagine a loop produced this... -->
        <?php


        // foreach ($produits as $row) {
          
        //         echo "
        //         <div class='product'>
        //             <a class='product__image' href='#'>
        //             <img src='$row[lien]' alt='Product Image 1'>
        //             </a>
        //             <div class='product__name'>
        //             <p>
        //                 <a href='#'>$row[name]</a>
        //             </p>
        //             </div>
        //             <div class='product__price'>
        //             <p>$row[price]</p>
        //             </div>
        //             <div>
        //             <a href='article.php'><button name='$row[name]' style='background:yellow' type='submit'>Buy</button></a>
        //             </div>
        //         </div>
        //         ";
        //   }
        // //?id=$row1[id]
        // foreach($produits as $row){
        //   if( isset($_POST["$row[name]"])){
        //     $idClt=$_POST["$row[id]"];
        //     $commande = new Commande($idClt);
        //     $commande->insertCommande('Commandes',$connection->conn);
        //     header("Location: article.php");
        //   }
        // }

        
foreach ($produits as $row) {
    echo "
        <form method='post' action='article.php'>
            <div class='product'>
                <a class='product__image' href='#'>
                    <img src='$row[lien]' alt='Product Image 1'>
                </a>
                <div class='product__name'>
                    <p>
                        <a href='#'>$row[name]</a>
                    </p>
                </div>
                <div class='product__price'>
                    <p>$row[price]</p>
                </div>
                <div>
                    <button name='buy' value='$row[id]' style='background:yellow' type='submit'>Buy</button>
                </div>
            </div>
        </form>
    ";
}

// Traitement du formulaire
if (isset($_POST['buy'])) {
    $idClt = $_POST['buy'];
    $commande = new Commande($idClt);
    $commande->insertCommande('Commandes', $connection->conn);
    header("Location: article.php");
    exit();
}


        ?>
    </div>
</body>
</html>

