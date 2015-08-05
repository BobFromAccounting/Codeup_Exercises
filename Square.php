<?php
    require_once 'Rectangle.php';

    class Square extends Rectangle
    {
        public function __construct($height)
        {
            parent::__construct($height, $height);
        }

        public function area()
        {
            $area = $this->getHeight() * $this->getHeight();
            return $area . PHP_EOL;
        }

        public function perimeter()
        {
            $perimeter = $this->getHeight() * 4;
            return $perimeter . PHP_EOL;
        }
    }
?>