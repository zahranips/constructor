<?php 
class Orang {
	public $nama,
	         $tinggiBadan ,
	           $beratBadan ,
	             $jenisKelamin;

	public function getCetak(){
		return "$this->nama,$this->tinggiBadan,$this->beratBadan,$this->jenisKelamin";
	}

	public function __construct($nama = "nama", $tinggiBadan = "tinggi badan",$beratBadan = "berat badan",$jenisKelamin = " jenis kelamin"){
		$this->nama = $nama;
		$this->tinggiBadan = $tinggiBadan;
		$this->beratBadan = $beratBadan;
		$this->jenisKelamin = $jenisKelamin;
	}
}

$data1 = new Orang("Zahrani","160 cm","60 kg","perempuan");
$data2 = new Orang("Putri","155 cm","55 kg","perempuan");
$data3 = new Orang("Solehah","170","50 kg","perempuan");

echo "Data Siswa 1: ". $data1->getCetak();
echo "<br>";
echo "Data Siswa 2: ". $data2->getCetak();
echo "<br>";
echo "Data Siswa 3: ". $data3->getCetak();

