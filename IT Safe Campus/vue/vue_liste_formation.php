<!-- Contenu de la page : Affichage des formations -->

<!-- Permet de récupérer l'id de la thématique -->
<?php
    if(isset($_GET['id_thematique'])){
        $id_thematique = $_GET['id_thematique'];
?>

    <!-- Conteneur du titre -->
    <div class="titre_thematique">
        <h2>Nos formations</h2>
        <hr style="width: 60%;">
    </div>

    <!-- Appel la fonction selectWhereFormations avec l'id_thematique récupérer en haut de page -->
    <?php
        $lesFormations = $unControleur -> selectWhereFormations($id_thematique);
        //boucles sur toute les données dans la fonction pour afficher les formations en fonction
        //de la thématique choisie
        foreach ($lesFormations as $uneFormation) {
    ?>

        <!-- Conteneur de la formation : image, résumé -->
        <div class="thematique_liste">
            <div class="image_thematique" style="flex-direction: column;align-items: center;">
                <a href="index.php?page=5&id_thematique=<?php echo $uneFormation['id_thematique']; ?>
                &id_formation=<?php echo $uneFormation['id_formation']; ?>">
                    <img src="<?php echo "images/".$uneFormation['URL']; ?>" alt="" style=""/>
                </a>
            </div>
            <div class="resume">
                <p><?php echo $uneFormation['description']; ?></p>
            </div>
        </div>

        <div class="separation">
            <hr>
        </div>

    <?php
        }
    ?>
<?php
    }
?>