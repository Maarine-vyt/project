<!-- Contenue de la page : fonctionnel de la page connexion -->
<?php
	//appel la page vue_connexion et recupère les données envoyé par le formulaire
    require_once ("vue/vue_connexion.php");

	//permet d'afficher une popup d'information pour dire qu'on est bien inscrit et qu'il faut se connecter
	if(isset($_SESSION["uneInscription"])){
		if(($_SESSION["uneInscription"] == 1)){
			echo '<script type="text/javascript">
					window.alert("Vous avez bien été inscrit! \nVeuillez vous connecter !"); 
				  </script>';
			$_SESSION["uneInscription"] = 0;
		}
	}

	//verifie que le champ "email" a bien été remplie
	//si oui, on appel la fonction verifConnect qui va créer une session utilisateur
	//et donner l'accès à la page d'accueil connecté
    if (isset($_POST["email"])){
    	if ($_POST['email']==""){
        	echo "<b><font color = 'red'>Veuillez remplir tous les champs obligatoires</font></b>";
    	}else{
			$unUser = $unControleur -> verifConnect($_POST);
			if (isset($unUser['id_utilisateur'])){
				//création d'une session
				$_SESSION ['email'] = $unUser ['email'];
                $_SESSION ['id_utilisateur'] = $unUser ['id_utilisateur'];
				echo '<script language="Javascript"> document.location.replace("index.php?page=0"); </script>';
			}else{
				echo "<b><font color = 'red'>ERROR attention aux identifiants</font></b>";
			}
		}
	}
?>

<!-- fonction qui permet de supprimer le header et le footer -->
<script type="text/javascript">
    function noDisplay(){
        let header_menu = document.getElementById("header_menu");
        let footer_menu = document.getElementById("footer_menu");
        if((getComputedStyle(header_menu).display != "none")&&(getComputedStyle(footer_menu).display != "none")){
            header_menu.style.display = "none";
            footer_menu.style.display = "none";
        } else {
            header_menu.style.display = "flex";
            footer_menu.style.display = "flex";
        };
    };
</script>