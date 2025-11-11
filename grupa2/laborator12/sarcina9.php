<?php


    class StringHelper {

        public static function add_dots(string $s, int $len) {
            for ($i = strlen($s); $i <= $len; $i++) {
                    $s .= '.';
                }
                return $s;
        }

        public static function truncate(string $s, int $len):string {
            return strlen($s)<$len 
                    ? StringHelper::add_dots($s, $len)
                    : substr($s, 0, $len);
        }
    }

    $a = StringHelper::truncate('dezvoltator', 11);
    echo $a;