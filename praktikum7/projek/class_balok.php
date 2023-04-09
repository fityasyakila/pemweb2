<?php
class Balok
{
    public $panjang, $lebar, $tinggi;

    public function __construct($p, $l, $t)
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    public function getLuas()
    {
        return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }

    public function getVolume()
    {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}
$Balok = new Balok(12, 8, 14);
echo "Luas : " . $this->getLuas();
echo "<br>";
echo $objekBalok->getVolume();
?>