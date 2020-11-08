<?php

namespace Ethereal\Common;

class Arr
{
    public static function divide(array $arr)
    {
        return [
            array_keys($arr),
            array_values($arr)
        ];
    }
}

