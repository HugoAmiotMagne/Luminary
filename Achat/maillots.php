<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Produit - Maillot Luminary 2023/2024</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

  <style>
    body {
      font-family: 'Playfair Display', serif;
      background-color: #f8f9fa;
      padding-top: 90px; /* <-- espace pour la navbar fixée */
    }
    .navbar {
      background: rgba(0, 0, 0, 0.85);
      backdrop-filter: blur(10px);
    }
    .logo {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      object-fit: cover;
    }
    .carousel-inner img {
      height: 500px;
      object-fit: cover;
      cursor: zoom-in;
    }
    .zoomed {
      transform: scale(1.5);
      transition: transform 0.3s ease;
      cursor: zoom-out;
    }
    .product-title {
      font-size: 2rem;
      font-weight: bold;
    }
    .product-price {
      color: #B12704;
      font-size: 1.5rem;
      margin-bottom: 1rem;
    }
    .btn-custom {
      background-color: #FFA41C;
      color: white;
    }
    .btn-custom:hover {
      background-color: #f08804;
    }
    footer {
      background-color: #343a40;
      color: #ffffff;
      padding: 20px 0;
    }
  </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="../image/fond%20arriere%20plan.webp" alt="Luminary eSport Logo" class="logo me-2">
      Luminary eSport
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="../html accueil.php">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="../effectif.php">Effectif</a></li>
        <li class="nav-item"><a class="nav-link" href="../boutique.php">Boutique</a></li>
        <li class="nav-item"><a class="nav-link" href="../reseaux.php">Réseaux</a></li>
        <li class="nav-item"><a class="nav-link" href="../recrutement.php">Recrutement</a></li>
        <li class="nav-item">
          <a class="nav-link" href="panier.php">
            <i class="fa-solid fa-cart-plus"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Produit -->
<div class="container py-5">
  <div class="row g-4">

    <!-- Carousel Image -->
    <div class="col-md-6">
      <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner rounded shadow">
          <div class="carousel-item active">
            <img src="../image/Capture.PNG" class="d-block w-100" alt="Maillot Luminary 1">
          </div>
          <div class="carousel-item">
            <img src="../image/Capture.PNG" class="d-block w-100" alt="Maillot Luminary 2">
          </div>
          <div class="carousel-item">
            <img src="https://via.placeholder.com/900x750" class="d-block w-100" alt="Maillot Luminary 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
        <div class="carousel-indicators mt-3">
          <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="2"></button>
        </div>
      </div>
    </div>

    <!-- Détails Produit -->
    <div class="col-md-6 d-flex flex-column justify-content-center">
      <h1 class="product-title">Maillot Luminary 2023/2024</h1>
      <p class="product-price">59,99 €</p>

      <div class="d-flex gap-3 mb-4">
        <button class="btn btn-custom btn-lg"><i class="fa-solid fa-cart-shopping"></i> Ajouter au Panier</button>
        <a href="checkout.php" class="btn btn-success btn-lg">
          <i class="fa-solid fa-credit-card"></i> Acheter Maintenant
        </a>
      </div>

      <div>
        <h4>Description du produit</h4>
        <p>
          Découvrez le Maillot Officiel Luminary 2023/2024. Conçu pour la performance et le confort, ce maillot est fabriqué en tissu respirant de haute qualité.
          Affichez fièrement vos couleurs et soutenez votre équipe préférée !
        </p>
      </div>
    </div>

  </div>
</div>

<!-- Footer -->
<footer class="mt-5">
  <div class="container text-center">
    <p class="mb-0">© 2024 Luminary eSport. Tous droits réservés.</p>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Zoom au clic -->
<script>
  const images = document.querySelectorAll('.carousel-inner img');

  images.forEach(img => {
    img.addEventListener('click', () => {
      img.classList.toggle('zoomed');
    });
  });
</script>

</body>
</html>
