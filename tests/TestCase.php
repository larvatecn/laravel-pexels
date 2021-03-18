<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Pexels\Tests;

class TestCase extends \PHPUnit\Framework\TestCase
{
    public function Provider()
    {
        $config = [
            'api_key' => getenv('API_KEY'),
        ];
        return [
            [$config],
        ];
    }
}