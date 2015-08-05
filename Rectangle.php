<?php
    class Rectangle
    {
        public $height;
        public $width;

        public function __construct($height, $width)
        {
            $this->height = $height;
            $this->width = $width;
        }

        public function area()
        {
            $area = $this->height * $this->width;
            return $area . PHP_EOL;
        }

        public function perimeter()
        {
            $perimeter = ($this->height * 2) + ($this->width * 2);
            return $perimeter . PHP_EOL;
        }
    }
?>