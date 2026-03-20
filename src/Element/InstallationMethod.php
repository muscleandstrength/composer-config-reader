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

enum InstallationMethod: string
{
    case AUTO = 'auto';
    case SOURCE = 'source';
    case DIST = 'dist';
}
