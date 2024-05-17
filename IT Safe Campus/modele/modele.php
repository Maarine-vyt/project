<?php
	//connexion avec le sgbd extraction injection exploitation
	class Modele {
		private $pdo ;

		//fonction qui permet de faire la connexion à la base de donnée
		public function __construct(){
			$this -> pdo = null;
			try{
				$this -> pdo = new PDO("mysql:host=localhost;dbname=itsafecampus","root","", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			}

			//affiche un message si on arrive pas à se connecter à la BDD
			catch(PDOException $exp){
				echo "Impossible de se connecter au serveur Mysql / itsafecampus";
				echo $exp -> getMessage();
			}
		}

		//methode qui insert des contacts dans la bdd
		public function insertContact($tab){
			if($this -> pdo != null){
				$requete = "INSERT into contact VALUES (null, :nom, :email, :message);";
				$donnees = array (":nom" => $tab["nom"],
								":email" => $tab["email"],
								":message" => $tab["message"]);
				$insert = $this -> pdo -> prepare ($requete);
				$insert -> execute ($donnees);
			}else{
				return null;
			}
		}

		//methode qui insert des utilisateurs dans la bdd
		public function insertUtilisateur($tab){
			if($this -> pdo != null){
				$requete = "INSERT into utilisateur VALUES (null, :nom, :prenom, :email, :mdp, :mdp_verif, :date_naissance, :niveau_etude);";
				$donnees = array (":nom" => $tab["nom"],
								":prenom" => $tab["prenom"],
								":email" => $tab["email"],
								":mdp" => $tab["mdp"],
								":mdp_verif" => $tab["mdp_verif"],
								":date_naissance" => $tab["date_naissance"],
								":niveau_etude" => $tab["niveau_etude"]);
				$insert = $this -> pdo -> prepare ($requete);
				$insert -> execute ($donnees);
			}else{
				return null;
			}
		}

		// methode qui sélectionne toute les données de toute les thématiques
		public function selectAllThematiquesAccueil () {
			if($this -> pdo != null){
				$requete ="SELECT * from thematique;";
				$select = $this -> pdo -> prepare ($requete);
				$select -> execute() ;
				return $select -> fetchAll();
			}else{
				return null;
			}
		}

		// methode qui sélectionne une thématique en fonction de son ID
		public function selectWhereThematiques ($id_thematique) {
			if($this -> pdo != null){
				$requete ="SELECT * from thematique where id_thematique = :id_thematique;";
				$donnees = array (":id_thematique" => $id_thematique);
				$select = $this -> pdo -> prepare ($requete);
				$select -> execute($donnees) ;
				return $select -> fetchAll();
			}else{
				return null;
			}
		}

		//methode qui sélectionne toute les données de toute less formations
		public function selectAllFormations () {
			if($this -> pdo != null){
				$requete ="SELECT * from formations;";
				$select = $this -> pdo -> prepare ($requete);
				$select -> execute() ;
				return $select -> fetchAll();
			}else{
				return null;
			}
		}

		//methode qui sélectionne toute les formations en fonction de l'ID de la thematique
		public function selectWhereFormations ($id_thematique){
			if($this -> pdo != null){
				$requete = "SELECT * from formations where id_thematique = :id_thematique ;";
				$donnees = array (":id_thematique" => $id_thematique);
				$select = $this -> pdo -> prepare ($requete);
				$select -> execute($donnees);
				return $select -> fetchAll();
			}else{
				return null;
			}
		}

		//methode qui sélectionne tout les elements mis dans la vue_formations en fonction de l'ID de l'utilisateur
		public function selectWhereFormationsUtilisateur ($id_utilisateur){
			if($this -> pdo != null){
				$requete = "SELECT * from vue_formations where id_utilisateur = :id_utilisateur ;";
				$donnees = array (":id_utilisateur" => $id_utilisateur);
				$select = $this -> pdo -> prepare ($requete);
				$select -> execute($donnees);
				return $select -> fetchAll();
			}else{
				return null;
			}
		}

		//méthode qui insert une formation en fonction de l'utilisateur connecté
		public function insertFormationUtilisateur($tab){
			if($this -> pdo != null){
				$requete = "INSERT into mes_formations VALUES (:id_formation, :id_utilisateur);";
				$donnees = array (":id_formation" => $tab["id_formation"],
								":id_utilisateur" => $tab["id_utilisateur"]);
				$insert = $this -> pdo -> prepare ($requete);
				$insert -> execute ($donnees);
			}else{
				return null;
			}
		}

		//methode qui sélectionne toute les quizz en fonction de l'ID de la formation
		public function selectWhereQuizz ($id_formation){
			if($this -> pdo != null){
				$requete = "SELECT * from quizz_question where id_formation = :id_formation ;";
				$donnees = array (":id_formation" => $id_formation);
				$select = $this -> pdo -> prepare ($requete);
				$select -> execute($donnees);
				return $select -> fetchAll();
			}else{
				return null;
			}
		}

		//methode qui sélectionne toute les reponses en fonction de l'ID de la reponse
		public function selectWhereQuizzReponse ($id_question){
			if($this -> pdo != null){
				$requete = "SELECT * from quizz_reponse where id_question = :id_question ;";
				$donnees = array (":id_question" => $id_question);
				$select = $this -> pdo -> prepare ($requete);
				$select -> execute($donnees);
				return $select -> fetchAll();
			}else{
				return null;
			}
		}

		//methode qui sélectionne toute les video en fonction de l'ID de la formation
		public function selectWhereVideo ($id_formation){
			if($this -> pdo != null){
				$requete = "SELECT * from video where id_formation = :id_formation ;";
				$donnees = array (":id_formation" => $id_formation);
				$select = $this -> pdo -> prepare ($requete);
				$select -> execute($donnees);
				return $select -> fetchAll(); 
			}else{
				return null;
			}
		}

		//methode qui sélectionne tout les cours en fonction de l'ID de la formation
		public function selectWhereCours ($id_formation){
			if($this -> pdo != null){
				$requete = "SELECT * from cours where id_formation = :id_formation ;";
				$donnees = array (":id_formation" => $id_formation);
				$select = $this -> pdo -> prepare ($requete);
				$select -> execute($donnees);
				return $select -> fetchAll(); 
			}else{
				return null;
			}
		}

		//methode qui sélectionne tout les elements mis dans la vue_cours en fonction de l'id de la formation
		public function selectWhereListeCours ($id_formation){
			if($this -> pdo != null){
				$requete = "SELECT * from vue_cours where id_formation = :id_formation ;";
				$donnees = array (":id_formation" => $id_formation);
				$select = $this -> pdo -> prepare ($requete);
				$select -> execute($donnees);
				return $select -> fetchAll();
			}else{
				return null;
			}
		}

		//méthode qui sélectionne l'utilisateur en fonction de son ID
		public function selectWhereUtilisateurs ($id_utilisateur){
			if($this -> pdo != null){
				$requete = "SELECT * from utilisateur where id_utilisateur = :id_utilisateur ;";
				$donnees = array (":id_utilisateur" => $id_utilisateur);
				$select = $this -> pdo -> prepare ($requete);
				$select -> execute($donnees);
				return $select -> fetchAll();
			}else{
				return null;
			}
		}

		//méthode qui verifie si l'email existe dans la BDD
		public function verifConnect ($tab){
			if($this -> pdo != null){
				$requete = "SELECT * FROM utilisateur WHERE email = :email and mdp = :mdp";
				$donnees = array (":email" => $tab['email'],
									":mdp" => $tab['mdp']);
				$select = $this -> pdo -> prepare ($requete);
				$select -> execute ($donnees);
				$unUser = $select -> fetch();
				return $unUser;
			}else{
				return null;
			}
		}
	}
?>