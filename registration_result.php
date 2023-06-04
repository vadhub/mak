<?php include "header.php"?>
<?php
$sql_type_category = "SELECT name FROM type;";
$type = $pdo->query($sql_type_category)->fetchAll(PDO::FETCH_COLUMN);
$type_reg = $_POST["type_reg"];
$type_keys = array_keys($type);

if (isset($_POST["name_reg"]) && isset($_POST["phone_reg"])) {
  $name = htmlspecialchars($_POST["name_reg"]);
  $phone = htmlspecialchars($_POST["phone_reg"]);
  try {
    $sql = "INSERT INTO clients (name, phone) VALUES ('$name', '$phone');";

      $affectedRowsNumber = $pdo->exec($sql);

  }
  catch (PDOException $e) {
      echo "Database error: " . $e->getMessage();
  }
}

for ($i = 0; $i < count($type_keys); $i++)
{
    if ($type_reg == $type_keys[$i])
    {
      $type_service = $type[$i];
    }
}
?>
<div class="container">
  <span class="placeholder col-12"></span>
  <h2 class="text-center">Онлайн запись</h2>
  <span class="placeholder col-12"></span>
  <div class="alert alert-secondary" role="alert">
    Ваши данные успешно отправлены!
  </div>
  <div class="text-bg-secondary p-3">
    <?=$name?>, Вы выбрали категорию услуг "<?=$type_service;?>".
    В ближайшее время с Вами свяжется администратор нашего салона по данному телефону <?=$phone?> и уточнит у Вас дату и время.
  </div>
  <span class="placeholder col-12 bg-light"></span>
</div>


<?php include "footer.php" ?>
