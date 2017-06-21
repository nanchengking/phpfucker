<?php

class Car
{
    var $color;

    function Car($color = "green")
    {
        $this->color = $color;
    }

    function what_color()
    {
        return $this->color;
    }
}

$car = new Car("不知道神马颜色");
echo $car->what_color();

?>
