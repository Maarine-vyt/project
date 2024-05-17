<?php
    //fait appel au fichier modele
    //uniquement invoquer par index, position de index dans le dossier
    require_once ("modele/modele.php");
    class Controleur
    {
        private $unModele;

        //instanciation de la classe Modele
        public function __construct(){
            $this -> unModele = new Modele();
        }

        //fonction qui permet d'ajouter des contacts
        public function insertContact($tab){
            $this -> unModele -> insertContact($tab);
        }

        //fonction qui permet d'ajouter des utilisateurs
        public function insertUtilisateur($tab){
            $this -> unModele -> insertUtilisateur($tab);
        }

        //fonction qui permet  de sélectionner toute les thématiques pour les afficher à l'accueil
        public function selectAllThematiquesAccueil (){
            return $this -> unModele -> selectAllThematiquesAccueil ();
        }

        //fonction qui permet de sélectionner les thématiques en fonction de leur ID
        public function selectWhereThematiques ($id_thematique){
            return $this -> unModele -> selectWhereThematiques ($id_thematique);
        }

        //fonction qui permet  de sélectionner toute les formations pour les afficher
        public function selectAllFormations (){
            return $this -> unModele -> selectAllFormations ();
        }

        //fonction qui permet de sélectionner la formation en fonction de l'ID de la thématique
        public function selectWhereFormations ($id_thematique){
            return $this -> unModele -> selectWhereFormations ($id_thematique);
        }

        //fonction qui permet de sélectionner les formations que l'utilisateur à commencer
        public function selectWhereFormationsUtilisateur ($id_utilisateur){
            return $this -> unModele -> selectWhereFormationsUtilisateur ($id_utilisateur);
        }
        
        //fonction qui permet d'ajouter une formation à un utilisateur
        public function insertFormationUtilisateur ($tab){
            return $this -> unModele -> insertFormationUtilisateur ($tab);
        }
        
        //fonction qui permet de sélectionner le quizz en fonction de la formation
        public function selectWhereQuizz ($id_formation){
            return $this -> unModele -> selectWhereQuizz ($id_formation);
        }

        //fonction qui permet de sélectionner les reponse en fonction de la question
        public function selectWhereQuizzReponse ($id_reponse){
            return $this -> unModele -> selectWhereQuizzReponse ($id_reponse);
        }

        //fonction qui permet de sélectionner la vidéo en fonction de la formation sélectionné
        public function selectWhereVideo ($id_formation){
            return $this -> unModele -> selectWhereVideo ($id_formation);
        }

        //fonction qui permet de sélectionner le cours en fonction de la formation choisie
        public function selectWhereCours ($id_formation){
            return $this -> unModele -> selectWhereCours ($id_formation);
        }

        //fonction qui permet de sélectionner le nom de la formation en fonction du cours choisi
        public function selectWhereListeCours ($id_formation){
            return $this -> unModele -> selectWhereListeCours ($id_formation);
        }

        //fonction qui permet de sélectionner les utilisateurs en fonction de l'ID
        public function selectWhereUtilisateurs ($id_utilisateur){
            return $this -> unModele -> selectWhereUtilisateurs ($id_utilisateur);
        }

        //fonction qui permet de vérifier si l'utilisateur a déjà un compte
        public function verifConnect($tab){
            return $this -> unModele -> verifConnect($tab);
        }
    }
?>