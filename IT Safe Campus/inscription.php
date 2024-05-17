<!-- Contenue de la page : fonctionnel de la page d'inscription -->
<?php
	//appel la page vue_inscription et recupère les données envoyé par le formulaire
    require_once ("vue/vue_inscription.php");

    //verifie que le champ "email" a bien été remplie
	//si oui, on appel la fonction insertUtilisateur qui va inserer dans la bdd
    if (isset($_POST["email"])){
        if ($_POST['email']==""){
            echo "<div  class='header_page'><h1 color = 'red'>Veuillez remplir tous les champs obligatoires</h1></div>";
        }else{
            $unControleur -> insertUtilisateur($_POST);
            $_SESSION['uneInscription'] = 1;
            echo '<script language="Javascript"> document.location.replace("index.php?page=9"); </script>';
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