<?php
include '../layouts/head.php';
?>
<audio autoplay>
    <source src="../assets/sound/effect.mp3" type="audio/mpeg">
</audio>
<div class="bg-index">
    <div class="container">
        <div class="row justify-content-space-between">
           <div>
               <p>
                   <a class="btn btn-dark games mt-2 " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                       Games
                   </a>
               </p>
               <div class="collapse" id="collapseExample">
                   <ul class="list-group ">
                       <li class="list-group-item bg-dark"><a href="../games/gameAmityVille.php">AmityVille</a></li>
                       <li class="list-group-item bg-dark"><a href="../games/gameAsile.php.php">Asile</a></li>
                       <li class="list-group-item bg-dark"><a href="../games/gameGameOver.php.php">GameOver</a></li>
                       <li class="list-group-item bg-dark"><a href="../games/gameJurassicPark.php.php">JurassicPark</a></li>
                       <li class="list-group-item bg-dark"><a href="../games/gameMirror.php.php">Mirror</a></li>
                       <li class="list-group-item bg-dark"><a href="../games/gameMyLittlePoney.php.php">MyLittlePoney</a></li>
                       <li class="list-group-item bg-dark"><a href="../games/gamePokemon.php.php">Pokemon</a></li>
                   </ul>
               </div>
           </div>

            <div class="jumbotron bg-dark col-8 ml-2 cont-index">
                <h1 class="display-4 font-weight-bold mb-5">Hey, Dude!</h1>
                <p class="lead font-weight-bold">You are stuck in a psychiatric hospital since 3 years now, and it’s time to escape and live the most incredible adventure of your life !</p>
                <hr class="my-4">
                <p class="font-weight-bold">What are you waiting for ? Just click GO and escape !</p>
                <p class="lead">
                    <a class="btn btn-danger btn-lg mt-4 go " href="../games/gameAsile.php" role="button">GO !</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
include '../layouts/footer.php';
?>