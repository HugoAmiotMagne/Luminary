<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luminary eSport</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS personnel -->
  <link rel="stylesheet" href="./css/cssprincipal.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Abril+Fatface&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="./image/fond arriere plan.webp" type="image/x-icon">
</head>

<body>

  <?php include('navar.php'); ?>

  <!-- Contenu principal -->
  <div class="container my-5">

    <!-- Titre principal -->
    <div class="text-center mb-5">
      <h1 class="display-4" style="font-family: 'Abril Fatface', cursive;">Bienvenue dans le monde du gaming !</h1>
    </div>

    <!-- Section 1 - Qu'est-ce que le gaming -->
    <div class="row align-items-center mb-5">
      <div class="col-md-6">
        <h2 class="mb-3" style="font-family: 'Playfair Display', serif;">Qu'est-ce que le gaming ?</h2>
        <p>Le gaming, ou les jeux vidéo, consiste à jouer à des jeux numériques sur des consoles, ordinateurs ou smartphones. 
           Les joueurs peuvent s'affronter ou collaborer en ligne. Un "gamer" est un passionné de jeux vidéo.</p>
        <p>Le terme "gaming" est apparu en 1958 avec les premiers jeux vidéo. Aujourd'hui, le gaming est un pilier de l'économie mondiale, 
           avec des ventes massives et une technologie en constante évolution, donnant naissance à des compétitions appelées eSport.</p>
      </div>
      <div class="col-md-6 text-center">
        <img src="./image/Image d_accueil qu_est ce que la gaming.jpeg" class="img-fluid rounded" alt="Gaming">
      </div>
    </div>

    <!-- Section 2 - Qu'est-ce que l'eSport -->
    <div class="row align-items-center mb-5 flex-md-row-reverse">
      <div class="col-md-6">
        <h2 class="mb-3" style="font-family: 'Playfair Display', serif;">Qu'est-ce que l'eSport ?</h2>
        <p>L'eSport est une forme de sport électronique où des joueurs s'affrontent dans divers genres de jeux (stratégie, tir, combat, sports virtuels). 
           Avec l'avènement d'Internet, il s'est imposé mondialement, suivi par des milliers de fans.</p>
        <p>Les compétitions peuvent être en ligne ou en présentiel, avec des récompenses financières ou matérielles.</p>
      </div>
      <div class="col-md-6 text-center">
        <img src="./image/image d_accueil qu_est ce que l_esport.jpg" class="img-fluid rounded" alt="eSport">
      </div>
    </div>

    <!-- Section 3 - Roaster RL -->
    <div class="row align-items-center mb-5">
      <div class="col-md-6">
        <h2 class="mb-3" style="font-family: 'Playfair Display', serif;">Roster Rocket League</h2>
        <p>Notre pôle Rocket League est composé de trois joueurs classés GC3/SSL, les plus hauts rangs du jeu. 
           Ils permettent à notre structure de rivaliser avec les meilleures équipes d'Europe et de se faire un nom sur la scène compétitive.</p>
        <p>Ce pôle est réservé à l'élite des joueurs, encadré par des experts du jeu. Si tu es intéressé, n'hésite pas à nous contacter !</p>
      </div>
      <div class="col-md-6 text-center">
        <img src="./image/matchday rl.webp" class="img-fluid rounded" alt="Rocket League">
      </div>
    </div>

    <!-- Section 4 - Roaster Valorant -->
    <div class="row align-items-center mb-5 flex-md-row-reverse">
      <div class="col-md-6">
        <h2 class="mb-3" style="font-family: 'Playfair Display', serif;">Roster Valorant</h2>
        <p>Le pôle Valorant comporte deux équipes.</p>
        <p>La première est une équipe masculine évoluant dans la ligue française de Valorant, avec l'objectif de percer sur la scène européenne. 
           La compétition est rude et ponctuée d'événements en ligne et en présentiel tout au long de l'année, où chaque victoire ou défaite impacte notre classement.</p>
        <p>Pour suivre notre progression, consulte notre site d'actualités !</p>
      </div>
      <div class="col-md-6 text-center">
        <img src="./image/matchday valo.webp" class="img-fluid rounded" alt="Valorant">
      </div>
    </div>

  </div>

  <?php include('footer.php'); ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
