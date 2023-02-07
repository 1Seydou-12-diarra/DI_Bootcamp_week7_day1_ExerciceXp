
<?php 
//creation de la class DifferenceDate pour calculer la difference de deux date
Class DifferenceDate{
// les proprietés de la class
  public $dt1 ;
  public $dt2;
//un function permetant de faire le calcul 
  public function difference(){
     $sdate = new DateTime("1981-11-03");
     $edate = new DateTime("2013-09-04");
     $interval = $sdate->diff($edate);
     return $interval->y. " years, ". $interval->m." months, ".$interval->d." days ";
}
}
// l'instanciation de l'objet $resultat et l'affichage du resultat 
$resultat = new DifferenceDate();
echo " Difference " . $resultat->difference();

?>