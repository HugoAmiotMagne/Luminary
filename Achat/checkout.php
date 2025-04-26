<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Paiement - Commande</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="../image/fond%20arriere%20plan.webp" type="image/x-icon">

  <style>
    body {
      font-family: 'Playfair Display', serif;
      background-color: #f8f9fa;
      padding-top: 90px; /* espace pour navbar fixée */
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
    .card {
      border-radius: 1rem;
    }
    .btn-custom {
      background-color: #FFA41C;
      color: white;
    }
    .btn-custom:hover {
      background-color: #f08804;
    }
    .form-control:focus {
      border-color: #FFA41C;
      box-shadow: 0 0 0 0.2rem rgba(255, 164, 28, 0.25);
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

<!-- Formulaire de Paiement -->
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <div class="card shadow-sm">
        <div class="card-body">

          <h2 class="mb-4 text-center">Finaliser votre achat</h2>

          <div class="mb-4">
            <h4>Produit :</h4>
            <div class="d-flex align-items-center">
              <img src="../image/Capture.PNG" alt="Produit" class="img-thumbnail me-3" style="width: 120px;">
              <div>
                <h5 class="mb-0">Maillot Luminary 2023/2024</h5>
                <p class="text-muted mb-1">Taille : M</p>
                <p class="text-danger fw-bold">59,99 €</p>
              </div>
            </div>
          </div>

          <form action="confirmation.php" method="POST">

            <div class="mb-3">
              <label for="nom" class="form-label">Nom complet</label>
              <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <div class="mb-3">
              <label for="adresse" class="form-label">Adresse de livraison</label>
              <input type="text" class="form-control" id="adresse" name="adresse" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Adresse Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
              <label for="telephone" class="form-label">Téléphone</label>
              <input type="tel" class="form-control" id="telephone" name="telephone" required>
            </div>

            <div class="mb-4">
              <label for="methode" class="form-label">Méthode de paiement</label>
              <select class="form-select" id="methode" name="methode" required>
                <option value="">Sélectionnez</option>
                <option>Carte Bancaire</option>
                <option>PayPal</option>
                <option>Apple Pay</option>
              </select>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-custom btn-lg">
                <i class="fa-solid fa-credit-card"></i> Payer 59,99 €
              </button>
            </div>

          </form>

        </div>
      </div>

    </div>
  </div>
</div>

<!-- Footer -->
<?php include('../footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
