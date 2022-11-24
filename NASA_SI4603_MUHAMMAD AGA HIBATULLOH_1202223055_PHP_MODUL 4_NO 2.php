<?php
$accUsername = 'Daspro';       //username yang benar
$accPassword = 'PPL4s!k';      //password yang benar

$i = 3;  //melakukan loop selama variabel i kurang dari atau sama dengan 3

while ($i > 0){
    $username = readline('Masukkan username Anda :');
    $password = readline('Masukkan password Anda :');
    if($accUsername === $username && $accPassword === $password){
        echo ("selamat, Anda Berhasil login!");
        break;
    }else {
        if($i > 1){
            $i -= 1;
            echo 'Login gagal, percobaan tersisa ',$i," kali \n";
        }else if($i <= 1) {
            echo "coba lagi besok";
            break;
        }
    }
    
}



?>