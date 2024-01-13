
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magasin YAHA</title>
    <link rel="stylesheet" href="yahastyle.css">
</head>
<body>
    
    <header style="background-image: url('https://images.pexels.com/photos/172292/pexels-photo-172292.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');">
        <h1>YAHA fashion</h1>
        <div>
            <img style="width:100px;height:100px;border-radius: 10px;" 
            src=".\photo_snap\ya ha (1).png" alt="Logo de votre site">
        </div>
    
    </header>
    <nav>
        <a href="index.php">Accueil</a>
        <a href="inscriptionYaha.php">s'inscrire</a>
        <a href="contact_v1.php">Contact</a>
    </nav>

    <section>

        <div class="product div1">
            <img src=.\photo_snap\imageyaha11.jpg alt="" width="200px" height="200px">
            <h3>Volemos hoodie</h3>
            <p>les tailles : M,L,XL,XXL</p>
            <p>Prix : 250 dh</p>
            <button class="button" onclick="redirectionVersAutrePage()">Acheter</button>
            <button class="button">Ajouter au panier</button>
        </div> 
        <div class="product div1">
            <img src=".\photo_snap\imageyaha2.jpg" alt="" width="200px" height="200px">
            <h3>Sweat shirt noir</h3>
            <p>les tailles : M,L,XL,XXL</p>
            <p>Prix : 149 dh</p>
            <button class="button" onclick="redirectionVersAutrePage()">Acheter</button>
            <button class="button">Ajouter au panier</button>
        </div>
        <div class="product div1">
            <img src=".\photo_snap\imageyaha6.jpg" alt="" width="200px" height="200px">
            <h3>Sweat shirt blanc</h3>
            <p>les tailles : M,L,XL,XXL</p>
            <p>Prix : 149 dh</p>
            <button class="button" onclick="redirectionVersAutrePage()">Acheter</button>
            <button class="button">Ajouter au panier</button>
        </div> 
        <div class="product div1">
            <img src=".\photo_snap\imageyaha3.jpg" alt="" width="200px" height="200px">
            <h3>oversize hoodie</h3>
            <p>les tailles : M,L,XL,XXL</p>
            <p>Prix : 180 dh</p>
            <button class="button" onclick="redirectionVersAutrePage()">Acheter</button>
            <button class="button">Ajouter au panier</button>
        </div> 
        <div class="product div1">
            <img src=".\photo_snap\imageyaha10.jpg" alt="" width="200px" height="200px">
            <h3>LA sweat shirt </h3>
            <p>les tailles : M,L,XL,XXL</p>
            <p>Prix : 149 dh</p>
            <button class="button" onclick="redirectionVersAutrePage()">Acheter</button>
            <button class="button">Ajouter au panier</button>
        </div> 
        <div class="product div1">
            <img src=".\photo_snap\imageyaha9.jpg" alt="" width="200px" height="200px">
            <h3>LA oversize hoodie</h3>
            <p>les tailles : M,L,XL,XXL</p>
            <p>Prix : 239 dh</p>
            <button class="button" onclick="redirectionVersAutrePage()">Acheter</button>
            <button class="button">Ajouter au panier</button>
            </div> 
    <script>
         function redirectionVersAutrePage() {
        // Redirection vers une autre page PHP
        window.location.href = 'payment_page_v2.php';
    }
        
    </script> 

    </section>
    <p></p>
</body>
<footer>
    <div>
     <img style="width:50px;height:50px;border-radius: 5px; " 
     src=".\photo_snap\ya ha (1).png" alt="Logo de votre site">
     2024 Magasin YAHA. Tous droits réservés.
    </div>
         
    </footer>
</html>