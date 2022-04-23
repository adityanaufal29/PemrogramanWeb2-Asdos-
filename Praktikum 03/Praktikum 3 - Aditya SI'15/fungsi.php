<?php
// Cara Membuat Fungsi
// function namafungsi(parameter){
//    code disini
// }

function luaspersegi($sisi){
    $rumus = $sisi * $sisi;
    return $rumus;
}

echo "Hasilnya adalah : " . luaspersegi(10);
echo "<br>";

// bikin fungsi nama

function nama(){
    echo "Nama saya adalah Aditya Naufal";
}

nama();
echo "<br>";

// fungsi menggunakan parameter
// parameter default

function perkenalan($nama = "Adit"){
    echo "Nama Panggilan Saya : " . $nama;
}

perkenalan("Adit");
?>