<!-- Contenu de la page : formulaire d'ajout d'utilisateur -->
<head>
    <title></title>
    <link rel="stylesheet" href="main.css" />
</head>

<div class="connexion">
    <!-- Conteneur de l'image -->
    <div class="rectangle_connexion">
        <img src="images/connect_inscrip.jpg" alt=""/>
    </div>

    <!-- Conteneur du formulaire d'inscription -->
    <div class="rectangle_formulaire" style="margin-top: 3%;">
        <h2 style="margin-left: 2%;">Inscription</h2><hr style="width: 15%; margin-left: 44%;">

        <div class="formulaire_ajout">
            <form method="post" action="" id="inscription_form">
                <div class="rangee">
                    <div class="un_input" style="display: flex;margin-left: 3%;gap: 30%;">
                        <div>
                            <input id="nom" name="nom" type="text" placeholder="Nom"></input>
                        </div>
                        <div>
                            <input id="prenom" name="prenom" type="text" placeholder="Prenom"></input>
                        </div>
                    </div><hr>

                    <div class="un_input">
                        <input id="email" name="email" type="email" placeholder="Email"></input>
                    </div><hr>

                    <div class="un_input">
                        <input id="mdp" name="mdp" type="password" placeholder="Mot de passe"></input>
                    </div><hr>

                    <div class="un_input">
                        <input id="mdp_verif" name="mdp_verif" type="password"
                        placeholder="Confirmation mot de passe"></input>
                    </div><hr>

                    
                    <div class="un_input" style="display: flex;margin-left: 3%;gap: 30%;">
                        <div>
                            <input id="date_naissance" name="date_naissance" type="date"
                            placeholder="Date de naissance"></input>
                        </div>
                        <div>
                            <input id="niveau_etude" name="niveau_etude" type="text"
                            placeholder="Niveau d'étude"></input>
                        </div>
                    </div><hr>
                </div>

                <!-- Conteneur des boutons retour et connexion -->
                <div class="connect">
                    <!-- Bouton qui permet de revenir à la page d'avant -->
                    <div class="button_connect" style="margin-left: 15%;">
                        <a href="index.php?page=0">
                            <button class="bouttonCommencer" style="width: 100%;">Retour</button>
                        </a>
                    </div>

                    <!-- Bouton qui renvoie les données du formulaire et appel la fonction insertUtilisateur qui va
                    ajouter dans la bdd via inscription.php -->
                    <div class="button_connect" style="margin-right: 17%;">
                        <a href="#" class="link2" onclick="document.getElementById('inscription_form').submit();">
                            <button class="bouttonCommencer" style="width: 100%;">Inscription</button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>