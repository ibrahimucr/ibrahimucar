<?php
include("baglan.php");



$HakkımdaSorgusu    =    $VeritabaniBaglantisi->prepare("SELECT * FROM hakkımda limit 1  ");
$HakkımdaSorgusu->execute();
$Hakkımda            =        $HakkımdaSorgusu->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="hakkimda" id="Hakkımda">

<h2>Hakkımda</h2>

<article id="_1">
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quod repellat ratione ullam illum voluptas cum
    laudantium voluptates odio labore iusto dolores veritatis, itaque voluptatibus, quo dignissimos corporis
    aliquid. Laudantium?</p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam sed nostrum vel veniam delectus facilis, harum
    nemo saepe officia aperiam beatae, consectetur reprehenderit magnam ipsa vero assumenda voluptatibus odio
    explicabo.</p>
</article>
<article id="_2">
      <img src="img/pexels-hasan-albari-1229861.jpg" alt="">
    </article>
    <article id="_3">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quod repellat ratione ullam illum voluptas cum
        laudantium voluptates odio labore iusto dolores veritatis, itaque voluptatibus, quo dignissimos corporis
        aliquid. Laudantium?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quod. Obcaecati cumque ratione enim adipisci eos quas architecto illo quibusdam. Dignissimos nostrum error quibusdam sapiente dicta quam laboriosam reprehenderit ratione.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae veniam esse placeat ipsa ea quos aliquid aspernatur et nisi temporibus deserunt distinctio facere quam, voluptatem iure commodi dolorum officia.</p>
      </article>



</div>
