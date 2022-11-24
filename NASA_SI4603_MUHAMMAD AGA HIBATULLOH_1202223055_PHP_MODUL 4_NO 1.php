<?php
    $barang = readline('masukkan banyak barang belanjaan : ');
    $i = 0;           //melakukan loop selama variabel i kurang dari atau sama dengan 0
    $totalHarga = 0;  //melakukan loop selama variabel 'totalharga' kurang dari atau sama dengan 0
    
    while ($i < $barang){
        $harga = readline('Masukkan harga barang : ');
        $totalHarga += (int)($harga);
        $i++;
    }
    if($totalHarga > 75000){
        $diskon = $totalHarga * 20 / 100;
        echo 'Total belanjaan sebelum diskon Rp.', $totalHarga,"\n";
        echo 'Total belanjaan sesudah diskon Rp.', $totalHarga-$diskon,"\n";
    } else {
        echo 'Total belanjaan Rp.', $totalHarga;
    }
    
?>