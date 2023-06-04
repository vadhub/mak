<?php
include "dbconnection.php";

if (isset($_GET["id"])) {
  $id = htmlspecialchars($_GET["id"]);
  try {
    $sql = "DELETE FROM clients WHERE id = $id";

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
