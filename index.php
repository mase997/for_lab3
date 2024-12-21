<?php

require 'vendor/autoload.php';
use App\Point;
use App\Vector;

// Генерация случайных координат для точки T1
$T1_x = rand(-10, 10);
$T1_y = rand(-10, 10);
$T1 = new Point($T1_x, $T1_y);
echo "T1: (" . implode(", ", $T1->getCoordinates()) . ")\n";

// Генерация случайных координат для вектора V1
$V1_x = rand(-10, 10);
$V1_y = rand(-10, 10);
$V1 = new Vector($V1_x, $V1_y);

// Генерация нулевого вектора V2
$V2 = new Vector(0, 0);

// Создаем вектор V3, который будет перпендикулярным к V1.
// Чтобы получить перпендикулярный вектор, можно поменять местами координаты и изменить знак
$V3 = new Vector(-$V1_y, $V1_x);

// Печатаем длины каждого вектора
echo "Длина V1: " . $V1->length() . "\n";
echo "Длина V2: " . $V2->length() . "\n";
echo "Длина V3: " . $V3->length() . "\n";

// Проверяем, что векторы V1 и V3 перпендикулярны друг другу
$isPerpendicular = $V1->isPerpendicular($V3) ? "да" : "нет";
echo "V1 и V3 перпендикулярны? " . $isPerpendicular . "\n";

// Перемещаем точку T1 на вектор V1
$T1->moveX($V1->getCoordinates()[0]);
$T1->moveY($V1->getCoordinates()[1]);
echo "Новые координаты T1 после перемещения: (" . implode(", ", $T1->getCoordinates()) . ")\n";