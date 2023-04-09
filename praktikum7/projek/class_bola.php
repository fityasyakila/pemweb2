<?php
class Bola 
{
   public  $phi, $jari2;

   public function __construct($p, $j)
   {
    $this->phi = $p;
    $this->jari2 = $j;
   }

   public function getLuas()
   {
    return 4 * ($this->phi * $this->jari2 * $this->jari2);
   }

   public function getVolume()
   { 
    return 4/3 * ($this->phi * $this->jari2 * $this->jari2 * $this->jari2);
   }
}
$objekBola = new Bola(150, 58, 20);
echo $objekBola->getLuas();
echo "<br>";
echo $objekBola->getVolume();
?>