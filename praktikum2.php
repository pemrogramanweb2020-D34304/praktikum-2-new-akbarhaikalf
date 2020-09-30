<title>Praktikum 2</title>
<?php
    if(isset($_POST['namaa'])){
        $namaa = $_POST['namaa'];
    echo "Hasil Pencarian Untuk ";
    "<br>";
	$user= [
		'Arsene Lupin'=>[
			'nama'=>'Arsene Lupin',
			'nik'=>'1234',
			'jenis_kelamin'=>'male',
			'tgl_lahir'=>'1902-03-23'
		],
		'Sherlock Holmes'=>[
			'nama'=>'Sherlock Holmes',
			'nik'=>'4321',
			'jenis_kelamin'=>'male',
			'tgl_lahir'=>'1876-08-16'
		],
		'Irene Adler'=>[
			'nama'=>'Irene Adler',
			'nik'=>'6789',
			'jenis_kelamin'=>'female',
			'tgl_lahir'=>'1884-10-07'
		],
    ];
    
$a=0;
$b=0;

foreach($user as $x){
    if(strtoupper($x['nama']) == strtoupper($namaa)){
        $a=1;
        $b=$x;
    }
}

if($b){
    echo "<b>".$namaa."</b><br>";
    echo "NIK: ".$b['nik']."<br>";
    echo "Kelamin: ".$b['jenis_kelamin']."<br>";
    echo "Tanggal Lahir: ".$b['tgl_lahir']."<br>";

}
else{
    echo "[".$namaa."] Tidak Ditemukan";
}



}
?>