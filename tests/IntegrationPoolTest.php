<?php

/*
 * This file is part of php-cache\filesystem-adapter package.
 *
 * (c) 2015-2015 Aaron Scherer <aequasi@gmail.com>, Tobias Nyholm <tobias.nyholm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Cache\Adapter\Filesystem\tests;

use Cache\Adapter\Filesystem\FilesystemCachePool;
use Cache\IntegrationTests\CachePoolTest as BaseTest;

class IntegrationPoolTest extends BaseTest
{
    public function createCachePool()
    {
        return new FilesystemCachePool();
    }
}
