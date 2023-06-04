<?php include "header.php";
if (isset($_POST["phone_change"])) {
  $phone = htmlspecialchars($_POST["phone_change"]);
  $id = htmlspecialchars($_GET["id"]);
  try {
    $sql = "UPDATE clients SET phone='$phone' WHERE id = $id";

      $affectedRowsNumber = $pdo->exec($sql);
      if ($affectedRowsNumber > 0)
      {
        echo "Sucsess!";
      }
  }
  catch (PDOException $e) {
      echo "Database error: " . $e->getMessage();
  }
}
?>
<div class="container">
  <span class="placeholder col-12"></span>
  <h2 class="text-center">Введите новый номер телефона</h2>
  <span class="placeholder col-12"></span>
  <form name="online_recording" action="#" method="POST" class="row g-3" id="dynamic_selects">
    <div class="col-md-6">
      <input type="name_reg" placeholder="Номер телефона" class="form-control" name="phone_change" required>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-secondary" >Изменить</button>
    </div>
  </form>
</div>
<?php include "footer.php"?>
