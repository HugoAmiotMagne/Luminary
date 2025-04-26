<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luminary eSport - Navbar</title>
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Playfair+Display&display=swap" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

    <!-- Custom CSS (optional) -->
    <style>
        body {
            font-family: 'Playfair Display', serif;
        }
        .navbar {
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
        }
        .logo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
    </style>

    <!-- Favicon -->
    <link rel="icon" href="../image/fond arriere plan.webp" type="image/x-icon">
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="./image/fond arriere plan.webp" alt="Luminary eSport Logo" class="logo me-2">
      Luminary eSport
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="html accueil.php">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="effectif.php">Effectif</a></li>
        <li class="nav-item"><a class="nav-link" href="boutique.php">Boutique</a></li>
        <li class="nav-item"><a class="nav-link" href="reseaux.php">Réseaux</a></li>
        <li class="nav-item"><a class="nav-link" href="recrutement.php">Recrutement</a></li>
        <li class="nav-item">
          <a class="nav-link" href="panier.php">
            <i class="fa-solid fa-cart-plus"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Spacer to avoid overlap -->
<div style="margin-top: 80px;"></div>

<!-- Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./image/banniere twitter.webp" class="d-block w-100" alt="Bannière Luminary">
    </div>
    <!-- Tu peux ajouter d'autres images ici si tu veux plusieurs slides -->
    <!--
    <div class="carousel-item">
      <img src="autre-image.jpg" class="d-block w-100" alt="Autre image">
    </div>
    -->
  </div>
</div>

<!-- Bootstrap JS Bundle (avec Popper inclus) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
