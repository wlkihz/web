<?php
declare(strict_types=1);

$expression = $_GET['expr'];
try {
    $result = evaluateRPN($expression);
    echo $result;
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage();
}

function evaluateRPN(string $expr): int
{
    if (empty(trim($expr))) {
        throw new Exception("Выражение не может быть пустым");
    } 

    $stack = [];
    $tokens = explode(' ', trim($expr));
    
    foreach ($tokens as $token) {
        if (is_numeric($token)) {
            array_push($stack, (int)$token);
            continue;
        }
        
        if (count($stack) < 2) {
            throw new Exception("Недостаточно операндов для операции '$token'");
        }
        
        $b = array_pop($stack);
        $a = array_pop($stack);
        
        switch ($token) {
            case '+': $stack[] = $a + $b; break;
            case '-': $stack[] = $a - $b; break;
            case '*': $stack[] = $a * $b; break;
            default: throw new Exception("Неизвестный оператор '$token'");
        }
    }
    
    if (count($stack) !== 1) {
        throw new Exception("Некорректное выражение");
    }
    
    return array_pop($stack);
}