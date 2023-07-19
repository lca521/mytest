<?php

namespace Lca\Test\Mytest;

use Lca\Test\Kernel\Base;
use Lca\Test\Kernel\Exceptions\BadResponseException;
use Lca\Test\Kernel\Traits\Utils;

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