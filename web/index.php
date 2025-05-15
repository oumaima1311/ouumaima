<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Pink Beauty Shop</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background-color: #ffe6f0;
      font-family: Arial, sans-serif;
      text-align: center;
    }
    h2 {
      color: #e60073;
    }
    table {
      width: 90%;
      margin: auto;
    }
    img {
      width: 200px;
      height: 150px;
      border-radius: 10px;
    }
    .category {
      background-color: #ffcce0;
      padding: 10px;
      border-radius: 10px;
      margin-top: 20px;
    }
    .product {
      padding: 15px;
    }
    .price {
      color: #cc0066;
      font-weight: bold;
    }
    .login-link {
      text-align: right;
      padding: 10px;
    }
    .login-link a {
      color: #cc0066;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="login-link">
    <a href="login.html">Login</a>
  </div>

  <h2>Bienvenue à Pink Beauty Shop</h2>

  <div class="category">
    <h3>Concealer</h3>
    <div class="product">
      <a href="commande_produit1.html"><img src="img/concealer1.jpg" alt="Concealer"></a>
      <p class="price">1200 DA</p>
    </div>
  </div>

  <div class="category">
    <h3>Blush</h3>
    <div class="product">
      <a href="commande_produit2.html"><img src="img/blush1.jpg" alt="Blush"></a>
      <p class="price">1100 DA</p>
    </div>
  </div>

  <div class="category">
    <h3>Mascara</h3>
    <div class="product">
      <a href="commande_produit3.html"><img src="img/mascara1.jpg" alt="Mascara"></a>
      <p class="price">1300 DA</p>
    </div>
  </div>

  <div class="category">
    <h3>Gloss</h3>
    <div class="product">
      <a href="commande_produit4.html"><img src="img/gloss1.jpg" alt="Gloss"></a>
      <p class="price">900 DA</p>
    </div>
  </div>

</body>
</html>
