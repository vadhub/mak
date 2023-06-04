<?php
$sql_inform = "SELECT name, content FROM inform_site;";
foreach ($pdo->query($sql_inform) as $row)
{
  $inform_site[$row['name']] = $row['content'];
}
$phone = $inform_site['phone'];
$adress = $inform_site['adress'];
$link_vk = $inform_site['link_vk'];
$link_telegram = $inform_site['link_telegram'];
?>
<footer class="footer-dark bg-dark">
  <div class="container py-4 py-md-5 px-4 px-md-3">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
      <div class="col">
        <div class="row">
          <div class="col">
            <a class="fw-bold text-white" href="tel:<?=$phone;?>" onclick="yaCounter64359838.reachGoal('PhoneNumber'); return true;"><?=$phone;?></a>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <span class="footer-box_adress text-white"><?=$adress;?></span>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <a class="footer-box_map text-white" href="Kontakts.php">Смотреть на карте</a>
          </div>
        </div>
      </div>
      <div class="col">

      </div>
      <div class="col">
        <span class="text-white position-absolute top-0 end-0">Мы в социальных сетях: </span>
      </div>
      <div class="col">
        <a href="<?=$link_vk;?>">
          <img src="pictures/footer-vk.png" height="50"></img>
        </a>
        <a href="<?=link_telegram;?>">
          <img src="pictures/footer-telega.png" height="50"></img>
        </a>
      </div>
    </div>
  </div>
</footer>
<footer>
</body>
</html>
