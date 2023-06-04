<?php
// define variables and set to empty values
$q2 = $q3 = $q4 = $q5 = $q6 = $q7 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["q2"])) {
    $q2 = "Выберите вариант";
  }
  if (empty($_POST["q3"])) {
    $q3 = "Выберите вариант";
  }
  if (empty($_POST["q4"])) {
    $q4 = "Выберите вариант";
  }
  if (empty($_POST["q5"])) {
    $q5 = "Выберите вариант";
  }
  if (empty($_POST["q6"])) {
    $q6 = "Выберите вариант";
  }
  if (empty($_POST["q7"])) {
    $q7 = "Выберите вариант";
  }
}

?>
