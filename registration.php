<?php include "header.php";
$sql_type_category = "SELECT name FROM type";
?>
<div class="container">
  <p class="placeholder-glow">
    <span class="placeholder col-12"></span>
  </p>
  <h2 class="text-center">Онлайн запись</h2>
  <p class="placeholder-glow">
    <span class="placeholder col-12"></span>
  </p>
  <div class="modal-body">
    <form name="online_recording" action="registration_result.php" method="POST" class="row g-3" id="dynamic_selects">
      <div class="col-md-6">
        <label for="inputName" class="form-label">Имя*</label>
        <input type="name_reg" placeholder="Имя" class="form-control" name="name_reg" required>
      </div>
      <div class="col-md-6">
        <label for="inputPhone" class="form-label">Номер телефона*</label>
        <input type="tel" placeholder="79000000000" class="form-control" name="phone_reg" pattern="7\9[0-9]{2}\[0-9]{3}[0-9]{2}[0-9]{2}" required>
      </div>
      <div class="col-12">
        <label for="type" class="form-label">Категория услуг*</label>
        <select id="type" class="form-select" name="type_reg" required>
          <option value="0">Выберите из списка</option>
          <?php $i=1;
  				foreach ($pdo->query($sql_type_category) as $row) : ?>
  				<option value="<?=$row['name']?>"><?php echo htmlspecialchars($row['name']);?></option>
  				<?php $i++; endforeach;?>
        </select>
      </div>
      <div class="col-12">
        <label for="kind" class="form-label">Мастер*</label>
        <select id="kind" class="form-select" name="master_reg" required disabled>
          <option value="0">Выберите из списка</option>
        </select>
      </div>
      <div class="col-12">
        <label for="category" class="form-label">Тип услуги*</label>
        <select id="category" class="form-select" name="type_service_reg" required disabled>
          <option value="0">Выберите из списка</option>
        </select>
      </div>
      <div class="col-12">
        <label>Дата*</label>
        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
          <input placeholder="Select date" type="text" id="example" class="form-control">
          <label for="example">Try me...</label>
          <i class="fas fa-calendar input-prefix"></i>
        </div>
      </div>
      <div class="col-12">
        <label>Время*</label>
        <input type="time" value="12:12">
      </div>
      <div class="col-12">
          <button type="submit" class="btn btn-secondary" >Записаться</button>
      </div>
    </form>
  </div>
</div>
<script>
// Data Picker Initialization
$('.datepicker').datepicker({
inline: true
});
</script>
<?php include "footer.php" ?>
