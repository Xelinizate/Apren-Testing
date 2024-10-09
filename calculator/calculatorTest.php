<?php

    require 'calculator.php';

    class CalculatorTest extends PHPUnit\Framework\TestCase{

        private $calculator;

        protected function setUp(){

            $this ->calculator = new Calculator();
        }

        protected function tearDown(){
            $this->calculator = null;
        }

        public function testAdd(){
            $result = $this->calculator->add(1,2);
            $this->assertEquals(3,$result);
        }
    }


?>