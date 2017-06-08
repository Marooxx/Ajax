<?php

class Ville{

private $nom;
private $departement;
private $codePostal;

public function __construct($new_nom,$new_departement,$new_codePostal)
        {
                $this->nom=$new_nom;
			    $this->departement=$new_departement;
			    $this->codePostal=$new_codePostal;
        }
// SETTER
	public function setNom()
		{
				$this->nom = $new_nom;
		}
	public function setDepartement()
		{
				$this->departement = $new_departement;
		}
	public function setcodePostal()
		{
				$this->codePostal = $new_codePostal;
		}

// GETTER
	public function getNom()
		{
				//echo"Nom de la ville : ".$this->nom."<br>";// le "return" me permet de récupérer la value "$this->nom"
				return $this->nom;
		}
    public function getDepartement()
		{
				//echo"Département : ".$this->departement."<br>";// le "return" me permet de récupérer la value "$this->nom"
				return $this->departement;
		}
	public function getcodePostal()
		{
			//	echo"Code postal : ".$this->codePostal."<br>";// le "return" me permet de récupérer la value "$this->nom"
				return $this->codePostal;
		}
    public function getInfo()
        {
        echo "la ville de  ".$this->getnom()." ".'fait partie du departement de '." ". $this->getDepartement()."<br>";
        }

    public function creationVille()
		{
			echo "Nom de la ville : ".$this->nom."<br>";
			echo "Departement : ".$this->departement."<br>";
			echo "Code postal : ".$this->codePostal."<br>";

		}
}

$saintdenis = new ville("Saint_Denis","Seine_SAint_Denis","93");
$saintdenis->getInfo();
$paris = new ville("PAris XVII","Paris","75");
$paris->getInfo();// on affiche les données de la variable
