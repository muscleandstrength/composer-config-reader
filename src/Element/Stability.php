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

enum Stability: string
{
    case DEV = 'dev';
    case ALPHA = 'alpha';
    case BETA = 'beta';
    case RC = 'rc';
    case STABLE = 'stable';
}
