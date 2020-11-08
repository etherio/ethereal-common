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

use PHPUnit\Framework\TestCase;

class ArrTest extends TestCase
{
    public function testDivideArray()
    {
        $arr = [
            'foo' => 'bar',
            'baz' => 1,
            'boo' => ['foo', 'bar', 'baz'],
            'foe' => true,
        ];

        $result = Arr::divide($arr);
        $expected[0] = array_keys($arr);
        $expected[1] = array_values($arr);

        $this->assertSame($expected[0], $result[0]);
        $this->assertSame($expected[1], $result[1]);
    }
}
