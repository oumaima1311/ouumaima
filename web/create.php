
<?php
$conn = mysqli_connect("localhost", "root", "", "baase_cliente");
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
// ... باقي المتغيرات
$query = "INSERT INTO Client (No_Clt, Pno_Clt, ...) VALUES ('$nom', '$prenom', ...)";
mysqli_query($conn, $query);
echo "Inscription réussie !";
mysqli_close($conn);
?>
