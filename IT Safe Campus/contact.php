<!-- Contenue de la page : fonctionnel de la page contacter -->
<?php
    //appel la page vue_contact et recupère les données envoyé par le formulaire
    require_once ("vue/vue_contact.php");

    //verifie que le champ "email" a bien été remplie
    //si oui, on appel la fonction insertContact qui va inserer dans la bdd
    if (isset($_POST["email"])){
        if ($_POST['email']==""){
            echo "<b><font color = 'red'>Veuillez remplir tous les champs obligatoires</font></b>";
        }else{
            $unControleur -> insertContact($_POST);
            echo $_POST;
        }
    }
?>