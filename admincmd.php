<?php
// include('city.php');
//include connection file
include('connection.php');
   

//create in instance of class Connection
$connection = new Connection();


//call the selectDatabase method
$connection->selectDatabase('poster'); 

 //include the client file
 include('commande.php');

 
  //call the static selectAllClients method and store the result of the method in $clients
  $commandes = Commande::selectAllCommandes('Commandes',$connection->conn);

//   if(isset($_POST['submit'])){
//     $clients = Client::selectClientByCityId('Clients',$connection->conn,$_POST['cities']);

//   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="img/logo.png" type="image"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body style="background: #000;">

<div class="container my-5">
    <center>
    <h2 style="color: #0f0;">List of Commandes from database</h2>
    <a  class="btn btn-primary" href="signup.php" role="button">Signup</a>
    <a  class="btn btn-primary" href="admin.php" role="button">client</a>
    <a  class="btn btn-primary" href="createproduit.php" role="button">produit</a>
    <a  class="btn btn-primary" href="article.php" role="button">commande</a>
    </center>
    <br>
    <br>
    <table class="table">
       <thead>
        <tr>
            <th>ID</th>
            <th>DATE_COMMANDE</th>
            <th>ID_CLIENTS</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
       
        foreach($commandes as $row) {
           echo " <tr>
            <td>$row[id]</td>
            <td>$row[cmd_date]</td>
            <td>$row[idClt]</td>
            <td>
            <a class ='btn btn-danger btn-sm' href='deletecmd.php?id=$row[id]'>delete</a>
            </td>
        </tr>";
        }
        
        ?>
        </tbody>
        
    </table>
    </div>
    
</body>
</html>
