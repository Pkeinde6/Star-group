<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star-group</title>
    <link rel="stylesheet" href="ap.css">
</head>
<body>
   <header>
        <nav class="nav-bar">
            <button class="menu-toggle" id="menu-toggle">☰</button> <!-- Le bouton hamburger -->
            <img src="" class="logo" width="100px" alt="">
            <div class="nav-links" id="nav-links">
                <a href="accueil.php">Accueil</a>
                <a href="" class="active">À propos</a>
                <a href="service.php">Services</a>
                <a href="filiales.php">Filiales</a>
                <a href="contact.php">Contact</a>
            </div>
        </nav>
    </header> 
    <section class="main-content">
            <div class="main-item">
                <div class="main-first">
                    <img src="Nouveau-dossier\Star b@4x.png" width="80%" alt="">
                </div >
                <div  class="main-second">
                    <h1>Qui somme nous?</h1>
                    <p> Star Group, créé en 2017, est spécialisée dans la distribution de solutions innovantes dans le domaine du numérique. Basée à Dakar, l'entreprise offre des produits et services à valeur ajoutée. <br><br> En 2022, Star Group démarre ses activités et devient peu à peu un partenaire sûr grâce à une équipe expérimentée formée de jeunes très dynamiques avec un savoir-faire inégalé toujours prête à relever les défis les plus énormes. <br> <br>Notre Challenge au quotidien reste l'offre de service sur mesure et de produits de qualités pour l'épanouissement total de nos chers clients et partenaires.</p>
                </div >
            </div>
            <!--<img src="Nouveau-dossier\Sans_titre-1__1_-removebg-preview.png" width="700px"  class="important" height="auto" alt="">  -->
    </section>

    <section class="vision-p">
    <h1 style="font-size: 50px;color:rgb(13,78,156);text-align:center;">Nos Valeurs</h1>     
            <div>
                    <div class="vision-x-first" >
                        <h1 style="font-size: 40px;color:rgb(13,78,156);margin-left:30%">Vision</h1>
                        <p  style="text-align:start;display:inline-block;width:500px;font-weight:bold;color:rgb(13,78,156)"> Star Group projette de devenir le partenaire incontournable dans le numérique que cela soit dans la sous-région ou en Afrique. <br> <br>Être le numéro un africain pour flotter sur le toit mondial du hub numérique avec des solutions et produits adaptées.</p>
                    </div>                
                    <div style="padding:0 0;" >
                        <img src="https://images.pexels.com/photos/699459/pexels-photo-699459.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="xy" alt="">
                    </div>
                    
            </div>
            <div>
                    <div style="padding:0 0;" >
                        <img src="https://images.pexels.com/photos/699459/pexels-photo-699459.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="xy"alt="">
                    </div>
                    <div class="vision-x-second">
                        <h1 style="font-size: 40px;color:rgb(13,78,156);margin-left:30%">Mission</h1>
                        <p  style="text-align:start;display:inline-block;font-weight:bold;width:500px;color:rgb(13,78,156)"> Toute l'équipe est dévouée à accomplir la mission primordiale que s'est fixée Star Group, le sourire du client. <br> <br>Nous voulons retisser le lien entre le client et son fournisseur et par la même occasion rebâtir le système digital avec notre magie.</p>
                    </div>
                
            </div>
    </section>
    <section class="equipe">
        <h1 style="font-size: 50px;color:rgb(13,78,156);text-align:center;padding:30px;">Our Team</h1>
        <table>
            <div>
                <di style="">
                    <img src="IMG_5043.jpg" alt="">
                    <h2>Pape Cheikh Keinde </></h2>

                    <h4><  Web Developper  / ></h4>
                    
                </di>
                <di>
                <img src="IMG_5043.jpg" alt="">
                    <h2>Pape Cheikh Keinde</h2>
                    <h4>Web Developper</h4>
                    
                </di>
            </div>
            <div>
                <di>
                    <img src="IMG_5043.jpg" alt="">
                    <h2>Pape Cheikh Keinde</h2>
                    <h4>Web Developper</h4>
                </di>
                <di>
                    <img src="IMG_5043.jpg" alt="">
                    <h2>Pape Cheikh Keinde</h2>
                    <h4>Web Developper</h4>
                </di>
            </div>
        </table>
       

        <canvas id="canvas"></canvas>

<script>
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    const carres = [];
    const numcarres = 200;
    const seuilDistance = 100; // Distance à partir de laquelle les carres sont reliés à la souris
    let sourisX = 0;
    let sourisY = 0; // Rayon où les carres et les lignes réapparaissent (200px)

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    // Fonction pour générer une couleur aléatoire
    function couleurAleatoire() {
        const r = Math.floor(Math.random() * 10);
        const g = Math.floor(Math.random() * 25);
        const b = Math.floor(Math.random() * 256);
        return `rgb(${r}, ${g}, ${b})`;
    }

    // Classe carre
    class carre {
        constructor(x, y) {
            this.x = x;
            this.y = y;
            this.size = 10; 
            this.dx = Math.random() * 2 - 1; // Vitesse en x
            this.dy = Math.random() * 2 - 1; // Vitesse en y
            this.couleur = couleurAleatoire(); // Ajouter une couleur aléatoire au carre
        }

        // Dessiner le carre
        dessiner() {
            ctx.fillStyle = this.couleur; // Utiliser la couleur du carre
            ctx.fillRect(this.x, this.y, this.size, this.size);
        }

        // Mettre à jour la position du carre
        mettreAJour() {
            this.x += this.dx;
            this.y += this.dy;

            if (this.x < 0 || this.x > canvas.width) this.dx = -this.dx;
            if (this.y < 0 || this.y > canvas.height) this.dy = -this.dy;
        }
    }

    // Créer les carres
    for (let i = 0; i < numcarres; i++) {
        carres.push(new carre(Math.random() * canvas.width, Math.random() * canvas.height));
    }

    // Suivi de la position de la souris
    canvas.addEventListener('mousemove', (event) => {
        sourisX = event.clientX;
        sourisY = event.clientY;
    });
    
    // Relier les carres à la souris
    function dessinerLignes() {
        for (let i = 0; i < carres.length; i++) {
            const carre1 = carres[i];
            const dx = sourisX - carre1.x;
            const dy = sourisY - carre1.y;
            const distance = Math.sqrt(dx * dx + dy * dy);

            // Si la distance entre le carre et la souris est inférieure au seuil
            if (distance < seuilDistance) {
                ctx.beginPath();
                ctx.moveTo(carre1.x + carre1.size / 2, carre1.y + carre1.size / 2);
                ctx.lineTo(sourisX, sourisY);
                ctx.strokeStyle = 'rgba(197, 129, 26, 0.5)'; // Couleur des lignes
                ctx.lineWidth = 1;
                ctx.stroke();
            }
        }
    }

    // Animation
    function animer() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        carres.forEach(carre => {
            carre.mettreAJour();
            carre.dessiner();
        });
        dessinerLignes(); // Seulement dessiner les lignes entre les carres et la souris
        requestAnimationFrame(animer);
    }

    animer();
</script>
    </section>
    <script src="script.js"></script>
</body>
</html>