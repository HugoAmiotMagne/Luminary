<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Produit - Maillot Luminary 2023/2024</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #000;
        }
        .container {
            width: 80%;
            margin: 100px auto; /* Ajustement pour éviter la superposition avec la navbar */
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
        }
        .product-image-carousel {
            position: relative;
            width: 900px;
            height: 750px;
            overflow: hidden;
            margin-right: 20px;
        }
        .product-image-carousel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .carousel-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }
        .carousel-controls button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 3px;
        }
        .carousel-controls button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .carousel-indicators {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        .carousel-indicators span {
            width: 10px;
            height: 10px;
            background-color: #ddd;
            border-radius: 50%;
            margin: 0 5px;
            display: block;
            cursor: pointer;
        }
        .carousel-indicators .active {
            background-color: #333;
        }
        .zoom-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: transform 0.3s ease;
            cursor: zoom-in;
            display: none; /* Toutes les images non actives sont cachées */
        }
        .zoom-container.active {
            display: block; /* Montrer seulement l'image active */
        }
        .zoom-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Garde les dimensions fixes */
        }
        .zoom-container.zoomed img {
            transform: scale(1.5); /* Zoom niveau ajusté */
            cursor: zoom-out;
        }
        .product-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }
        .product-title {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .product-price {
            font-size: 24px;
            color: #B12704;
            margin-bottom: 20px;
        }
        .buy-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        .buy-buttons button {
            padding: 10px 15px;
            font-size: 16px;
            color: #fff;
            background-color: #FFA41C;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }
        .buy-buttons button:hover {
            background-color: #f08804;
        }
        .description {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Contenu du produit -->
    <div class="container">
        <div class="product-image-carousel">
            <div class="carousel-controls">
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
            </div>

            <!-- Zoom container pour les images du carrousel -->
            <div class="zoom-container active">
                <img src="../image/Capture.PNG" alt="Image 1">
            </div>
            <div class="zoom-container">
                <img src="../image/Capture.PNG" alt="Image 2">
            </div>
            <div class="zoom-container">
                <img src="https://via.placeholder.com/900x750" alt="Image 3">
            </div>

            <div class="carousel-indicators">
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Détails du produit (prix, boutons, description) -->
        <div class="product-details">
            <h1 class="product-title">Maillot Luminary 2023/2024</h1>
            <p class="product-price">59,99 €</p>

            <div class="buy-buttons">
                <button>Ajouter au Panier</button>
                <button>Acheter Maintenant</button>
            </div>

            <!-- Description du produit -->
            <div class="description">
                <h2>Description du produit</h2>
                <p>
                    Ceci est un exemple de description du produit. Il s'agit d'un produit incroyable qui répondra à toutes vos attentes et plus encore. 
                    Il est fabriqué à partir de matériaux de haute qualité, ce qui garantit sa durabilité et sa performance.
                </p>
            </div>
        </div>
    </div>

    <!-- Script JavaScript pour le carrousel et le zoom -->
    <script>
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');
        const zoomContainers = document.querySelectorAll('.zoom-container');
        const indicators = document.querySelectorAll('.carousel-indicators span');
        let currentIndex = 0;

        function showImage(index) {
            zoomContainers.forEach((container, i) => {
                container.classList.toggle('active', i === index);
                indicators[i].classList.toggle('active', i === index);
                container.classList.remove('zoomed'); // Réinitialise le zoom à chaque changement d'image
            });
        }

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : zoomContainers.length - 1;
            showImage(currentIndex);
        });

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex < zoomContainers.length - 1) ? currentIndex + 1 : 0;
            showImage(currentIndex);
        });

        indicators.forEach((indicator, i) => {
            indicator.addEventListener('click', () => {
                currentIndex = i;
                showImage(currentIndex);
            });
        });

        // Gestion du zoom
        zoomContainers.forEach(zoomContainer => {
            zoomContainer.addEventListener('click', () => {
                if (zoomContainer.classList.contains('zoomed')) {
                    zoomContainer.classList.remove('zoomed');
                } else {
                    zoomContainer.classList.add('zoomed');
                }
            });
        });
    </script>

</body>
</html>