<?php

require_once 'rectangle.php';
require_once 'square.php';

    $rectangle = new Rectangle(10, 20);
    // $area = $recatanlge->area();
    // echo "The are of this shape is $area" . PHP_EOL;
    echo $rectangle->area() . PHP_EOL;

$square = new Square (4,4);
echo "The area of a 4 inch square is " . $square->area() . " inches" . PHP_EOL;
echo " The perimter of a 4 inch square is " . $square->perimeter() . " inches" . PHP_EOL;

$square2 = new Square (3,3);
echo "The area of the 2nd square is " . $square2->area() . " inches" . PHP_EOL;
echo "The perimeter of the 2nd square is " . $square2->perimeter(). " inches" . PHP_EOL;

?>