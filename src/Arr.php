<?php

/*
 * This file is part of Ethereal.
 *
 * (c) Shin Maung Maung <ethereal97@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Ethereal\Common;

class Arr
{
    public static function divide(array $arr)
    {
        return [
            array_keys($arr),
            array_values($arr),
        ];
    }
}
