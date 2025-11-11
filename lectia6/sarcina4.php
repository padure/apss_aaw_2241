<?php
class MathUtils{
    const PI = 3.14;
    public static function circleArea (float $r): float{
        return self::PI * $r ** 2 ;
    }
}
echo MathUtils::circleArea(2);
?>