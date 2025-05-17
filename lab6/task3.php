<?php
declare(strict_types=1);

$day = $_GET['day'] ?? 1;
$month = $_GET['month'] ?? 1;
WhichZodiac((int)$day, (int)$month);

function WhichZodiac(int $day, int $month): void
{
    if ($month == 1) {
        echo ($day <= 19) ? 'Козерог' : 'Водолей';       // До 19 января
    } elseif ($month == 2) {
        echo ($day <= 18) ? 'Водолей' : 'Рыбы';          // До 18 февраля
    } elseif ($month == 3) {
        echo ($day <= 20) ? 'Рыбы' : 'Овен';             // До 20 марта
    } elseif ($month == 4) {
        echo ($day <= 19) ? 'Овен' : 'Телец';            // До 19 апреля
    } elseif ($month == 5) {
        echo ($day <= 20) ? 'Телец' : 'Близнецы';        // До 20 мая
    } elseif ($month == 6) {
        echo ($day <= 21) ? 'Близнецы' : 'Рак';          // До 21 июня
    } elseif ($month == 7) {
        echo ($day <= 22) ? 'Рак' : 'Лев';               // До 22 июля
    } elseif ($month == 8) {
        echo ($day <= 22) ? 'Лев' : 'Дева';              // До 22 августа
    } elseif ($month == 9) {
        echo ($day <= 22) ? 'Дева' : 'Весы';             // До 22 сентября
    } elseif ($month == 10) {
        echo ($day <= 23) ? 'Весы' : 'Скорпион';         // До 23 октября
    } elseif ($month == 11) {
        echo ($day <= 21) ? 'Скорпион' : 'Стрелец';      // До 21 ноября
    } elseif ($month == 12) {
        echo ($day <= 21) ? 'Стрелец' : 'Козерог';       // До 21 декабря
    }
}