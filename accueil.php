<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star-group</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/assets/css/docs.css">
    <script type="text/javascript" src="script.js" defer></script>
</head>
<body>
    <div class="reseau">
        <table style="border-collapse: collapse; border-radius: 10px;">
            <tr>
                <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh3aPIMNnt9nGHNX-goFe874pKj8f43CoYpg&s" width="20px" alt=""></td>
            </tr>
            <tr>
                <td><img src="https://www.logo.wine/a/logo/Snapchat/Snapchat-Ghost-Outlined-Logo.wine.svg" width="20px" alt=""></td>
            </tr>
            <tr>
                <td><img src="https://i.pinimg.com/736x/1b/60/f9/1b60f9d42fd84e31b304d5e7779cccfd.jpg" width="20px" alt=""></td>
            </tr>
        </table>
    </div>
    <header>
        <nav class="nav-bar">
            <button class="menu-toggle" id="menu-toggle">☰</button>
            <div class="nav-links" id="nav-links">
                <a href="#" class="active">Accueil</a>
                <a href="a-propos.php">À propos</a>
                <a href="service.php">Services</a>
                <a href="filiales.php">Filiales</a>
                <a href="contact.php">Contact</a>
            </div>
        </nav>
    </header>

    <input type="button" value="Nous contacter" id="contact" class="contact">
    
    <section class="main-content">
        <video autoplay muted src="logo1.mov" width="100%" height="auto"></video>
    </section>

    <section class="presentation">
        <div class="container">
            <div class="slide">
                <img src="img2.jpg" alt="">
                <div class="slide-content slide1">
                    <h1>Star Group</h1>
                    <h3>Agence numérique</h3>
                    <p>Votre partenaire de confiance pour le Design Graphique</p>
                    <button class="b1">Services</button>
                    <button class="b2">Contact-us</button>
                </div>
            </div>
            <div class="slide">
                <img src="img1.jpg" alt="">
                <div class="slide-content slide2">
                    <h1>Star Group</h1>
                    <h3>Agence numérique</h3>
                    <p>Votre tranquillité d'esprit, notre priorité ! Laissez notre équipe de professionnels gérer votre image</p>
                    <button class="b1">Services</button>
                    <button class="b2">Contact-us</button>
                </div>
            </div>
            <div class="slide">
                <img src="https://images.pexels.com/photos/5475758/pexels-photo-5475758.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                <div class="slide-content slide3">
                    <h1>Star Group</h1>
                    <h3>Agence numérique</h3>
                    <p>Optimisez vos performances grâce à notre expertise en maintenance informatique et systèmes réseaux</p>
                    <button class="b1">Services</button>
                    <button class="b2">Contact-us</button>
                </div>
            </div>

            <!-- Flèches de navigation -->
            <button class="prev" id="prev">&#10094;</button>
            <button class="next" id="next">&#10095;</button>

            <!-- Bulles de pagination -->
            <div class="pagination" id="pagination"></div>
        </div>
    </section>

    <section class="service">
        <a href="service.php"><h1>Services</h1></a>
        <div class="service-container">
            <div class="service-item">
                <img src="https://thumbs.dreamstime.com/b/stylo-plume-avec-l-illustration-d-%C3%A9l%C3%A9ment-de-logo-ic%C3%B4ne-du-vecteur-encre-isol%C3%A9e-sur-le-fond-noir-feuille-isol%C3%A9-classique-185210448.jpg" width="100" style="border-radius: 50%;" alt="Icône stylisé de plume">
                <h2>Design Graphique</h2>
                <p>Notre entreprise propose des services professionnels de graphisme et de design graphique pour aider à la création d'une identité visuelle unique et impactante... <a href="">Voir plus</a></p>
            </div>
            <div class="service-item">
                <img src="https://cbx-prod.b-cdn.net/COLOURBOX18689421.jpg?width=800&height=800&quality=70" width="100" style="border-radius: 50%;" alt="Icône représentant un écran de développement web">
                <h2>Développement web / mobile</h2>
                <p>Notre entreprise propose des services de développement web sur mesure pour créer des sites internet modernes, performants et adaptés à vos besoins...<a href="">Voir plus</a></p>
            </div>
            <div class="service-item">
                <img src="https://cdn.icon-icons.com/icons2/1233/PNG/512/1492718748-share_83604.png" width="100" style="border-radius: 50%;" alt="Icône marketing digital">
                <h2>Marketing Digital</h2>
                <p>Notre entreprise propose des services de référencement (SEO) pour améliorer la visibilité de votre site web sur les moteurs de recherche...<a href="">Voir plus</a></p>
            </div>
            <div class="service-item">
                <img src="https://cdn.icon-icons.com/icons2/1233/PNG/512/1492718748-share_83604.png" width="100" style="border-radius: 50%;" alt="Icône système et réseau">
                <h2>Système et Réseau</h2>
                <p>Notre entreprise propose des services d'administration des systèmes et réseaux pour assurer une gestion optimale de vos infrastructures informatiques...<a href="">Voir plus</a></p>
            </div>
        </div>
    </section>
</body>

    <section class="transition" id="transition">
        <div class="far">
            <div class="text">Produit Far </div>
         </div>
    </section>
    <section class="produit-far">
        <div class="containt">

            <div class="slide-p">
                <img src="Nouveau-dossier/1.jpg" alt="">
            </div>

            <div class="slide-p">
                <img src="Nouveau-dossier/2.jpg" alt="">
            </div>

            <div class="slide-p">
                <img src="Nouveau-dossier/3.jpg"  alt="">
            </div>

            <div class="slide-p">
                <img src="Nouveau-dossier/4.jpg"  alt="">
            </div>

        </div>
        
         <!-- Flèches de navigation -->
         <button class="prev-x" id="prev-x">&#10094;</button>
        <button class="next-x" id="next-x">&#10095;</button>

        <!-- Bulles de pagination -->
        <div class="pagination-x" id="pagination-x"></div>
    </section>
    <section class="pp">
    <div class="collection-item">
        <div class="collection-text">
            <h1>Notre collection de t-shirt</h1>
            <p>Notre entreprise propose des services professionnels de graphisme et de design graphique pour aider à la création d'une identité visuelle unique et impactante... <a href="">Voir plus</a></p>
        </div>
        <div class="collection-image">
            <img src="Nouveau-dossier\Front vert.png" width="100%" alt="">
        </div>
    </div>

    <div class="collection-item reverse">
        <div class="collection-image">
            <img src="Nouveau-dossier\Carte visite star group mockup.png" width="100%" alt="">
        </div>
        <div class="collection-text">
            <h1>Notre collection de t-shirt</h1>
            <p>Notre entreprise propose des services professionnels de graphisme et de design graphique pour aider à la création d'une identité visuelle unique et impactante... <a href="">Voir plus</a></p>
        </div>
    </div>

    <div class="collection-item">
        <div class="collection-text">
            <h1>Notre collection de t-shirt</h1>
            <p>Notre entreprise propose des services professionnels de graphisme et de design graphique pour aider à la création d'une identité visuelle unique et impactante... <a href="">Voir plus</a></p>
        </div>
        <div class="collection-image">
            <img src="Nouveau-dossier\Cap Mockup.png" width="100%" alt="">
        </div>
    </div>

    <div class="collection-item reverse">
        <div class="collection-image">
            <img src="Nouveau-dossier\Calendrier.png" width="100%" alt="">
        </div>
        <div class="collection-text">
            <h1>Notre collection de t-shirt</h1>
            <p>Notre entreprise propose des services professionnels de graphisme et de design graphique pour aider à la création d'une identité visuelle unique et impactante... <a href="">Voir plus</a></p>
        </div>
    </div>

    <div class="collection-item">
        <div class="collection-text">
            <h1>Notre collection de t-shirt</h1>
            <p>Notre entreprise propose des services professionnels de graphisme et de design graphique pour aider à la création d'une identité visuelle unique et impactante... <a href="">Voir plus</a></p>
        </div>
        <div class="collection-image">
            <img src="Nouveau-dossier\Front Flat.png" width="100%" alt="">
        </div>
    </div>
</section>


    <footer>STAR GROUP | Au plaisir d'innover ! Dakar, Sénégal</footer>

</body>
</html>
