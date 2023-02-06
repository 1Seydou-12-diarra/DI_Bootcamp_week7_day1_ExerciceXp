<?php
class Calculatrice {
    // Méthode pour calculer la différence entre deux dates
    public function difference($date1, $date2) {
      $diff = strtotime($date2) - strtotime($date1);
      return $diff / 86400;
    }
  }

  // Instanciation de la classe Calculatrice
  $calculatrice = new Calculatrice();

  // Appel de la méthode difference pour calculer la différence entre deux dates
  $diff = $calculatrice->difference("2022-01-01", "2022-12-31");

  // Affichage du résultat
  echo "La différence entre les deux dates est : $diff jours";
?>