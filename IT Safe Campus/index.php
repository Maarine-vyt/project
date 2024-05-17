<!-- Contenue de la page : fonctionnel de l'index -->
<?php
    //Ici on demarre une session si il est pas déjà connecté
	if (!isset($_SESSION)) {
	    session_start();
	}
    //si il est connecté on revient à la page accueil
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = 0;
	}
    //si il appuie sur le bouton deconnexion(100) alors on detruit la session
	if ($page == 100) {
		session_destroy();
	}

    //fait appel au fichier controleur
    //uniquement invoquer par index, position de index dans le dossier
	require_once ("controleur/controleur.php");
	//instanciation du controleur
	$unControleur = new Controleur();
?>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Safe Campus</title>
    <link rel="stylesheet" href="main.css" />
</head>

<body onload="noDisplay()">
    <!-- Menu qui change selon l'onglet sur lequel l'utilisateur se trouve -->
    <div class="menu" id="header_menu">

        <!-- Logo de l'application en haut à gauche -->
        <div class="menu_logo">
            <a href="index.php?page=0">
                <img src = "images/Logo_en_petit.png"/>
            </a>
        </div>

        <!-- Menu contextuel avec liens -->
        <div class="menu_onglets">
            <ul>
                <li><a href="index.php?page=0" >Accueil</a></li>
                <li><a href="index.php?page=1" >Thématiques</a></li>
                <li><a href="index.php?page=2" >A propos</a></li>
                <li><a href="index.php?page=3" >Contact</a></li>
            </ul>
        </div>

        <!-- Conteneur des liens a droite si connecté ou pas -->
        <div class="menu_onglet_connexion">
            <ul style="margin-left: 35%;">
                <?php
                    //si il est connecter il a accès au bouton "mon profil" et "deconnexion"
                    if (isset($_SESSION['email'])){
                        echo "<li><a href='index.php?page=6'>Mon profil</a></li>";
                        echo "<li><a href = 'index.php?page=100'>Déconnexion</a></li>";
                    }else{
                        echo "<li><a href = 'index.php?page=9'>Connexion</a></li>";
                    }
                ?>
            </ul>
        </div>

    </div>

    <!-- Permet de naviguer sur les differente page avec les "case", qu'on appelera dans les href
    Plus securisé car on ne voit pas le nom des pages appeler mais les numeros -->
    <?php
        if (isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 0;
        }
        switch ($page){
            //permet d'afficher la bonne page d'accueil si connecté ou pas
            case 0 : if (isset ($_SESSION['email'])){
                        require_once("accueil_connecte.php");
                    }else{
                        require_once("accueil.php");
                    }
                    break;
            case 1 : require_once("liste_thematique.php");
                    break;
            case 2 : require_once("a_propos.php");
                    break;
            case 3 : require_once("contact.php");
                    break;
            case 4 : require_once("inscription.php");
                    break;
            case 5 : require_once("cours.php");
                    break;
            case 6 : require_once("mon_profil.php");
                    break;
            //pour avoir accès au formation il faut être connecté
            case 7 : if (isset($_SESSION['email'])){
                        require_once("liste_formation.php");
                    }else{
                        require_once("connexion.php");
                    }
                    break;
            case 8 : require_once("quizz.php");
                    break;
            case 9 : require_once("connexion.php");
                    break;
            case 10 : require_once("accueil_connecte.php");
                    break;
            case 100 : header("Location: index.php");
                    break;
            default :
        }
    ?>

    <!-- Pied de page -->
    <footer id="footer_menu">
            <div class="element_footer_logo">
                <img src = "images/Logo_en_gros.png"/>
            </div>
            <div class="element_footer">
                <a  href="index.php?page=2" class="element_desc">A propos</a>
            </div>
            <div class="element_footer">
                <a href="index.php?page=3" class="element_desc">Contact</a>
            </div>
            <div class="element_footer">
                <a href="index.php?page=3" class="element_desc">Mentions légales</a>
            </div>

            <div class="element_footer_reseaux">

                <a href="index.php?page=3" class="element_desc">Réseaux Sociaux</a>

                <div style="display: flex; width: 110%; align-items: center; gap: 5%; margin-left: 8%;">
                    <!-- Contenu de l'image : Instagram -->
                    <a href="index.php?page=3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="81" height="81" viewBox="0 0 81 81"
                        fill="none" style="width: 60%;">
                            <path d="M80.38 40.19C80.38 17.9937 62.3863 0 40.19 0C17.9937 0 0 17.9937 0 40.19C0
                            62.3863 17.9937 80.38 40.19 80.38C62.3863 80.38 80.38 62.3863 80.38 40.19Z"
                            fill="url(#paint0_linear_45_364)"/>
                            <path d="M33.501 40.2928C33.501 36.5903 36.5007 33.588 40.2022 33.588C43.9037 33.588
                            46.9051 36.5903 46.9051 40.2928C46.9051 43.9953 43.9037 46.9976 40.2022 46.9976C36.5007
                            46.9976 33.501 43.9953 33.501 40.2928ZM29.8775 40.2928C29.8775 45.9968 34.4999 50.6205
                            40.2022 50.6205C45.9046 50.6205 50.5269 45.9968 50.5269 40.2928C50.5269 34.5888 45.9046
                            29.9651 40.2022 29.9651C34.4999 29.9651 29.8775 34.5888 29.8775 40.2928ZM48.5228
                            29.5556C48.5227 30.033 48.664 30.4996 48.9289 30.8966C49.194 31.2937 49.5707 31.6031
                            50.0114 31.786C50.4522 31.9689 50.9374 32.0169 51.4055 31.9239C51.8736 31.8309 52.3036
                            31.6013 52.6411 31.2638C52.9788 30.9265 53.2087 30.4965 53.302 30.0284C53.3953 29.5602
                            53.3477 29.0749 53.1652 28.6338C52.9828 28.1928 52.6737 27.8157 52.277 27.5503C51.8804
                            27.2849 51.4139 27.1432 50.9366 27.143H50.9357C50.2961 27.1433 49.6826 27.3976 49.2302
                            27.8499C48.7779 28.3022 48.5234 28.9158 48.5228 29.5556ZM32.079 56.6642C30.1187 56.5749
                            29.0531 56.2482 28.345 55.9723C27.4063 55.6067 26.7365 55.1713 26.0322 54.4679C25.328
                            53.7644 24.892 53.0951 24.5283 52.156C24.2522 51.4481 23.9257 50.3819 23.8366 48.421C23.739
                            46.3009 23.7196 45.6641 23.7196 40.293C23.7196 34.9219 23.7406 34.2868 23.8366
                            32.165C23.9258 30.2041 24.2548 29.14 24.5283 28.4299C24.8937 27.4909 25.329 26.8209 26.0322
                            26.1165C26.7355 25.412 27.4046 24.9759 28.345 24.612C29.0527 24.3359 30.1187 24.0092 32.079
                            23.9201C34.1984 23.8226 34.8351 23.8031 40.2022 23.8031C45.5694 23.8031 46.2067 23.8243
                            48.3279 23.9201C50.2882 24.0094 51.352 24.3384 52.0618 24.612C53.0006 24.9759 53.6704 25.413
                            54.3747 26.1165C55.0789 26.8199 55.5132 27.4909 55.8786 28.4299C56.1547 29.1379 56.4812
                            30.2041 56.5703 32.165C56.6679 34.2868 56.6873 34.9219 56.6873 40.293C56.6873 45.6641
                            56.6679 46.2991 56.5703 48.421C56.481 50.3819 56.1529 51.4477 55.8786 52.156C55.5132 53.0951
                            55.0779 53.765 54.3747 54.4679C53.6714 55.1707 53.0006 55.6067 52.0618 55.9723C51.3541
                            56.2484 50.2882 56.575 48.3279 56.6642C46.2085 56.7617 45.5718 56.7812 40.2022
                            56.7812C34.8327 56.7812 34.1978 56.7617 32.079 56.6642ZM31.9125 20.3018C29.772 20.3992
                            28.3093 20.7388 27.032 21.2359C25.7091 21.7494 24.5892 22.4382 23.4701 23.5558C22.351
                            24.6734 21.6642 25.7954 21.1509 27.1187C20.6538 28.3972 20.3144 29.8595 20.2169
                            32.0006C20.1179 34.1452 20.0952 34.8308 20.0952 40.2928C20.0952 45.7548 20.1179 46.4404
                            20.2169 48.585C20.3144 50.7262 20.6538 52.1884 21.1509 53.4669C21.6642 54.7894 22.3512
                            55.9126 23.4701 57.0298C24.589 58.1469 25.7091 58.8348 27.032 59.3497C28.3117 59.8469 29.772
                            60.1864 31.9125 60.2839C34.0575 60.3813 34.7418 60.4057 40.2022 60.4057C45.6627 60.4057
                            46.3481 60.383 48.4919 60.2839C50.6326 60.1864 52.0944 59.8469 53.3725 59.3497C54.6946
                            58.8348 55.8153 58.1474 56.9344 57.0298C58.0534 55.9122 58.7389 54.7894 59.2536
                            53.4669C59.7506 52.1884 60.0917 50.7261 60.1875 48.585C60.285 46.4388 60.3077 45.7548
                            60.3077 40.2928C60.3077 34.8308 60.285 34.1452 60.1875 32.0006C60.09 29.8594 59.7506 28.3964
                            59.2536 27.1187C58.7389 25.7962 58.0517 24.6753 56.9344 23.5558C55.817 22.4364 54.6946
                            21.7494 53.3742 21.2359C52.0944 20.7388 50.6325 20.3976 48.4936 20.3018C46.3496 20.2042
                            45.6643 20.1799 40.2038 20.1799C34.7434 20.1799 34.0575 20.2026 31.9125 20.3018Z"
                            fill="white"/>
                            <defs>
                                <linearGradient id="paint0_linear_45_364" x1="78.8351" y1="80.38" x2="-1.5449"
                                y2="1.84167e-07" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FBE18A"/>
                                <stop offset="0.21" stop-color="#FCBB45"/>
                                <stop offset="0.38" stop-color="#F75274"/>
                                <stop offset="0.52" stop-color="#D53692"/>
                                <stop offset="0.74" stop-color="#8F39CE"/>
                                <stop offset="1" stop-color="#5B4FE9"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>

                    <!-- Contenu de l'image : Facebook -->
                    <a href="index.php?page=3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="81" height="81" viewBox="0 0 81 81"
                        fill="none" style="width: 60%;">
                            <path d="M40.19 80.38C62.3863 80.38 80.38 62.3863 80.38 40.19C80.38 17.9937 62.3863 0 40.19
                            0C17.9937 0 0 17.9937 0 40.19C0 62.3863 17.9937 80.38 40.19 80.38Z" fill="#3C5A99"/>
                            <path d="M43.3141 60.2851V41.9798H49.4839L50.4102 34.8131H43.3141V30.2524C43.3141 28.1802
                            43.8871 26.7751 46.8543 26.7751H50.6142V20.3855C49.9627 20.2991 47.7177 20.1029 45.1038
                            20.1029C39.6483 20.1029 35.9119 23.4311 35.9119
                            29.546V34.8209H29.7657V41.9876H35.9119V60.2851H43.3141Z" fill="white"/>
                        </svg>
                    </a>

                    <!-- Contenu de l'image : LinkeIn -->
                    <a href="index.php?page=3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="81" height="81" viewBox="0 0 81 81" 
                        fill="none" style="width: 60%;">
                            <path d="M40.19 80.38C62.3863 80.38 80.38 62.3863 80.38 40.19C80.38 17.9937 62.3863 0 40.19
                            0C17.9937 0 0 17.9937 0 40.19C0 62.3863 17.9937 80.38 40.19 80.38Z" fill="#0A66C2"/>
                            <path d="M54.4056 54.4136H48.4399V45.0725C48.4399 42.8433 48.3928 39.9782 45.3315
                            39.9782C42.223 39.9782 41.7442 42.4037 41.7442
                            44.9077V54.4136H35.7785V35.1977H41.5087V37.8195H41.5872C42.3879 36.3124 44.3346 34.7189
                            47.2389 34.7189C53.2831 34.7189 54.3978 38.6987 54.3978 43.8716L54.4056 54.4136ZM29.0514
                            32.5681C27.1282 32.5681 25.5897 31.0139 25.5897 29.1064C25.5897 27.199 27.1361 25.6448
                            29.0514 25.6448C30.9667 25.6448 32.5131 27.199 32.5131 29.1064C32.5131 31.0139 30.9588
                            32.5681 29.0514 32.5681ZM32.0421 54.4136H26.0607V35.1977H32.0421V54.4136ZM57.3885
                            20.0951H23.07C21.4294 20.0951 20.095 21.3903 20.095 22.9994V57.4592C20.095 59.0606
                            21.4216 60.3636 23.07 60.3636H57.3806C59.0212 60.3636 60.3635 59.0684 60.3635
                            57.4592V22.9994C60.3635 21.3903 59.0212 20.0951 57.3885 20.0951Z" fill="white"/>
                        </svg>
                    </a>

                    <!-- Contenu de l'image : Youtube -->
                    <a href="index.php?page=3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="81" height="81" viewBox="0 0 81 81"
                        fill="none" style="width: 60%;">
                            <path d="M40.19 80.38C62.3863 80.38 80.38 62.3863 80.38 40.19C80.38 17.9937 62.3863 0
                            40.19 0C17.9937 0 0 17.9937 0 40.19C0 62.3863 17.9937 80.38 40.19 80.38Z" fill="#E43535"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M53.1925 53.5866H28.5271C25.363 53.5866
                            22.7743 50.9418 22.7743 47.7094V34.0102C22.7743 30.7777 25.363 28.1329 28.5271
                            28.1329H53.1925C56.3565 28.1329 58.9453 30.7777 58.9453 34.0102V47.7094C58.9453 50.9418
                            56.3565 53.5866 53.1925 53.5866ZM37.5752 35.9373V46.808L47.424 41.1955L37.5752 35.9373Z" 
                            fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
    </footer>
</body>