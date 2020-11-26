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

echo "Tipe ".$redmi->KeceppatanKinerja();