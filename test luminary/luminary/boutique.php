<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>

     <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Playfair Display Pour questions -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <!-- Abril Fatface Pour titre -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Playfair+Display&display=swap" rel="stylesheet">

    <!-- Icon de recherche -->
    <link rel="icon" href="./image/fond arriere plan.webp" type="image/x-icon">

    <!-- site icon pro -->
    <link
    rel="stylesheet"
    data-purpose="Layout StyleSheet"
    title="Web Awesome"
    href="/css/app-wa-9846671ed7c9dd69b10c93f6b04b31fe.css?vsn=d"
    >
    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css"
    >
    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css"
    >
    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css"
    >   
    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css"
    >
    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css"
    >

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
    <?php 
    include ('navar.php')
    ?>


    <div class="container text-center mt-4">
      <div class="row">

        <div class="border col p-3 m-2">
          <img src="./image/Capture.PNG" alt="" class="img-fluid">
          <B>Prix : 35€</B>
          <form action="./Achat/maillots.php" method="post">
            <div class="commande-button d-flex justify-content-center">
              <button>Commander</button>
            </div>
          </form>
        </div>
      </form>

      
        <div class="border col p-3 m-2">
          <img src="./image/manchettesblanche.webp" alt="" class="img-fluid">
          <B>Prix : 15€</B>
          <form action="./Achat/manchettes.php" method="post">
            <div class="-rgbred--bs-primary commande-button d-flex justify-content-center">
              <button>Commander</button>
            </div>
          </form>
        </div>
      
        <div class="border col p-3 m-2">
          <img src="./image/drapeaublanc.webp" alt="" class="img-fluid">
          <B>Prix : 10€</B>
          <form action="/Achat/drapeau.php" method="post">
            <div class="commande-button text-white d-flex justify-content-center">
              <button>Commander</button>
            </div>
          </form>
        </div>
      
       
    </div>
  </div>

    
  <?php 
    include ('footer.php')
    ?>
    
</body>
</html>