<?php
function waktuSaatIni() {
    date_default_timezone_set('Asia/Jakarta'); // Set timezone ke Jakarta

    $jam = date("H"); // Mendapatkan jam saat ini menggunakan time()
   
    if ($jam >= 5 && $jam < 12) {
        return "Selamat Pagi!";
    } elseif ($jam >= 12 && $jam < 18) {
        return "Selamat Siang!";
    } else {
        return "Selamat Malam!";
    }

}

function cetak($nama){
    echo waktuSaatIni()." $nama"; 
}


cetak("Dipo");
?>