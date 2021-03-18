<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Pexels\Tests;

use Larva\Pexels\Video;

class VideoTest extends TestCase
{
    /**
     * @dataProvider Provider
     */
    public function testSearch($config)
    {
        $client = new Video(['apiKey' => $config['api_key']]);
        $response = $client->search('nature');
        $this->assertIsArray($response);
    }

    /**
     * @dataProvider Provider
     */
    public function testDetail($config)
    {
        $client = new Video(['apiKey' => $config['api_key']]);
        $response = $client->detail('5092153');
        $this->assertIsArray($response);
    }

    /**
     * @dataProvider Provider
     */
    public function testPopular($config)
    {
        $client = new Video(['apiKey' => $config['api_key']]);
        $response = $client->popular();
        $this->assertIsArray($response);
    }
}