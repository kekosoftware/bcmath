<?php
declare(strict_types=1);

namespace Teladoc\app;

class Number {
    /**
     * @param String01
     * @param String02
     */

    private $lenDecimal = 0;
    private $num01 = 0;
    private $num02 = 0;

    public function __construct($_num01 = 0, $_num02 = 0)
    {
        $this->num01 = $_num01;
        $this->num02 = $_num02;
    }

    public function addNumbers() : string
    {
        $str01 = explode(' ',$this->num01);
        $str02 = explode(' ',$this->num02);
        $return = ''; 
        
        for ($i=0; $i < count($str01); $i++) {
            if (str_contains($str01[$i],'.') || str_contains($str02[$i],'.')) 
                $this->lenDecimal = $this->checkDecimals($str01[$i], $str02[$i]);
            
            $return .= bcadd($str01[$i], $str02[$i], $this->lenDecimal).' ';
        }

        return strval(substr($return, 0, -1));
    }

    public function checkDecimals($val1 = 0, $val2 = 0) : int
    {
        $strTotal01 = str_contains($val1,'.') ? explode('.', $val1) : [$val1, 0];
        $strTotal02 = str_contains($val2,'.') ? explode('.', $val2) : [$val2, 0];

        $finalStr = [strlen($strTotal01[1]), strlen($strTotal02[1])];

        return max($finalStr);
    }
}