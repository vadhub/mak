<?php include "header.php" ?>
<form name="choose_design" action="result.php" method="POST">
  <div class="container">
    <div class="modal-header">
      <h5 class="modal-title">Тест для подбора дизайна</h5>
    </div>
    <div class="card">
      <div class="card-body">
      <div id="vopros1" style="display:block;">
        <h5>1. Ваш возраст?</h5>
        <img class="img-fluid mx-auto d-block" src="pictures/test/g1.jpg"/>
        <span class="placeholder col-12 bg-light"></span>
        <div class="alert alert-secondary" role="alert">
            <select class="form-select" name="q1" id="z_1" onchange="YouHavntPass(1)">
              <option selected disabled value>Выберите вариант</option>
              <option value="1">до 18</option>
              <option value="2">18-25</option>
              <option value="3">25-34</option>
              <option value="4">35-44</option>
              <option value="5">44-54</option>
              <option value="6">55+</option>
            </select>
        </div>
      </div>
      <div id="vopros2" style="display:none;">
        <h5>2. Влияет ли время года на выбор вашего маникюра?</h5>
        <img class="img-fluid mx-auto d-block" src="pictures/test/g11.jpg"/>
        <span class="placeholder col-12 bg-light"></span>
        <div class="alert alert-secondary" role="alert">
          <select class="form-select" name="q2" id="z_2" onchange="YouHavntPass(2)">
            <option selected disabled value>Выберите вариант</option>
            <option value="1">Зима</option>
            <option value="2">Весна</option>
            <option value="3">Лето</option>
            <option value="4">Осень</option>
            <option value="5">Не влияет</option>
          </select>
        </div>
      </div>
      <div id="vopros3" style="display:none;">
        <h5>3. Какая у вас форма ногтей?</h5>
        <img class="img-fluid mx-auto d-block" src="pictures/test/g3.png"/>
        <span class="placeholder col-12 bg-light"></span>
        <div class="alert alert-secondary" role="alert">
          <select class="form-select" name="q3" id="z_3" onchange="YouHavntPass(3)">
            <option selected disabled value>Выберите форму</option>
            <option value="1">Овальная</option>
            <option value="2">Квадратная</option>
            <option value="3">Треугольная</option>
            <option value="4">Прямоугольная</option>
          </select>
        </div>
      </div>
      <div id="vopros4" style="display:none;">
        <h5>4. Какую цветовую гамму вы предпочитаете в одедже?</h5>
        <img class="img-fluid mx-auto d-block" src="pictures/test/g14.png"/>
        <span class="placeholder col-12 bg-light"></span>
        <div class="alert alert-secondary" role="alert">
          <select class="form-select" name="q4" id="z_4" onchange="YouHavntPass(4)">
            <option selected disabled value>Выберите цвет</option>
            <option value="1">Пастельные и нежные оттенки</option>
            <option value="2">Яркие цвета</option>
            <option value="3">Классические цвета (белый, черный)</option>
            <option value="4">Темные оттенки</option>
            <option value="4">Разные</option>
          </select>
        </div>
      </div>
      <div id="vopros5" style="display:none;">
        <h5>5. Какой дизайн вы предпочитаете?</h5>
        <img class="img-fluid mx-auto d-block" src="pictures/test/g12.png"/>
        <span class="placeholder col-12 bg-light"></span>
        <div class="alert alert-secondary" role="alert">
          <select class="form-select" name="q5" id="z_5" onchange="YouHavntPass(5)">
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
      </div>
      <div id="vopros6" style="display:none;">
        <h5>6. Какую длину вы предпочитаете?</h5>
        <img class="img-fluid mx-auto d-block" src="pictures/test/g13.jpg"/>
        <span class="placeholder col-12 bg-light"></span>
        <div class="alert alert-secondary" role="alert">
          <select class="form-select" name="q6" id="z_6" onchange="YouHavntPass(6)">
            <option selected disabled value>Выберите длину</option>
            <option value="1">Короткие</option>
            <option value="2">Средние</option>
            <option value="3">Длинные</option>
            <option value="4">Очень длинные</option>
          </select>
        </div>
      </div>
      <div id="vopros7" style="display:none;">
        <h5>7. Какую форму вы предпочитаете?</h5>
        <img class="img-fluid mx-auto d-block" src="pictures/test/g10.png"/>
        <span class="placeholder col-12 bg-light"></span>
        <div class="alert alert-secondary" role="alert">
          <select class="form-select" name="q7" id="z_7" onchange="YouHavntPass(7)">
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
      </div>
    </div>
    </div>
    <div class="d-grid gap-2">
      <button id="kn_sl" name="kn_sl" class="btn btn-secondary btn-lg" number='1' onclick="sled_vopr();" style="display:block;" disabled>Далее</button>
    </div>
    </div>
    </div>
  </div>
</form>

<script type="text/javascript" src="js/choose_design.js"></script>

<?php include "footer.php" ?>
