<?php
function additionner($a, $b)
{
  if (!is_numeric($a) || !is_numeric($b))
  {
    // On lance une nouvelle exception grâce à throw et on instancie un objet de la classe Exception.
    throw new Exception("Les deux paramètres doivent être des nombres");
  }

  return $a + $b;
}

// echo additionner(12, 3), "<br />";
// echo additionner("azerty", 54), "<br />";
// echo additionner(4, 8);


try // On va essayer d'effectuer les instructions situées dans ce bloc.
{
  echo additionner(12, 3), "<br /> \n";
  echo additionner("azerty", 54), "<br /> \n";
  echo additionner(4, 8);
}
catch (Exception $e) // On va attraper les exceptions "Exception" s'il y en a une qui est levée.
{
   echo "Une exception a été lancée. Message d\"erreur : ", $e->getMessage()."\n";
}

echo "Fin du script \n"; // Ce message s'affiche, ça prouve bien que le script est exécuté jusqu'au bout.
