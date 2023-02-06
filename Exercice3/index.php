<?php

class Odre_table{
    public $_table;

    function __construct($table){
        $this->_table = $table;
    }

//function permetant de ranger les nombres du plus petit au plus grand 
    public function ordre(){
      $sortd = $this->_table;
      sort($sortd);	
      return $sortd;
    }

    
}
//ici on faire une instaciation de la classe 
$tableSort = new Odre_table(array(11, -2, 4, 35, 0, 8, -9));
var_dump($tableSort->ordre());


