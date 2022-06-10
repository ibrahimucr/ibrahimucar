<?php

try {

    $VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
} catch (PDOException $Hata) {

    echo "Baglantı hatası" . $Hata->getMessage();
}
// function Filtrele($Deger)
// {
//     $Bir   =  trim($Deger);
//     $iki   =  strip_tags($Bir);
//     $Uc    =  htmlspecialchars($iki, ENT_QUOTES);
//     $sonuc =  $Uc;
//     return    $sonuc;
// }





// }









#Kaydırmalı resimde ilk görünen foto












#BLOG



?>


<!-- 







foreach ($FotoKaydi as $key) {
    # code...

    
    echo  $key["Fotoadi"]; 
    echo $key["id"];
}



echo$FotoKaydi["id"];




 -->