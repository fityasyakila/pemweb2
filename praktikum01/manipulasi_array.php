<?php
$arrayBuah = ["Jeruk","Manggis","Apel","Mangga","Pisang"];

//mengurutkan array
sort($arrayBuah);

//menghapus array yang paling akhir
array_pop($arrayBuah);

//digunakan untuk menghapus keseluruhan array, tapi bisa juga menghapus array secara spesifik
unset($arrayBuah[2]);

//untuk menambahkan array
array_push($arrayBuah,"Buah Jambu");

//menghapus data array yg paling pertama
array_shift($arrayBuah);

//menambahkan data array dipaling atas
array_unshift($arrayBuah, "Semangka");

//mengubah data/value array dengan spesifik key/index
$arrayBuah[1] = "Anggur";

foreach($arrayBuah as $buah) {
    echo "<br>" . $buah ;
}