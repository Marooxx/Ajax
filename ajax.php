<?php
    class Voiture{ // Class = Objet
        
        /*
            public = TOUT les monde peu l'utiliser (Class, Heritage & Instance)
            private = Uniquement la class qui à accee (ex: class Voiture)
        */

        // Variable GLOBAL //
        private $mysqli;

        public function __construct(){ // Lancement a la création de l'instance
            $this->mysqli = new mysqli("localhost", "root", "", "vehicule"); // new = Instance -> Recuperer tout les variables et les fonctions public de la class pour les mettre dans une variable. 
        }

        public function enregistrer($nombrePorte, $laMarque, $leModele, $lAnnee, $nombrePlace, $laCouleur){
           
            $this->mysqli->query("INSERT INTO `voiture`(`modele`, `nombre_porte`, `nombre_place`, `marque`, `couleur`, `annee`) VALUES ( '$leModele', '$nombrePorte', '$nombrePlace', '$laMarque', '$laCouleur', '$lAnnee' )");
        }

        public function lecture(){
            $listeVehicule = $this->mysqli->query("SELECT * FROM vehicule");
            $tableauVehicule = $listeVehicule->fetch_all(MYSQLI_ASSOC);
            echo "<pre>";
            print_r($tableauVehicule);
            echo "</pre>";
        }

        public function supprimer($id){
            $this->mysqli->query("DELETE FROM `vehicule` WHERE id = $id");
        }

    }
    $vehicule = new Voiture();
    $vehicule->enregistrer($_POST["modele"], $_POST["nombre_porte"], $_POST["nombre_place"], $_POST["marque"], $_POST["couleur"], $_POST["annee"]);
    // $vehicule->supprimer(3);
    // $vehicule->lecture();