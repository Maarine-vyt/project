<!-- Contenue de la page : Affichage du profil de l'utilisateur connecté -->
<!-- Permet de récupérer l'id de l'utilisateur -->
<?php
    if(isset($_SESSION['id_utilisateur'])){
        $id_utilisateur = $_SESSION['id_utilisateur'];
?>

    <div class="profil">
        <!-- Conteneur des informations personnelles de l'utilisateur -->
        <div class="informations">
            <div>
                <h2>Mes informations</h2><hr>
            </div>

            <!-- Appel la fonction selectWhereUtilisateurs en fonction de l'id de l'utilisateur -->
            <?php
                $lesinfo = $unControleur -> selectWhereUtilisateurs($id_utilisateur);
                //boucles sur toute les données dans la fonction pour afficher les données de
                //l'utilisateur qui est connecté
                foreach ($lesinfo as $uneInfo) {
            ?>
        
                <div class="les_informations">
                    <label>Nom</label>
                    <label style="font-size: 130%;"><?php echo $uneInfo['nom'];?></label><hr>

                    <label>Prenom</label>
                    <label style="font-size: 130%;"><?php echo $uneInfo['prenom'];?></label><hr>

                    <label>Date de naissance</label>
                    <label style="font-size: 130%;"><?php echo date("d/m/Y", strtotime($uneInfo['date_naissance']));?>
                    </label><hr>
                    
                    <label>Niveau d'étude</label>
                    <label style="font-size: 130%;"><?php echo $uneInfo['niveau_etude'];?></label><hr>

                    <label>Email</label>
                    <label style="font-size: 130%;"><?php echo $uneInfo['email'];?></label><hr>
                </div>

            <?php
                }
            ?>
        </div>

        <!-- Conteneur des formations commencer par l'utilisateur -->
        <div class="informations">
            <div>
                <h2>Mes formations</h2><hr>
            </div>

            <!-- Appel la fonction selectWhereFormationsUtilisateur en fonction de l'id de l'utilisateur -->
            <?php
                $lesinfo = $unControleur -> selectWhereFormationsUtilisateur($id_utilisateur);
                //boucles sur toute les données dans la fonction pour afficher les formations
                //commencer par l'utilisateur connecté
                foreach ($lesinfo as $uneInfo) {
            ?>
                <div class="les_informations">
                    <label>Formation</label>
                    <label style="font-size: 130%;"><?php echo $uneInfo['nom_formation'];?></label>
                    <hr style="margin-top: 0.4;">
                </div>

            <?php
                }
            ?>
        </div>
    </div>

<?php
    }
?>