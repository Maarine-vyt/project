<!-- Contenu de la page : formulaire de connexion -->
<div class="connexion">
    <!-- Conteneur de l'image -->
    <div class="rectangle_connexion">
        <img src="images/connect_inscrip.jpg" alt=""/>
    </div>

    <!-- Conteneur du formulaire de connexion -->
    <div class="rectangle_formulaire">
        <h2 style="margin-left: 2%;">Connexion</h2><hr style="width: 15%; margin-left: 44%;">
        <div class="formulaire_ajout">
            <form method="post" action="" id="connexion_form">
                <div class="rangee">
                    <div class="un_input">
                        <input id="email" name="email" type="email" placeholder="Email"></input>
                    </div><hr>

                    <div class="un_input">
                        <input id="mdp" name="mdp" type="password" placeholder="Mot de passe"></input>
                    </div><hr>

                    <!-- <div class="mot_passe_oublie">
                        <a href="index.php?page=0">Mot de passe oublié ?</a>
                    </div> -->
                </div>

                <!-- Conteneur des boutons retour et connexion -->
                <div class="connect">
                    
                    <!-- Bouton qui permet de revenir à la page d'avant -->
                    <div class="button_connect" style="margin-left: 15%;">
                        <a href="href=index.php?page=0">
                            <button class="bouttonCommencer" style="width: 100%;">Retour</button>
                        </a>
                    </div>

                    <!-- Bouton qui renvoie les données du formulaire et appel la fonction verifConnect qui va verifier
                    si l'email existe dans la BDD via connexion.php -->
                    <div class="button_connect" style="margin-right: 17%;">
                        <a href="#" class="link2" onclick="document.getElementById('connexion_form').submit();">
                            <button class="bouttonCommencer" style="width: 100%;">Se connecter</button>
                        </a>
                    </div>
                </div>

                <br>
                <div>
                    <a href="index.php?page=4"> Pas de compte ? Inscris toi ! </a>
                </div>
            </form>
        </div>
    </div>
</div>