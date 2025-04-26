<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boutique - Luminary eSport</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Playfair+Display&display=swap" rel="stylesheet">

  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

  <!-- Favicon -->
  <link rel="icon" href="./image/fond arriere plan.webp" type="image/x-icon">

  <!-- Style perso -->
  <style>
    body {
      font-family: 'Playfair Display', serif;
      background-color: #f8f9fa;
    }
    .card {
      transition: transform 0.3s;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .btn-custom {
      background-color: #0d6efd;
      color: white;
      border: none;
    }
    .btn-custom:hover {
      background-color: #0b5ed7;
    }
    .card-img-top {
      height: 250px;
      object-fit: cover;
    }
  </style>
</head>

<body>

<?php include('navar.php'); ?>

<!-- Titre de la boutique -->
<div class="container text-center my-5">
  <h1 class="display-4 fw-bold" style="font-family: 'Abril Fatface', cursive;">Notre Boutique</h1>
  <p class="lead">Soutiens Luminary eSport avec nos produits exclusifs !</p>
</div>

<!-- Produits -->
<div class="container">
  <div class="row g-4 justify-content-center">

    <!-- Produit 1 -->
    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <img src="./image/Capture.PNG" class="card-img-top" alt="Maillot Luminary">
        <div class="card-body text-center">
          <h5 class="card-title">Maillot Officiel</h5>
          <p class="card-text fw-bold">35€</p>
          <form action="./Achat/maillots.php" method="post">
            <button type="submit" class="btn btn-custom">Commander</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Produit 2 -->
    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <img src="./image/manchettesblanche.webp" class="card-img-top" alt="Manchettes Blanches">
        <div class="card-body text-center">
          <h5 class="card-title">Manchettes Blanches</h5>
          <p class="card-text fw-bold">15€</p>
          <form action="./Achat/manchettes.php" method="post">
            <button type="submit" class="btn btn-custom">Commander</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Produit 3 -->
    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <img src="./image/drapeaublanc.webp" class="card-img-top" alt="Drapeau Blanc">
        <div class="card-body text-center">
          <h5 class="card-title">Drapeau Officiel</h5>
          <p class="card-text fw-bold">10€</p>
          <form action="./Achat/drapeau.php" method="post">
            <button type="submit" class="btn btn-custom">Commander</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Footer -->
<?php include('footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
