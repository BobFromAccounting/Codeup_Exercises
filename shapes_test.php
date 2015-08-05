<?php
    require_once 'Rectangle.php';
    require_once 'Square.php';

    $polygon = new Rectangle(4, 5);

    echo $polygon->area();
    
    echo $polygon->perimeter();

    $huey = new Square(5);

    echo $huey->area();
    
    echo $huey->perimeter();
?>