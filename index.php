<?php
require_once("./CLASSES/House.php");
require_once("./CLASSES/Cat.php");
require_once("./CLASSES/Dog.php");
require_once("./CLASSES/Cow.php");
require_once("./CLASSES/ChildClassWithRedifinition.php");
require_once("./CLASSES/ChildAnotherClassWithRedifinition.php");
require_once("./CLASSES/Calculator.php");

echo '<h4></br> ДОМА, ДАЧИ, И КВАРТИРЫ В ПРИДАЧУ</br></h4>';

$house1 = new House();
$house1->setHomeNumber(11);
$house1->setStageNumber(1);
$house1->setFlatNumber(2);

$house2 = new House();
$house2->setHomeNumber(22);
$house2->setStageNumber(2);
$house2->setFlatNumber(4);

echo '<b> информация о доме №1: </b></br>';
echo 'номер дома: ' . $house1->getNumber() . '</br>';
echo 'этажность:' . $house1->getFloors() . '</br>';
echo 'число квартир: ' . $house1->getFlats() . '</br>';

echo '</br><b> информация о доме №1: </b></br>';
echo 'номер дома: ' . $house2->getNumber() . '</br>';
echo 'этажность:' . $house2->getFloors() . '</br>';
echo 'число квартир: ' . $house2->getFlats() . '</br>';


echo '<h4></br> КОТЫ, СОБАКИ, КОРОВЫ</br></h4>';


$dog = new Dog();
$dog->setName('Орёл');
$cat = new Cat();
$cat->setName('Барсик');
$cow = new Cow();
$cow->setName('Ишак');

$dog->say('master');
$cat->say('get lost');
$cow->say('nothing about MU');

echo '<b> информация про собаку: </b></br>';
echo 'name: ' . $dog->getName() . '</br>';
echo 'say: ' . $dog->say('master') . '</br>';
echo 'feed (true): ' . $dog->feed(true) . '</br>';
echo 'feed (false): ' . $dog->feed(false) . '</br>';

echo '</br><b> информация про кота: </b></br>';
echo 'name: ' . $cat->getName() . '</br>';
echo 'say: ' . $cat->say('master') . '</br>';
echo 'feed (true): ' . $cat->feed(true) . '</br>';
echo 'feed (false): ' . $cat->feed(false) . '</br>';

echo '</br><b> информация про корову: </b></br>';
echo 'name: ' . $cow->getName() . '</br>';
echo 'say: ' . $cow->say('master') . '</br>';
echo 'feed (true): ' . $cow->feed(true) . '</br>';
echo 'feed (false): ' . $cow->feed(false) . '</br>';


echo '<h4></br> НАСЛЕДОВАНИЕ ИНКАПСУЛЯЦИЯ ПОЛИМОРФИЗМ</br></h4>';

$child1 = new ChildClassWithRedifinition();


echo '<b> информация из родительского класса: </b></br>';
echo 'приватное свойство $PrivateProperty до изменений: <b>' . $child1->getPrivateProperty() . '</b></br>';


$child1->setPrivateProperty('приватное свойство $PrivateProperty от родителя, установленное в дочернем классе');
$child1->privateProperty = 'публичное свойство с именем $PrivateProperty , установленное просто в первом дочернем классе';

echo '</br><b> информация из первого дочернего класса: </b></br>';

echo 'приватное свойство $PrivateProperty, измененное дочерним классом через сеттер: <b>' .
    $child1->getPrivateProperty() . '</b></br>';
echo 'публичное свойство $PrivateProperty из дочернего класса напрямую: <b>' .
    $child1->privateProperty . '</b></br>';

$child2 = new ChildAnotherClassWithRedifinition();
$child2->setPrivateProperty('второй наследник ИЗМЕНИЛ значение свойства');
$child2->privateProperty = 'публичное свойство с именем $PrivateProperty , НО установленное  уже во втором дочернем классе';

echo '</br><b> информация из второго дочернего класса: </b></br>';
echo 'приватное свойство $PrivateProperty, измененное дочерним классом через сеттер: <b>' .
    $child2->getPrivateProperty() . '</b></br>';
echo 'публичное свойство $PrivateProperty из дочернего класса напрямую: <b>' .
    $child2->privateProperty . '</b></br>';



$calc = new Calculator();
$a = 9;
$b = 2;

echo "<h4></br> КАЛЬКУЛЯТОР для двух чисел: $a и $b </h4>";

//echo "<b> для двух чисел: $a и $b </b></br>";

echo 'Сумма <b>'. $calc->summation($a ,$b) . '</b></br>';

echo 'Разность: <b>'.$calc->subtraction($a ,$b). '</b></br>';
echo 'Произведение: <b>'.$calc->multiplication($a ,$b). '</b></br>';
echo 'Деление: <b>'.$calc->division($a ,$b). '</b></br>';
echo 'Степень: <b>'.$calc->exponentiation($a ,$b). '</b></br>';
echo "Корень $a: <b>".$calc->root($a).'</b></br>';
echo "Корень $b: <b>".$calc->root($b).'</b></br>';
// echo 'сумма двух чисел'
