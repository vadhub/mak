<?php
include "dbconnection.php";
$raw_sql_service_names = "select t.name, ts.name from `type_service` ts inner join `type` t on ts.id_type = t.id;";

$sql_cosm = "SELECT type_service.name FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Косметология' ORDER BY name ASC";
$sql_resn = "SELECT type_service.name FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Ресницы' ORDER BY name ASC";
$sql_pedic = "SELECT type_service.name FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Педикюрный зал' ORDER BY name ASC";
$sql_manic = "SELECT type_service.name FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Маникюрный зал' ORDER BY name ASC";
$sql_makeup = "SELECT type_service.name FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Макияж' ORDER BY name ASC";
$sql_brov = "SELECT type_service.name FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Брови' ORDER BY name ASC";
$sql_hair = "SELECT type_service.name FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Парикмахеры-стилисты' ORDER BY name ASC";
$sql_hair_recovery = "SELECT type_service.name FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Процедуры восстановления волос' ORDER BY name ASC";
$sql_hair_color = "SELECT type_service.name FROM type_service JOIN type ON type_service.id_type = type.id WHERE type.name = 'Окрашивание волос' ORDER BY name ASC";

$raw_sql_masters = "select t.name, m.first_name, m.last_name
from `masters` m
	inner join `masters_&_type` mt on m.id = mt.id_master
    inner join `type` t on mt.id_type = t.id;";

$sql_masters_cosm = "SELECT `masters`.`first_name`, `masters`.`last_name`
FROM `masters`
	INNER JOIN `masters_&_type` ON `masters_&_type`.id_master = `masters`.id
    INNER JOIN `type` ON `masters_&_type`.id_type = `type`.id
WHERE `type`.name = 'Косметология';";
$sql_masters_resn = "SELECT `masters`.`first_name`, `masters`.`last_name`
FROM `masters`
	INNER JOIN `masters_&_type` ON `masters_&_type`.id_master = `masters`.id
    INNER JOIN `type` ON `masters_&_type`.id_type = `type`.id
WHERE `type`.name = 'Ресницы';";
$sql_masters_pedic = "SELECT `masters`.`first_name`, `masters`.`last_name`
FROM `masters`
	INNER JOIN `masters_&_type` ON `masters_&_type`.id_master = `masters`.id
    INNER JOIN `type` ON `masters_&_type`.id_type = `type`.id
WHERE `type`.name = 'Педикюрный зал';";
$sql_masters_manic = "SELECT `masters`.`first_name`, `masters`.`last_name`
FROM `masters`
	INNER JOIN `masters_&_type` ON `masters_&_type`.id_master = `masters`.id
    INNER JOIN `type` ON `masters_&_type`.id_type = `type`.id
WHERE `type`.name = 'Маникюрный зал';";
$sql_masters_makeup = "SELECT `masters`.`first_name`, `masters`.`last_name`
FROM `masters`
	INNER JOIN `masters_&_type` ON `masters_&_type`.id_master = `masters`.id
    INNER JOIN `type` ON `masters_&_type`.id_type = `type`.id
WHERE `type`.name = 'Макияж';";
$sql_masters_brov = "SELECT `masters`.`first_name`, `masters`.`last_name`
FROM `masters`
	INNER JOIN `masters_&_type` ON `masters_&_type`.id_master = `masters`.id
    INNER JOIN `type` ON `masters_&_type`.id_type = `type`.id
WHERE `type`.name = 'Брови';";
$sql_masters_hair = "SELECT `masters`.`first_name`, `masters`.`last_name`
FROM `masters`
	INNER JOIN `masters_&_type` ON `masters_&_type`.id_master = `masters`.id
    INNER JOIN `type` ON `masters_&_type`.id_type = `type`.id
WHERE `type`.name = 'Парикмахеры-стилисты';";
$sql_masters_hair_recovery = "SELECT `masters`.`first_name`, `masters`.`last_name`
FROM `masters`
	INNER JOIN `masters_&_type` ON `masters_&_type`.id_master = `masters`.id
    INNER JOIN `type` ON `masters_&_type`.id_type = `type`.id
WHERE `type`.name = 'Процедуры восстановления волос';";
$sql_masters_hair_color = "SELECT `masters`.`first_name`, `masters`.`last_name`
FROM `masters`
	INNER JOIN `masters_&_type` ON `masters_&_type`.id_master = `masters`.id
    INNER JOIN `type` ON `masters_&_type`.id_type = `type`.id
WHERE `type`.name = 'Окрашивание волос';";

$sql = $pdo->query($sql_masters_brov)->fetchAll(PDO::FETCH_ASSOC);

foreach ($sql as $value)
{
	$masters_brov[] = $value['first_name']." ".$value['last_name'];
}
var_dump($masters_brov);
/**
 *
 * Скрипт, обрабатывающий POST-запросы от JavaScript-сценариев
 * Скрипт получает строку запроса, а в ответ отправляет массив с данными
 */
// Непосредственно для этого скрипта мы создадим здесь массивы, в которых будут храниться
// значения, запрашиваемые JavaScript-сценарием. В ваших сценариях этих массивов, скорее всего,
// не будет. Информация, подобная этой, будет в вашей базе данных, и вам её придется оттуда
// извлечь. Как вы это сделаете, это уже ваши предпочтения
$types = array(
	1 => $masters_brov,
	2 => $pdo->query($sql_masters_cosm)->fetchAll(PDO::FETCH_ASSOC),
	3 => $pdo->query($sql_masters_makeup)->fetchAll(PDO::FETCH_COLUMN),
	4 => $pdo->query($sql_masters_manic)->fetchAll(PDO::FETCH_COLUMN),
	5 => $pdo->query($sql_masters_hair_color)->fetchAll(PDO::FETCH_COLUMN),
	6 => $pdo->query($sql_masters_hair)->fetchAll(PDO::FETCH_COLUMN),
	7 => $pdo->query($sql_masters_pedic)->fetchAll(PDO::FETCH_COLUMN),
	8 => $pdo->query($sql_masters_hair_recovery)->fetchAll(PDO::FETCH_COLUMN),
	9 => $pdo->query($sql_masters_resn)->fetchAll(PDO::FETCH_COLUMN)
);
$kinds = array(
	1 => $pdo->query($sql_brov)->fetchAll(PDO::FETCH_COLUMN),
	2 => $pdo->query($sql_cosm)->fetchAll(PDO::FETCH_COLUMN),
	3 => $pdo->query($sql_makeup)->fetchAll(PDO::FETCH_COLUMN),
	4 => $pdo->query($sql_manic)->fetchAll(PDO::FETCH_COLUMN),
	5 => $pdo->query($sql_hair_color)->fetchAll(PDO::FETCH_COLUMN),
	6 => $pdo->query($sql_hair)->fetchAll(PDO::FETCH_COLUMN),
	7 => $pdo->query($sql_pedic)->fetchAll(PDO::FETCH_COLUMN),
	8 => $pdo->query($sql_hair_recovery)->fetchAll(PDO::FETCH_COLUMN),
	9 => $pdo->query($sql_resn)->fetchAll(PDO::FETCH_COLUMN)
);
// Проверяем наличие переменной, которая укажет данному сценарию какие именно данные нужны
if (!isset($_POST['query']) || !$_POST['query']) {
	exit("Нет данных определяющих тип запроса");
}
else {
	// Сохраняем строку запроса данных в отдельной переменной
	$query = trim($_POST['query']); // Очищаем от лишних пробелов

	// Определяем тип запроса
	switch($query) {
	case 'getKinds':	// Запрос на получение видов транспорта
		// Сохраним в переменную значение выбранного типа транспорта
		$type_id = trim($_POST['type_id']); // Очистим его от лишних пробелов
		// Формируем массив с ответом
		$result = NULL;
		$i = 0;
		foreach ($types[$type_id] as $kind_id => $kind) {
			$result[$i]['kind_id'] = $kind_id;
			$result[$i]['kind'] = $kind;
			$i++;
		}
	break;
	case 'getCategories':	// Запрос на получение категорий транспорта
		// Сохраним в переменные значения выбранных типа транспорта и вида транспорта
		$type_id = trim($_POST['type_id']); // Очистим их от лишних пробелов
		$kind_id = trim($_POST['kind_id']);
		// Формируем массив с ответом
		$result = NULL;
		$i = 0;
		foreach ($kinds[$type_id][$kind_id] as $category_id => $category) {
			$result[$i]['category_id'] = $category_id;
			$result[$i]['category'] = $category;
			$i++;
		}
	break;
	default:
		// Если данные не определены
		$result = NULL;
	break;
	}
}

// Преобразуем данные в формат json, чтобы их смог обработать JavaScript-сценарий, приславший запрос
echo json_encode($result);

/**
 * Данный код не идеален. Сама идея представления исходных данных о транспорте в виде массива очень
 * далека от идеала. И вы должны понимать почему. Данные должны храниться в реляционной базе данных,
 * а представленный вариант написания сценария является лишь простейшим примером, который не стоит
 * в таком виде применять на практике. Вы здесь должны лишь понять принципы работы языка и взаимодействия
 * между языками программирования
 */
?>
