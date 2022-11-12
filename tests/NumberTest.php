<?php
namespace Teladoc;

use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{
    public function testAddNumbers_Integer()
    {
        require_once "app/Number.php";

        $param01 = "123 456 789";
        $param02 = "11 22 33";
        
        $expected = "134 478 822";
        
        $addNumbers = new app\Number($param01, $param02);

        $this->assertEquals($expected, $addNumbers->addNumbers());
    }

    public function testAddNumbers_BigInteger()
    {
        require_once "app/Number.php";

        $param01 = "123456789012345678901 23456789";
        $param02 = "12345678 234567890123456789012";

        $expected = "123456789012358024579 234567890123480245801";

        $addNumbers = new app\Number($param01, $param02);

        $this->assertEquals($addNumbers->addNumbers(), $expected);
    }

    public function testAddnumbers_Float()
    {
        require_once "app/Number.php";

        $param01 = "1234567.8901 2.345";
        $param02 = "12.34 2345678901.2";

        $expected = "1234580.2301 2345678903.545";

        $addNumbers = new app\Number($param01, $param02);

        $this->assertEquals($addNumbers->addNumbers(), $expected);
    }

    public function testCheckDecimals_Number()
    {
        require_once "app/Number.php";

        $param01 = "1234567.8901";
        $param02 = "2.345";
        
        $expected = 4;
        
        $addNumbers = new app\Number($param01, $param02);

        $this->assertEquals($expected, $addNumbers->checkDecimals($param01, $param02));
    }
}