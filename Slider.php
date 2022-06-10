
<?php
include("baglan.php");
$FotoSorgusu        =    $VeritabaniBaglantisi->prepare("SELECT * FROM Gorseller");
$FotoSorgusu->execute();
$FotoSayisi         =        $FotoSorgusu->rowCount();
$FotoKaydi          =         $FotoSorgusu->fetchAll(PDO::FETCH_ASSOC);

?>
<!-- Slider -->
  <div id="right">
    <div class="slider">
    <?php
    
    foreach ($FotoKaydi as $key) {
   
    ?>
    
 <?php    ?>
      <img src="img/<?php  echo $key["Fotoadi"]?>"  alt="" id="img<?php  echo$key["id"]?>">
      <img src="img/<?php  echo $key["Fotoadi"] ?>" alt="" id="img<?php  echo$key["id"] ?>">
      <img src="img/<?php  echo $key["Fotoadi"] ?>" alt="" id="img<?php  echo$key["id"] ?>">
      <img src="img/<?php  echo $key["Fotoadi"] ?>" alt="" id="img<?php  echo$key["id"] ?>">
      <img src="img/<?php  echo $key["Fotoadi"] ?>" alt="" id="img<?php  echo$key["id"] ?>">
      
      <span class="circle" id="circle<?php   echo$key["id"] ?>"> </span>
     
      <?php   } ?>
      <span class="fas fa-chevron-left " onclick="left()"></span>
      <span class="fas fa-chevron-right " onclick="right()"></span>
    </div>

    <aside id="left-bottom">
      <h2 style="margin:10px">Bloguma Hoş Geldiniz </h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, molestias ea omnis aliquam quidem obcaecati
        soluta! Sunt quidem exercitationem molestiae magnam atque corrupti velit recusandae, amet praesentium officia
        architecto pariatur.
      </p>
    </aside>
  </div>
