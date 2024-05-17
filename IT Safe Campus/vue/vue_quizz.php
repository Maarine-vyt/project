<!-- Contenue de la page : Affichage du quizz -->
<!-- Permet de récupérer d'il de la thématique et l'id de la formation -->
<?php
    if((isset($_GET['id_thematique']))&&(isset($_GET['id_formation']))){
        $id_thematique = $_GET['id_thematique'];
        $id_formation = $_GET['id_formation'];
?>
    <!-- Conteneur du quizz -->
    <div class="rectangle_accueil" style="height: auto;flex-direction: column;">
        <div class="rectangle_blanc" style="height: auto;width: 60%;">
            <div class="formulaire_quizz">
                <!-- Appel la fonction selectWhereFormations en fonction de l'id thématique -->
                <?php
                    $lesFormations = $unControleur -> selectWhereFormations($id_thematique);
                    //boucles sur toute les données dans la fonction
                    foreach ($lesFormations as $uneFormation) {
                ?>
                    <h2>Quizz <?php echo $uneFormation['nom_formation'];?></h2><hr>
                <?php
                    }
                ?>

                <!-- Appel la fonction selectWhereQuizz en fonction de l'id formation -->
                <?php
                    $lesQuizz = $unControleur -> selectWhereQuizz($id_formation);
                    //boucles sur toute les données dans la fonction pour afficher les données du
                    //quizz en fonction de la formation réalisée
                    foreach ($lesQuizz as $unQuizz) {
                ?>
                    <form method="post" action="" id="quizz_form">
                        <div class="formulaire_question">
                            <label><?php echo $unQuizz['libelleQ'];?></label><hr>

                            <?php
                                //afficher les réponses associés à ces questions
                                // id reponse ou id question ???
                            ?>

                            <input type="radio" id="???" name="???" value="??">
                            <span>HTML</span><br>
                            <input type="radio" id="???" name="???" value="??">
                            <span>HTML</span><br>
                            <input type="radio" id="???" name="???" value="??">
                            <span>HTML</span><br>
                        </div>
                    </form>
                <?php
                    }
                ?>
            </div>
            
            <!-- Bouton qui renvoie les données du formulaire et appel la fonction ??? qui va verifier
                        si les réponses son bonne dans la BDD via quizz.php -->
            <div class="fiche_contact" style="align-items: center;">
                <div id="connect_retour" class="button_connect">
                    <a href="#" class="link2" onclick="document.getElementById('quizz_form').submit();">
                        <button class="bouttonCommencer" style="width: 100%;">Envoyer mes réponses</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>