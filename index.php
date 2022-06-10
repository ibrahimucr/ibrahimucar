<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>İbrahim Ucar</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <script src="Jscript.js"></script>
</head>

<body>
  <header>
    <div class="header">
      <ul>

        <li class="active">
          <a href="#"> <i class="fa-solid fa-house"></i> Anasayfa</a>
        </li>
        <li>
          <a href="#Hakkımda"> <i class="fa-solid fa-house"></i> Hakkımızda</a>
        </li>
        <li>
          <a href="#Teknoloji"><i class="fa-solid fa-house"></i> Teknoloji</a>
          <div class="drop-dawn-menu">
            <ul>
              <li><a href="#bilgisayar"> bilgisayar</a></li>

              <li><a href="#Telefon" >Telefon </a></li>

             
            </ul>
          </div>
        </li>
        <li>
          <a href="#iletisim"><i class="fa-solid fa-house"></i> İletişim</a>
        </li>
        <li>
          <a href="#Makale"><i class="fa-solid fa-house"></i> Makaleler</a>
        </li>
        <li>
          <a href="#Haber"><i class="fa-solid fa-house"></i> Haberler</a>
        </li>
      </ul>
      <ul>
        <form>
          <input id="form1" type="search" placeholder="Search" aria-label="Search" />
          <button id="btn1" type="submit">Search</button>

        </form>
    </div>
  </header>


<!-- Slider -->
<?php
  include("Slider.php")
?>



  



  <!-- MAkale -->
  <?php 
include("Makale.php")
?>
  

  <!-- TEKNOLOJİ -->

  <?php 
include("Teknoloji.php")
?>
  

  <!--Haber -->
  
  <?php 
include("Haber.php")
?>

  <!-- HAKKIMDA -->
  <?php 
include("Hakkımda.php")
?>


  <!-- İLETİŞİM -->
  <?php 
include("iletisim.php")
?>
  <!-- footer alanı -->
  <footer>

    <p>İbrahim UÇAR</p>

    <h3>iletişim</h3>
    <h4>Mail: abc@hotmail.com</h4>
    <h4>Telefon:05xx-xxx-xx-xx</h4>
    <h4>Adres: Paşabayır mah Bandırma/BALIKESİR</h4>

    <div class="social">
      <a href="#"><i class="fab fa-facebook  fa-3x"></i></a>
      <a href="#"><i class="fab fa-instagram fa-3x"></i></a>
      <a href="#"><i class="fa-brands fa-twitter  fa-3x "></i></a>
    </div>

  </footer>


</html>


