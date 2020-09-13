<?php 

	class Animal {
		public $qiyu, $bleki, $petet, $anu;
	}
	class Kucing extends Animal {
		public function bersuara(){
			return "miawmiawmiaw";
		}
	}

	class Anjing extends Animal {
		public function bersuara(){
			return "guk guk guk";
		}
	}

	class Elang extends Animal {
		public function bersuara(){
			return "kwaaaaaaakkkk";
		}
	}

	class Angsa extends Animal {
		public function bersuara(){
			return "ngoakngoakngoak";
		}
	}

	$qiyu = new Kucing;
	echo "qiyu Adalah Kucing <br>";
	echo "Jumlah Kakinya Adalah 4 <br>";
	echo "Tidak Bisa Terbang <br>";
	echo "Suaranya Adalah ".$qiyu->bersuara()."<br>";
	echo "<hr>";

	$bleki = new Anjing;
	echo "bleki Adalah Anjing <br>";
	echo "Jumlah Kakinya Adalah 4 <br>";
	echo "Tidak Bisa Terbang <br>";
	echo "Suaranya Adalah ".$bleki->bersuara()."<br>";
	echo "<hr>";

	$petet = new Elang;
	echo "petet Adalah Elang <br>";
	echo "Jumlah Kakinya Adalah 2 <br>";
	echo "Bisa Terbang <br>";
	echo "Suaranya Adalah ".$petet->bersuara()."<br>";
	echo "<hr>";

	$anu = new Angsa;
	echo "anu Adalah Angsa <br>";
	echo "Jumlah Kakinya Adalah 2 <br>";
	echo "Bisa Terbang <br>";
	echo "Suaranya Adalah ".$anu->bersuara()."<br>";
	echo "<hr>";
?> 