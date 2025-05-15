<?php
session_start();
if (!isset($_SESSION['id'])) {
  echo "SIGN UP BEFORE >";
  exit();
}
$conn = mysqli_connect("localhost", "root", "", "baase_cliente");

$vendeur = $_POST['vendeur'];
$prix = $_POST['prix'];
$ref = $_POST['ref'];
$colors = implode(", ", $_POST['color']);
$quantite = $_POST['quantite'];
$client = $_SESSION['id'];
$query = "INSERT INTO Commande_produit (Id_client, Vendeur_prod, Prix_prod, Ref_prod, Colr_prod, Qant_prod)
          VALUES ($client, '$vendeur', '$prix', '$ref', '$colors', $quantite)";
mysqli_query($conn, $query);
echo "Commande effectuée avec succès.";
mysqli_close($conn);


?>