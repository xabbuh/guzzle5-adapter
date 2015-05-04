<?php

/*
 * This file is part of the Http Adapter package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Http\Adapter\Tests;

use GuzzleHttp\Ring\Client\CurlHandler;

/**
 * @requires PHP 5.5
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class Guzzle5CurlHttpAdapterTest extends Guzzle5HttpAdapterTest
{
    /**
     * {@inheritdoc}
     */
    protected function createHandler()
    {
        return new CurlHandler();
    }
}
