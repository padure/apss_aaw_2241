<?php
class StringHelper
{
    public static function truncate(string $s, int $len): string
    {
        return substr($s, 0, $len);
    }
}
echo StringHelper::truncate("Dezvoltare WEB", 7);
?>