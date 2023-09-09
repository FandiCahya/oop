<?php
class mobil {
    public $jenis;
    public $merk;
    public $warna;

    function setJenis($x) {
        $this->jenis = $x;
    }
    function bacaJenis() {
        return $this->jenis;
    }
    function setMerk($x) {
        $this->merk = $x;
    }
    function bacaMerk() {
        return $this->merk;
    }
    function setWarna($x) {
        $this->warna = $x;
    }
    function bacaWarna() {
        return $this->warna;
    }
}

$mobil1 = new mobil();
$mobil1->setJenis('Ertiga');
$mobil1->setMerk('Suzuki');
$mobil1->setWarna('Biru');
echo 'Mobil 1 merupakan mobil berjenis ' . $mobil1->bacaJenis() . ' dengan merk ' . $mobil1->bacaMerk() . ' dan berwarna ' . $mobil1->bacaWarna();
echo "<br>";

$mobil2 = new mobil();
$mobil2->setJenis('Veneno Roadster');
$mobil2->setMerk('Lamborghini');
$mobil2->setWarna('Silver');
echo 'Mobil 2 merupakan mobil berjenis ' . $mobil2->bacaJenis() . ' dengan merk ' . $mobil2->bacaMerk() . ' dan berwarna ' . $mobil2->bacaWarna();
?>
