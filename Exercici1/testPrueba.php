<?php

    require_once('./test1.php');


    use PHPUnit\Framework\TestCase;

    class TestPrueba extends TestCase{

        public function __construct(private int $number){}

        public function isEven(): bool {
            return $this->number%2 == 0;
        }

        public function isPositive(): bool {
            return $this->number > 0;
        }
    }


?>