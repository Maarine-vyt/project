<!-- Contenu de la page : Affichage des cours -->

<!-- Permet de récupérer l'id de la thematique choisie et de la formation choisie-->
<?php
    if((isset($_GET['id_thematique']))&&(isset($_GET['id_formation']))){
        $id_thematique = $_GET['id_thematique'];
        $id_formation = $_GET['id_formation'];
?>

    <!-- Appel la fonction selectWhereListeCours avec l'id de formation récupérer en haut de page -->
    <?php
        $lesCours = $unControleur -> selectWhereListeCours($id_formation);
        //boucles sur toute les données dans la fonction en fonction de la formation choisie
        foreach ($lesCours as $unCours) {
    ?>
        <!-- Conteneur du titre de la formation : dynamique avec la BDD -->
        <div class="titre_formation">
            <h2><?php echo $unCours['nom_formation']; ?></h2>
            <hr style="width: 60%;">
        </div>
    <?php
        }
    ?>

    <!-- Appel la fonction selectWhereVideo avec l'id de formation récupérer en haut de page -->
    <?php
        $lesVideos = $unControleur -> selectWhereVideo($id_formation);
        //boucles sur toute les données dans la fonction en fonction de la formation choisie
        foreach ($lesVideos as $uneVideo) {
    ?>
        <!-- Conteneur du lien de la vidéo du cours : dynamique avec la BDD -->
        <div class="video">
            <iframe src="<?php echo $uneVideo['url']; ?>" title="" allowfullscreen></iframe>
        </div>
    <?php
        }
    ?>

    <!-- Appel la fonction selectWhereCours avec l'id de formation récupérer en haut de page -->
    <?php
        $lesCours = $unControleur -> selectWhereCours($id_formation);
        //boucles sur toute les données dans la fonction en fonction de la formation choisie
        foreach ($lesCours as $unCours) {
    ?>

        <!-- Conteneur du titre du chapitre 1 -->
        <div class="titre_chapitre">
            <h2 style="    font-size: 200%;"><?php echo $unCours['chap_1']; ?></h2>
        </div>

        <div class="separation"><hr style="margin-left: -46%;margin-top: -9%;width: 70%;"></div>

        <!-- Conteneur de la description du chapitre 1 -->
        <div class="description">
            <?php echo $unCours['description_1']; ?>
        </div>

        <!-- Conteneur du titre du chapitre 2 -->
        <div class="titre_chapitre">
            <h2 style="font-size: 200%;"><?php echo $unCours['chap_2']; ?></h2>
        </div>

        <div class="separation"><hr style="margin-left: -46%;margin-top: -9%;width: 70%;"></div>

        <!-- Conteneur de la description du chapitre 2 -->
        <div class="description">
            <?php echo $unCours['description_2']; ?>
        </div>

    <?php
        }
    ?>

    <!-- Conteneur du bouton pour commencer le quizz du cours -->
    <div class="div_bouttonQuizz">
        <a href="index.php?page=8&id_thematique=<?php echo $id_thematique ?>&id_formation=<?php echo $id_formation ?>" >
            <button name="commencer" class="bouttonCommencer" style="height: 5%;">Commencer mon quizz</button>
        </a>
    </div>

<?php
    }
?>