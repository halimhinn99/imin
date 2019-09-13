<?php

	class Buku{
		

			public $jdl, $pnrbt, $nmpnls, $hal;
			public function __construct($jdl = " nama obat", $pnrbt = "untuk ", $nmpnls = "Nama Perusahaan", $hal = "Harga"){
				$this->jdl = $jdl;
				$this->pnrbt = $pnrbt;
				$this->nmpnls = $nmpnls;
				$this->hal = $hal;
			
			}
			public function getinfoBook(){

				$bku = "<br>Nama Obat : {$this->jdl}, <br>Untuk : {$this->pnrbt}, <br>Nama Perusahaan : {$this->nmpnls}, <br>Harga : {$this->hal}";

				return $bku;		
			}
	}

	Class BukuSatu extends Buku {

		public function getinfoBook(){
			$bku = " OBAT 1 : ".parent::getinfoBook();
			return $bku;
		
		}
	}
	class BukuDua extends Buku{

		public $rwyt;
		public function __construct($jdl, $pnrbt, $nmpnls, $hal, $rwyt){
			parent::__construct($jdl, $pnrbt, $nmpnls,$hal, $rwyt);
			$this->rwyt = $rwyt;
		}
		public function getinfoBook(){

			$bku = " OBAT 2 : ".parent::getinfoBook();
			return $bku;
		}
	}	

	$bku1 = new BukuSatu("Spirulina", "Menghilangkan Jerawat dan Muka Kusam", "TIENSHI", "450.000");
	$bku2 = new BukuDua("Zing", "Penambah Nafsu Makan", "TIENSHI", "350.000", "250.000 ");

	echo $bku1->getinfoBook();
	echo "<br>";
	echo "<br>";
	echo $bku2->getinfoBook();


?>