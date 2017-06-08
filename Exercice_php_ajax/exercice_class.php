<?php

class Personne{

private $nom;
private $prenom;
private $adresse;

public function __construct($new_nom,$new_prenom,$new_adresse)
        {
        $this->nom=$new_nom;
		$this->prenom=$new_prenom;
		 $this->adresse=$new_adresse;
        }


            // SETTER
	public function setNom()
		{
		$this->nom=$new_nom;
		}
	public function setAdresse($new_adresse)// pour pouvoir changer l 'adresse , il faut mettre un new_adresse
		{
	$this->adresse=$new_adresse;
		}

public function setPrenom()
	 {
		$this->prenom=$new_prenom;
    }

        // GETTER
public function getNom()
	{
	       return $this->nom;
	}
public function getPrenom()
	{

	return $this->prenom;
	}


public function getAdresse()
    {
        return $this->getAdresse();
    }

public function creationInfo()
		{
			echo $this->nom." " . $this->prenom ." "."habite " . $this->adresse."<br>";

		}
public function __destruct() {
            echo "User destroy";
        }
}
$omar = new Personne("HAMZI ","Omar","43 avenue du president Wilson,La Plaine Saint-Denis");
$omar->setAdresse("2 rue de la joie, Levallois Perret(92300)");
$omar->creationInfo();
