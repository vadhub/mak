<?php include "header.php" ?>
  <span class="placeholder col-12"></span>
  <h2 class="text-center">Предлагаем следующий вариант</h2>
  <p class="placeholder-glow">
    <span class="placeholder col-12 placeholder-lg"></span>
  </p>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <img class="img-fluid mx-auto d-block" src="/pictures/test/result/q5_<?=$_POST["q5"];?>/<?=$_POST["q5"];?>.jpg"/>
      </div>
      <div class="col">
        <img class="img-fluid mx-auto d-block" src="/pictures/test/result/q5_<?=$_POST["q5"];?>/<?=$_POST["q5"]+1;?>.jpg"/>
      </div>
      <div class="col">
        <img class="img-fluid mx-auto d-block" src="/pictures/test/result/q5_<?=$_POST["q5"];?>/<?=$_POST["q5"]+2;?>.jpg"/>
      </div>
    </div>
  </div>
<?php include "footer.php" ?>
