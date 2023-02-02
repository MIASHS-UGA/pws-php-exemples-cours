<?php
class MaClasse
{
    public $attribut1 = 'Premier attribut public';
    public $attribut2 = 'Deuxième attribut public';

    protected $attributProtege1 = 'Premier attribut protégé';
    protected $attributProtege2 = 'Deuxième attribut protégé';

    private $attributPrive1 = 'Premier attribut privé';
    private $attributPrive2 = 'Deuxième attribut privé';

    function listeAttributs()
    {
        foreach ($this as $attribut => $valeur)
        {
            echo "<strong>", $attribut, "</strong> => ", $valeur, "<br /> \n";
        }
    }
}


class Enfant extends MaClasse
{
    function listeAttributs() { // Redéclaration de la fonction 
        foreach ($this as $attribut => $valeur)
        {
            echo "<strong>", $attribut, "</strong> => ", $valeur, "<br /> \n";
        }
    }
}

$classe = new MaClasse;
$enfant = new Enfant;



echo "---- Liste les attributs depuis l\"intérieur de la classe principale ----<br /> \n";
$classe->listeAttributs();



echo "<br /> \n---- Liste les attributs depuis l\"intérieur de la classe enfant ----<br /> \n";
$enfant->listeAttributs();

echo "<br /> \n---- Liste les attributs depuis le script global ----<br /> \n";



foreach ($classe as $attribut => $valeur)
{
    echo "<strong>", $attribut, "</strong> => ", $valeur, "<br /> \n";
}
