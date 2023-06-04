<?php include "header.php";

$sql_cosm = "SELECT type_service.name, type_service.price FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Косметология' ORDER BY name ASC";
$sql_resn = "SELECT type_service.name, type_service.price FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Ресницы' ORDER BY name ASC";
$sql_pedic = "SELECT type_service.name, type_service.price FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Педикюрный зал' ORDER BY name ASC";
$sql_manic = "SELECT type_service.name, type_service.price FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Маникюрный зал' ORDER BY name ASC";
$sql_makeup = "SELECT type_service.name, type_service.price FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Макияж' ORDER BY name ASC";
$sql_brov = "SELECT type_service.name, type_service.price FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Брови' ORDER BY name ASC";
$sql_hair = "SELECT type_service.name, type_service.price FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Парикмахеры-стилисты' ORDER BY name ASC";
$sql_hair_recovery = "SELECT type_service.name, type_service.price FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Процедуры восстановления волос' ORDER BY name ASC";
$sql_hair_color = "SELECT type_service.name, type_service.price FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Окрашивание волос' ORDER BY name ASC";
?>
<p class="placeholder-glow">
  <span class="placeholder col-12 placeholder-lg"></span>
</p>
<h1 class="text-center">Прайс на услуги салона</h1>
<p class="placeholder-glow">
  <span class="placeholder col-12 placeholder-lg"></span>
</p>
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Косметология
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="table-responsive">
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Наименование услуги</th>
                <th scope="col">Цена</th>
              </tr>
            </thead>
            <tbody>
							<?php	foreach ($pdo->query($sql_cosm) as $row) : ?>
              <tr>
                <td><?php echo htmlspecialchars($row['name']) ?></td>
                <td><?php echo htmlspecialchars($row['price']) ?></td>
              </tr>
							<?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Ресницы
      </button>
    </h2>
		<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="table-responsive">
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Наименование услуги</th>
                <th scope="col">Цена</th>
              </tr>
            </thead>
            <tbody>
							<?php	foreach ($pdo->query($sql_resn) as $row) : ?>
              <tr>
                <td><?php echo htmlspecialchars($row['name']) ?></td>
                <td><?php echo htmlspecialchars($row['price']) ?></td>
              </tr>
							<?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Педикюрный зал
      </button>
    </h2>
		<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">
				<div class="table-responsive">
					<table class="table table-sm">
						<thead>
							<tr>
								<th scope="col">Наименование услуги</th>
								<th scope="col">Цена</th>
							</tr>
						</thead>
						<tbody>
							<?php	foreach ($pdo->query($sql_pedic) as $row) : ?>
							<tr>
								<td><?php echo htmlspecialchars($row['name']) ?></td>
								<td><?php echo htmlspecialchars($row['price']) ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
  </div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="flush-headingFour">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
				Маникюрный зал
			</button>
		</h2>
		<div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="table-responsive">
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Наименование услуги</th>
                <th scope="col">Цена</th>
              </tr>
            </thead>
            <tbody>
							<?php	foreach ($pdo->query($sql_manic) as $row) : ?>
              <tr>
                <td><?php echo htmlspecialchars($row['name']) ?></td>
                <td><?php echo htmlspecialchars($row['price']) ?></td>
              </tr>
							<?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="flush-headingFive">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
				Макияж
			</button>
		</h2>
		<div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="table-responsive">
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Наименование услуги</th>
                <th scope="col">Цена</th>
              </tr>
            </thead>
            <tbody>
							<?php	foreach ($pdo->query($sql_makeup) as $row) : ?>
              <tr>
                <td><?php echo htmlspecialchars($row['name']) ?></td>
                <td><?php echo htmlspecialchars($row['price']) ?></td>
              </tr>
							<?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="flush-headingSix">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
				Брови
			</button>
		</h2>
		<div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="table-responsive">
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Наименование услуги</th>
                <th scope="col">Цена</th>
              </tr>
            </thead>
            <tbody>
							<?php	foreach ($pdo->query($sql_brov) as $row) : ?>
              <tr>
                <td><?php echo htmlspecialchars($row['name']) ?></td>
                <td><?php echo htmlspecialchars($row['price']) ?></td>
              </tr>
							<?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="flush-headingSeven">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
				Пакрикмахеры-стилисты
			</button>
		</h2>
		<div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">
				<div class="accordion-body">
	        <div class="table-responsive">
	          <table class="table table-sm">
	            <thead>
	              <tr>
	                <th scope="col">Наименование услуги</th>
	                <th scope="col">Цена</th>
	              </tr>
	            </thead>
	            <tbody>
								<?php	foreach ($pdo->query($sql_hair) as $row) : ?>
	              <tr>
	                <td><?php echo htmlspecialchars($row['name']) ?></td>
	                <td><?php echo htmlspecialchars($row['price']) ?></td>
	              </tr>
								<?php endforeach; ?>
	            </tbody>
	          </table>
	        </div>
	      </div>
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="flush-headingEight">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
				Процедура восстановления волос
			</button>
		</h2>
		<div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">
				<div class="accordion-body">
	        <div class="table-responsive">
	          <table class="table table-sm">
	            <thead>
	              <tr>
	                <th scope="col">Наименование услуги</th>
	                <th scope="col">Цена</th>
	              </tr>
	            </thead>
	            <tbody>
								<?php	foreach ($pdo->query($sql_hair_recovery) as $row) : ?>
	              <tr>
	                <td><?php echo htmlspecialchars($row['name']) ?></td>
	                <td><?php echo htmlspecialchars($row['price']) ?></td>
	              </tr>
								<?php endforeach; ?>
	            </tbody>
	          </table>
	        </div>
	      </div>
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="flush-headingNine">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
				Окрашивание волос
			</button>
		</h2>
		<div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">
				<div class="accordion-body">
	        <div class="table-responsive">
	          <table class="table table-sm">
	            <thead>
	              <tr>
	                <th scope="col">Наименование услуги</th>
	                <th scope="col">Цена</th>
	              </tr>
	            </thead>
	            <tbody>
								<?php	foreach ($pdo->query($sql_hair_color) as $row) : ?>
	              <tr>
	                <td><?php echo htmlspecialchars($row['name']) ?></td>
	                <td><?php echo htmlspecialchars($row['price']) ?></td>
	              </tr>
								<?php endforeach; ?>
	            </tbody>
	          </table>
	        </div>
	      </div>
			</div>
		</div>
	</div>
</div>
<?php include "footer.php" ?>
