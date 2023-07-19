<?php

namespace Testmy\Mytest;

use Testmy\Kernel\Base;
use Testmy\Kernel\Exceptions\BadResponseException;
use Testmy\Kernel\Traits\Utils;

class Application extends Base
{
    use Utils;

    protected $type = 'chatgpt';


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