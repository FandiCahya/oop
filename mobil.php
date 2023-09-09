<?php
class mobil {
    var $jenis;
    var $merk;
    var $warna;

    function hargaMobil() {
        if ($this->jenis == 'Jazz' && $this->merk == 'Honda' && $this->warna == 'Merah')
            echo 'Rp 400000000';
        else
            echo 'Rp 150000000';
    }
}

$mobil1 = new mobil;
$mobil1->jenis = 'Jazz';
$mobil1->merk = 'Honda';
$mobil1->warna = 'Merah';
echo $mobil1->hargaMobil();
echo "<br>";

$mobil2 = new mobil;
$mobil2->jenis = 'Supra';
$mobil2->merk = 'Toyota';
$mobil2->warna = 'Putih';
echo $mobil2->hargaMobil();
?>
