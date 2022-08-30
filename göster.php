<link rel="stylesheet" href="style.css">
<?php



function Filtrele($Deger)
{
    $Bir   =  trim($Deger);
    $iki   =  strip_tags($Bir);
    $Uc    =  htmlspecialchars($iki, ENT_QUOTES);
    $sonuc =  $Uc;
    return    $sonuc;
};
include("baglan.php");
$GelenId = Filtrele($_GET["name"]);
$gelendeger = explode(".", $GelenId);


?>

<?php
if ($gelendeger[0] == "makale") {




    $HaberSorgusu        =    $VeritabaniBaglantisi->prepare("SELECT * FROM haberler where id= ?
 ");
    $HaberSorgusu->execute([$gelendeger[1]]);
    $key        =         $HaberSorgusu->fetch(PDO::FETCH_ASSOC);

?>
    <div class="container1">


        <div class="card" id="_<?php echo $key["id"] ?>">
            <h2 style="text-align:center">Product Card</h2>
            <div class="card-text">
                <img src="img/<?php echo $key["HaberfotoAdi"] ?>	" alt="Denim Jeans" style="width:100% ">
                <h1> <?php echo $key["HaberBasligi"] ?></h1>

                <p>
                    <?php echo $key["HaberIcerigi"] ?>
                </p>
            </div>
        </div>


    <?php
} elseif ($gelendeger[0] == "Haber") {




    $HaberSorgusu        =    $VeritabaniBaglantisi->prepare("SELECT * FROM haberler    where  id= ?
 ");
    $HaberSorgusu->execute([$gelendeger[1]]);
    $key        =         $HaberSorgusu->fetch(PDO::FETCH_ASSOC);

    ?>
        <div class="container1" id="Blog">



            <div class="card" id="_<?php echo $key["id"] ?>">
                <h2 style="text-align:center">Product Card</h2>
                <div class="card-text">
                    <img src="img/<?php echo $key["HaberfotoAdi"] ?>	" alt="Denim Jeans" style="width:100% ">
                    <h1> <?php echo $key["HaberBasligi"] ?></h1>

                    <p>
                        <?php echo $key["HaberIcerigi"] ?>
                    </p>
                </div>
            </div>






        <?php } else {


        $HaberSorgusu        =    $VeritabaniBaglantisi->prepare("SELECT * FROM haberler where id=?
 ");
        $HaberSorgusu->execute([$gelendeger[1]]);
        $key        =         $HaberSorgusu->fetch(PDO::FETCH_ASSOC);

        ?>
            <div class="container1" id="Blog">


                <div class="card" id="_<?php echo $key["id"] ?>">
                    <h2 style="text-align:center">Product Card</h2>
                    <div class="card-text">
                        <img src="img/<?php echo $key["HaberfotoAdi"] ?>	" alt="Denim Jeans" style="width:100% ">
                        <h1> <?php echo $key["HaberBasligi"] ?></h1>

                        <p>
                            <?php echo $key["HaberIcerigi"] ?>
                        </p>
                    </div>
                </div>


            <?php }; ?>

