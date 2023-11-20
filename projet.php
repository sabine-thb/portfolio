<?php 

include("connexion.php");
$requete="SELECT * FROM projets WHERE id_proj=1";
$stmt=$db->query($requete);
$result=$stmt -> fetchall(PDO::FETCH_ASSOC);

if(isset($_GET["proj"])){
    $proj = $_GET["proj"];
}
else{
    $proj = "1";
}

$requete="SELECT * FROM projets WHERE id_proj=$proj";
$stmt=$db->query($requete);
$result=$stmt-> fetchall(PDO::FETCH_ASSOC);

?>

<!-- La je peux faire mon code  -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabine - projets</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleProjets.css">
</head>
<body>
    <div class="cursor"></div>
    <div class="cursor2"></div>
    <header>
        <nav>
            <a href="index.php#quiSuisJe" class="navItems">Qui suis-je ?</a>
            <a href="index.php#mesProjets" class="navItems">Mes projets</a>
            <a href="index.php#contact" class="navItems">Contact</a>
        </nav>
    </header>
    <section>
        <div class="wrapper">
            <a href="<?php foreach ($result as $row) echo $row["lien"]?>" style=" background-color:#<?php foreach ($result as $row) echo $row["couleur"]?>" class="card deux">
                    <div class="imgCard" style="background-image: url('./img/<?php foreach ($result as $row) echo $row["id_proj"]?>.jpg');"></div>
                    <div class="texte">
                        <div class="titleCard"><?php foreach ($result as $row) echo $row["titre"]?></div>
                        <div class="competenceCard"><?php foreach ($result as $row) echo $row["competence_principale"]?></div>
                    </div>
            </a>
            <div class="description">
                <div class="competencesContainer">
                     <img src="./img/taches.png" class="taches">
                     <div class="competences">Compétences : <?php foreach ($result as $row) echo $row["competences"]?></div>
                </div>
                <!-- <div class="titreProj">Le projet, c'est quoi ?</div> -->
                <div class="txt"><?php foreach ($result as $row) echo $row["description"]?></div>
                <a href="<?php foreach ($result as $row) echo $row["lien"]?>" class="lienProjet">Voir le projet</a>
        </div>
            
        </div>
    </section>
    <footer>
        <div class="contactez-moi">
            <div class="line"></div>
            <div class="txtContact"> Contactez-moi !</div>
            <div class="line"></div>
        </div>
        <div class="contact">
             <a href="https://www.linkedin.com/in/sabine-thibout-0965b1251" class=" circle linkedin"></a>
             <a href="mailto:sabine@thibout.fr" class="circle mail"></a>
             <a href="tel:+33651827205" class="circle tel"></a>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
     <script src="animationProjet.js"></script>
     <script src="./script.js"></script>
    
</body>
</html>