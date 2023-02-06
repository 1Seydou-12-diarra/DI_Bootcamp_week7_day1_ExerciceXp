<?php 
class Hello {

  public $message ;

  function affichage($msg){
    $this->message = $msg;
    return $this->message;
  }

 }
$bonjour = new  Hello();
echo $bonjour->affichage('MyClass class has initialized !'."\n");
?>
