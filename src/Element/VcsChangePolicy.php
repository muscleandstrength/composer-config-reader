<?php

/*
 * This file is part of the Composer configuration reader package.
 *
 * Copyright © 2016 Erin Millard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eloquent\Composer\Configuration\Element;

enum VcsChangePolicy
{
    case IGNORE;
    case DISCARD;
    case STASH;

    public static function fromValue(mixed $value): ?self
    {
        return match ($value) {
            false => self::IGNORE,
            true => self::DISCARD,
            'stash' => self::STASH,
            default => null,
        };
    }
}
