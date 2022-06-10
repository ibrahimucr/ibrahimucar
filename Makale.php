<?php
include("baglan.php");


$HaberSorgusu        =    $VeritabaniBaglantisi->prepare("SELECT * FROM  blok ");
$HaberSorgusu->execute();
$HaberSayisi        =        $HaberSorgusu->rowCount();
$HaberKaydi         =         $HaberSorgusu->fetchAll(PDO::FETCH_ASSOC);


?>



<div class="container" id="Makale">
    <header>
        <h2>MAKALELER</h2>
    </header>
    <?php
    foreach ($HaberKaydi as $key) {
    ?>
 <?php    ?>
        
        <div class="card" id="_<?php  echo $key["id"] ?>">
            <h2 style="text-align:center">Product Card</h2>
            <div class="card-text">
                <img src="img/<?php  echo $key["gorseladi"] ?>	" alt="Denim Jeans" style="width:100% ">
                <h1> <?php  echo $key["Baslik"] ?></h1>
               
                <p>
                <button class="card-button" ><a href="göster.php?name=makale.<?php echo  $key["id"] ?>">OKU</a></button>   

            </p>
            </div>
        </div>
    <?php
    }
    ?>

   
</div>