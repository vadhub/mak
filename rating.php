<?php include "header.php" ?>
<div class="container">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Тест для подбора дизайна</h5>
    </div>
    <div class="modal-body">
      <form action="result.php" method="POST" name="CD">
        <div class="mb-3">
          <div class="alert alert-dark" role="alert">
            1. Ваш возраст?
          </div>
          <img class="img-fluid mx-auto d-block" src="pictures/test/g1.jpg"/>
          <span class="placeholder col-12"></span>
          <select class="form-select" name="q1" id="z_1" onchange="checkform()" required>
            <option selected disabled value>Выберите вариант</option>
            <option value="1">до 18</option>
            <option value="2">18-25</option>
            <option value="3">25-34</option>
            <option value="4">35-44</option>
            <option value="5">44-54</option>
            <option value="6">55+</option>
          </select>
          </div>
        <div class="mb-3">
          <div class="alert alert-dark" role="alert">
            2. Влияет ли время года на выбор вашего маникюра?
          </div>
          <img class="img-fluid mx-auto d-block" src="pictures/test/g11.jpg"/>
          <span class="placeholder col-12"></span>
          <select class="form-select" name="q2" onchange="checkform()" required>
            <option selected disabled value>Выберите вариант</option>
            <option value="1">Зима</option>
            <option value="2">Весна</option>
            <option value="3">Лето</option>
            <option value="4">Осень</option>
            <option value="5">Не влияет</option>
          </select>
        </div>
        <div class="mb-3">
          <div class="alert alert-dark" role="alert">
            3. Какая у вас форма ногтей?
          </div>
          <img class="img-fluid mx-auto d-block" src="pictures/test/g3.png"/>
          <span class="placeholder col-12"></span>
          <select class="form-select" name="q3" aria-label="select example" onchange="checkform()" required>
            <option selected disabled value>Выберите форму</option>
            <option value="1">Овальная</option>
            <option value="2">Квадратная</option>
            <option value="3">Треугольная</option>
            <option value="4">Прямоугольная</option>
          </select>
        </div>
        <div class="mb-3">
          <div class="alert alert-dark" role="alert">
            4. Какую цветовую гамму вы предпочитаете в одедже?
          </div>
          <div class="container text-center">
            <div class="row">
              <div class="col">
                <img class="img-fluid mx-auto d-block" src="pictures/test/g4.png"/>
              </div>
              <div class="col">
                <img class="img-fluid mx-auto d-block" src="pictures/test/g5.jpg"/>
              </div>
              <div class="col">
                <img class="img-fluid mx-auto d-block" src="pictures/test/g6.jpg"/>
              </div>
              <div class="col">
                <img class="img-fluid mx-auto d-block" src="pictures/test/g7.png"/>
              </div>
            </div>
          </div>
          <span class="placeholder col-12"></span>
          <select class="form-select" name="q4" onchange="checkform()" required>
            <option selected disabled value>Выберите цвет</option>
            <option value="1">Пастельные и нежные оттенки</option>
            <option value="2">Яркие цвета</option>
            <option value="3">Классические цвета (белый, черный)</option>
            <option value="4">Темные оттенки</option>
            <option value="4">Разные</option>
          </select>
        </div>
        <div class="mb-3">
          <div class="alert alert-dark" role="alert">
            5. Какой дизайн вы предпочитаете?
          </div>
          <img class="img-fluid mx-auto d-block" src="pictures/test/g12.png"/>
          <span class="placeholder col-12"></span>
          <select class="form-select" name="q5" onchange="checkform()" required>
            <option selected disabled value>Выберите дизайн</option>
            <option value="1">Рисунок</option>
            <option value="2">Кошачий глаз</option>
            <option value="3">Втирка</option>
            <option value="4">Пузырчатый</option>
            <option value="5">Однотонное покрытие</option>
            <option value="6">Разноцветные ногти</option>
            <option value="7">Френч (классический, цветной)</option>
          </select>
        </div>
        <div class="mb-3">
          <div class="alert alert-dark" role="alert">
            6. Какую длину вы предпочитаете?
          </div>
          <img class="img-fluid mx-auto d-block" src="pictures/test/g13.jpg"/>
          <span class="placeholder col-12"></span>
          <select class="form-select" name="q6" onchange="checkform()" required>
            <option selected disabled value>Выберите длину</option>
            <option value="1">Короткие</option>
            <option value="2">Средние</option>
            <option value="3">Длинные</option>
            <option value="4">Очень длинные</option>
          </select>
        </div>
        <div class="mb-3">
          <div class="alert alert-dark" role="alert">
            7. Какую форму вы предпочитаете?
          </div>
          <img class="img-fluid mx-auto d-block" src="pictures/test/g10.png"/>
          <span class="placeholder col-12"></span>
          <select class="form-select" name="q7" onchange="checkform()" required>
            <option selected disabled value>Выберите форму</option>
            <option value="1">Квадрат</option>
            <option value="2">Мягкий квадрат</option>
            <option value="3">Сквуовал</option>
            <option value="4">Овальная</option>
            <option value="5">Миндаль</option>
            <option value="6">Стилет</option>
            <option value="7">Трапеция</option>
            <option value="8">Балерина</option>
            <option value="9">Эйдж</option>
            <option value="10">Скошенная</option>
            <option value="11">Стрела</option>
            <option value="12">Круглые</option>
          </select>
        </div>
        <button type="submit"  class="btn btn-dark-mak mt-2 text-center" name="submit_test">Отправить</button>
      </form>
    </div>
  </div>
</div>
<?php include "footer.php" ?>
