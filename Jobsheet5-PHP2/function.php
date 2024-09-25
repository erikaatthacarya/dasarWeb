<?php
//membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Assalamaualaikum,";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
//memanggil fugsi yang sudah dibuat
perkenalan("Hamdana","Hello");

echo "<hr>";
$saya = "Elok";
$ucapanSalam = "Selamt pagi";
//memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);
?>