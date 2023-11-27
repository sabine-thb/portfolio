<?php
    include("connexion.php");
    $requete="SELECT * FROM projets WHERE id_proj=1";
    $stmt = $db->query($requete);
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Sabine</title>
    <link rel="stylesheet" href="styleAccueil.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="./img/logo.png" /> 
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script defer type="text/javascript"
    src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
    
</head>

<body>
    <div class="cursor"></div>
    <div class="cursor2"></div>
    <header>
        <nav>
            <a href="index.php" class="lienLogo">
                <img src="./img/logo.png" alt="retour à l'accueil" class="logo">
            </a>
            <a href="#quiSuisJe" class="navItems">Qui suis-je ?</a>
            <a href="#mesProjets" class="navItems">Mes projets</a>
            <a href="#contact" class="navItems">Contact</a>
            <a href="#contact" class="burger"></a>
            

        </nav>
        <div class="entete">
            <h1 class="txtEntete first">Moi, c'est Sabine.</h1>
            <p class="txtEntete second dev">Développeuse.</p>
            <p class="txtEntete second web">Webdesigner.</p>
            <p class="txtEntete second crea">Créative et passionnée.</p>
        </div>
        <div class="photoSab"></div>
        <a href="#quiSuisJe" class="scroll-arrow balancement">
            <span></span>
        </a>
    </header>
    <section class="description" id="quiSuisJe">
        <h1 class="titleDescr">Qui suis-je ?</h1>
        <div class="contenuDescr">
            <p>Actuellement en 2ème année de BUT Métiers du Multimédia et de l’Internet, je suis
                passionnée par la création d’interfaces web.</p>

            <p>Que ce soit la réalisation de wireframes ou le développement web, tout m’intéresse ! Je me suis découvert
                en
                première année une préférence particulière pour le tout ce qui touche au code front et back.</p>
            <p>Curieuse et motivée, je ne cesse d’en apprendre davantage chaque jour, et j’espère avoir l’opportunité de
                travailler plus tard dans le développement d’interfaces :) </p>
        </div>
        <a href="./doc/CV-SabineThibout.pdf" target="_blank" class="CV">Télécharger mon CV</a>

    </section>
    <div class="titlesection" id="section1">
        <div class="taches proj"></div>
        <h2 class="title" id="mesProjets">Mes projets</h2>
    </div>
    <p class="paragraphe" id="par1">Si tu souhaites en savoir plus sur ce que je suis capable de faire,  alors je t’invite à cliquer sur mes différents projets.<br>
    Ceux-ci, très variés, te présenteront  un extrait de mes diverses compétences dans la création de produits multimédia !</p>
    <section class="projets">
        <div class="cardContainer">
            <a href="projet.php?proj=<?php foreach ($result as $row) echo $row["id_proj"]?>" style=" background-color:#<?php foreach ($result as $row) echo $row["couleur"]?>"  class="card un">
                <div class="imgCard"  style="background-image: url('./img/<?php foreach ($result as $row) echo $row["id_proj"]?>.jpg');"></div>
                <div class="texte">
                    <div class="titleCard"> Gotatrip</div>
                    <div class="competenceCard">Développement web</div>
                </div>
            </a>

            <!-- Je change l'id de projet sur lequel ma carte va pointer  -->
            <?php 
            $requete="SELECT * FROM projets WHERE id_proj=2";
            $stmt = $db->query($requete);
            $result = $stmt->fetchall(PDO::FETCH_ASSOC);
            ?>

            <a href="projet.php?proj=<?php foreach ($result as $row) echo $row["id_proj"]?>" style=" background-color:#<?php foreach ($result as $row) echo $row["couleur"]?>" class="card deux">
                <div class="imgCard"  style="background-image: url('./img/<?php foreach ($result as $row) echo $row["id_proj"]?>.jpg');"></div>
                <div class="texte">
                    <div class="titleCard">Unblinded</div>
                    <div class="competenceCard">Wordpress</div>
                </div>
            </a>

            <!-- Je change l'id de projet sur lequel ma carte va pointer  -->
            <?php 
            $requete="SELECT * FROM projets WHERE id_proj=3";
            $stmt = $db->query($requete);
            $result = $stmt->fetchall(PDO::FETCH_ASSOC);
            ?>

            <a href="projet.php?proj=<?php foreach ($result as $row) echo $row["id_proj"]?>" style=" background-color:#<?php foreach ($result as $row) echo $row["couleur"]?>"  class="card trois">
                <div class="imgCard"  style="background-image: url('./img/<?php foreach ($result as $row) echo $row["id_proj"]?>.jpg');"></div>
                <div class="texte">
                    <div class="titleCard">Affiche festival</div>
                    <div class="competenceCard">Suite adobe</div>
                </div>
            </a>

            <!-- Je change l'id de projet sur lequel ma carte va pointer  -->
            <?php 
            $requete="SELECT * FROM projets WHERE id_proj=4";
            $stmt = $db->query($requete);
            $result = $stmt->fetchall(PDO::FETCH_ASSOC);
            ?>

            <a href="projet.php?proj=<?php foreach ($result as $row) echo $row["id_proj"]?>" style=" background-color:#<?php foreach ($result as $row) echo $row["couleur"]?>"  class="card quatre">
                <div class="imgCard"  style="background-image: url('./img/<?php foreach ($result as $row) echo $row["id_proj"]?>.jpg');"></div>
                <div class="texte">
                    <div class="titleCard">MMind</div>
                    <div class="competenceCard">Figma</div>
                </div>
            </a>

            <!-- Je change l'id de projet sur lequel ma carte va pointer  -->
            <?php 
            $requete="SELECT * FROM projets WHERE id_proj=5";
            $stmt = $db->query($requete);
            $result = $stmt->fetchall(PDO::FETCH_ASSOC);
            ?>

            <a href="projet.php?proj=<?php foreach ($result as $row) echo $row["id_proj"]?>" style=" background-color:#<?php foreach ($result as $row) echo $row["couleur"]?>"  class="card cinq">
                <div class="imgCard"  style="background-image: url('./img/<?php foreach ($result as $row) echo $row["id_proj"]?>.jpg');"></div>
                <div class="texte">
                    <div class="titleCard">Dataviz</div>
                    <div class="competenceCard">Développement web</div>
                </div>
            </a>

            <!-- Je change l'id de projet sur lequel ma carte va pointer  -->
            <?php 
            $requete="SELECT * FROM projets WHERE id_proj=6";
            $stmt = $db->query($requete);
            $result = $stmt->fetchall(PDO::FETCH_ASSOC);
            ?>

            <a href="projet.php?proj=<?php foreach ($result as $row) echo $row["id_proj"]?>" style=" background-color:#<?php foreach ($result as $row) echo $row["couleur"]?>" class="card six">
                <div class="imgCard"  style="background-image: url('./img/<?php foreach ($result as $row) echo $row["id_proj"]?>.jpg');"></div>
                <div class="texte">
                    <div class="titleCard">Campagne de com'</div>
                    <div class="competenceCard">Figma</div>
                </div>
            </a>
        </div>
    </section>
    <div class="titlesection">
        <div class="taches cont"></div>
        <h2 class="title" id="contact">Contact</h2>
    </div>
    <p class="paragraphe" id="par2">Si tu es intéressé par mes compétences et mon profil, alors n’hésites pas à me contacter ! Je serais ravie de pouvoir échanger avec toi sur mes compétences professionnelles. <br>
    Je te partage également mon compte github si tu souhaites regarder de plus près mes projets en développement web.
    </p>
    <div class="contact">
        <a href="https://github.com/sabine-thb" class="circle github"></a>
        <a href="https://www.linkedin.com/in/sabine-thibout-0965b1251" class=" circle linkedin"></a>
        <a href="mailto:sabine@thibout.fr" class="circle mail"></a>
        <a href="tel:+33651827205" class="circle tel"></a>
    </div>
    <footer>
        <div class="footerContent">
            <p class="footertxt">Téléphone : 06-51-82-72-05</p>
            <p class="footertxt">Mail : sabine@thibout.fr</p>
            <p class="footertxt">2023 - Portfolio réalisé par Sabine Thibout </p>
        </div>
    </footer>

    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
     <script src="animations.js"></script>
     <script src="./script.js"></script>

</body>

</html>