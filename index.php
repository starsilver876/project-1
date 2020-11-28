<?php

class product {
	public $merk, $tipe, $display, $ram, $harga;

	public function cetakTipe(){
		return $this->tipe;
	}

	function KeceppatanKinerja(){
		return "Kecepatan Kinerja dari ponsel ini adalah".$this->ram;

	}
}


$redmi = new product;
$redmi->merk = "Redmi";
$redmi->tipe = "Remi 8 Pro";
$redmi->display = "6,5 inc";
$redmi->ram = " 6 GB";
$redmi->harga = "Rp.3.3500.000";

$redmi2 = new product;
$redmi2->merk = "Redmi";
$redmi2->tipe = "Remi 8 Pro";
$redmi2->display = "6,5 inc";
$redmi2->ram = " 6 GB";
$redmi2->harga = "Rp.3.3500.000";

echo "$redmi->tipe";
echo "<br>";
echo "$redmi->tipe";

if