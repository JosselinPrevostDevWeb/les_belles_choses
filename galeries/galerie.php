<?php 
    include ("../commun/head.php");
?>
    <!-- complement HEAD -->
    <link rel="stylesheet" href="./galerie.css">
    <title>Les Belles Choses - galeries</title>
<?php include "../commun/header.php"; ?>
    
    <!-- CORP -->
    <div class="scene_container_galerie">
        <div class="part_container_galerie ">
            <a href="./objets.php">    
                <div class="part_objet">
                    <div class="sous_part">
                        <div class="final final_objet">
                            <img src="https://picsum.photos/id/200/1921/1081" alt="image galerie objets">
                            <div class="container_h1 container_h1_objet">
                                <h1 class="titre_objet">LES OBJETS</h1>
                            </div>
                        </div>
                    </div>
                </div>
           </a>
        </div>
        <div class="part_container_galerie">
            <a href="./vetements.php">
                <div class="part_vetement">
                    <div class="sous_part">
                        <div class="final final_vetement">
                            <img src="https://picsum.photos/id/201/1921/1081" alt="image galerie objets">
                            <div class="container_h1 container_h1_vetement">
                                <h1 class="titre_vetements">LES VETEMENTS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

<?php include "../commun/footer&script.php"; ?>