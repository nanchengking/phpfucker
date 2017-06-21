<?php

$a = "fuck you";
echo "Hello World! $a";
$b = 100;
echo "$b-1";
$c = 12.001;

$d = true;
$e = array("Volvo", "BMW", "Toyota");

define("FUCK", "fuck you hahhahahah");
echo var_dump($a);
echo var_dump($b);
echo var_dump($c);
echo var_dump($d);
echo var_dump($e);
echo var_dump(FUCK);
echo $a . FUCK . "\n";
echo strpos(FUCK, "haha");
echo strlen($a);
echo "\n 这是第" . __LINE__ . "行代码 \n";
echo __DIR__ . __FILE__;

function sayHello($name)
{
    echo "hello " . $name . "\n";
    return $name . "chi fa bian";
}

echo sayHello("大仙");
?> 

