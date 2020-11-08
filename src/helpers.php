<?php

/*
 * This file is part of Ethereal.
 *
 * (c) Shin Maung Maung <ethereal97@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

if (! function_exists('env')) {
    function env(string $name, $default = null)
    {
        return ($_ENV[$name] ?? getenv($name)) ?: $default;
    }
}
