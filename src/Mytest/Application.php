<?php

namespace Testmy\Test;

use Testmy\Test\Kernel\Base;
use Testmy\Test\Kernel\Exceptions\BadResponseException;
use Testmy\Test\Kernel\Traits\Utils;

class Application extends Base
{
    use Utils;

    /**
     * 截图
     *
     * @param string $url
     * @param string $path
     * @param int $width
     * @param int $height
     * @return int
     * @throws BadResponseException
     */
    public function sendMessage() {


        return 666;
    }
}