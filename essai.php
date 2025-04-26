<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Button Example</title>
  <style>
    /* Ajoutez cette partie de style pour rendre le bouton un peu transparent au survol */
    .custom-btn {
      transition: 0.3s; /* Animation de transition de 0.3 secondes */
    }

    .custom-btn:hover {
      opacity: 0.8; /* Opacité réduite au survol */
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <!-- Utilisez la classe btn et btn-primary pour un bouton bleu -->
  <a href="https://votrelien.com" class="btn btn-primary custom-btn">Votre lien</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>