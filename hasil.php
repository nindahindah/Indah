<?php
$angka = $_POST["angka"];
 
$hasil = "";
//echo $bilangan;
for($i=1; $i<=$angka; $i++){
    $p = 0; //total pembagi
 
    //mencari pembagi
    for($j=1; $j<=$i; $j++){
        if($i % $j == 0){
            $p += 1; //total pembagi bertambah
        }
    }
    
    //jika pembaginya kurang dari atau sama dengan 2.
    if($p <= 2){
        $hasil .= $i.", ";
    }
}
echo "<div style='width:700px;margin:0 auto 0 auto;background-color:#33A5FF;padding:30px'>";
echo "<h1>Hasil Bilangan Prima</h1>";
echo $hasil."<br><br>";
echo "<a style='background-color:#FFFFFF;padding:5px;text-decoration:none;' href='http://localhost/primaphp/input.html'>Ulangi</a>";
echo "</div>";
?>