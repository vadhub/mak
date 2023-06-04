<?php include "header.php";
$sql_clients = "SELECT * FROM clients";?>
<div class="container">
  <p class="placeholder-glow">
    <span class="placeholder col-12"></span>
  </p>
  <h2 class="text-center">Наши клиенты</h2>
  <p class="placeholder-glow">
    <span class="placeholder col-12"></span>
  </p>
    <div class="table-responsive">
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">Имя</th>
            <th scope="col">Номер</th>
            <th scope="col">Изменить</th>
            <th scope="col">Удалить</th>
          </tr>
        </thead>
        <tbody>
          <?php	foreach ($pdo->query($sql_clients) as $row) : ?>
          <tr>
            <td><?php echo htmlspecialchars($row['first_name']) ?></td>
            <td><?php echo htmlspecialchars($row['phone']) ?></td>
            <td>
              <a href="change.php?id=<?=$row['id']?>">
                <img src="pictures/change.png" height="20">
              </a>
            </td>
            <td>
              <a href="delete.php?id=<?=$row['id']?>">
                <img src="pictures/delete.png" height="20">
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include "footer.php" ?>
