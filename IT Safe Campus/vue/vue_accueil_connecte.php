<!-- Permet de récupérer l'ID de l'utilisateur -->
<?php
    if(isset($_SESSION['id_utilisateur'])){
        $id_utilisateur = $_SESSION['id_utilisateur'];
        
?>
    <!-- Contenu de la page : Accueil avec connexion -->
    <div class="rectangle_accueil_connecte">
        <div class="rectangle_blanc_connecte">
            <h2 style="margin-left: 0%; color:#00008F;">Bienvenue</h2>
            <p style="margin-top: -2%;">La sécurité numérique commence par la connaissance</p>
            <a href="index.php?page=1"><button class="bouttonFormationConnecte">Mes formations</button></a>
        </div>
    </div>

<?php
    }
?>