<?php
declare(strict_types=1);

$text = $_GET['year'];
if (($text % 400 == 0) || ($text % 100 != 0 && $text % 4 == 0)) { 
    echo('Yes');
} else {
    echo('No');
}