<?php
class factorial_of_a_number
{
  public $nombre;

  public function __construct($nombre)
   {
     if (!is_int($nombre))
	   {
	       echo "Invalid number ";
        }
  $this->nombre = $nombre;
	}
  public function result()
    {
     $factorial = 1;
     for ($i = 1; $i <= $this->nombre; $i++)
	  {
	    $factorial *= $i;
      }
	   return $factorial;
	 }

  }


$newfactorial = New factorial_of_a_number(5);
echo $newfactorial->result();
?>