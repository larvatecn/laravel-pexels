<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Pexels\Tests;

use Larva\Pexels\PexelsInterface;
use Larva\Pexels\Photo;

/**
 * Class PhotoTest
 * @author Tongle Xu <xutongle@gmail.com>
 */
class PhotoTest extends TestCase
{
    /**
     * @dataProvider Provider
     */
    public function testSearch($config)
    {
        $client = new Photo(['apiKey' => $config['api_key']]);
        $response = $client->search('nature');
        $this->assertIsArray($response);
    }

    /**
     * @dataProvider Provider
     */
    public function testDetail($config)
    {
        $client = new Photo(['apiKey' => $config['api_key']]);
        $response = $client->detail('5092153');
        $this->assertIsArray($response);
    }

    /**
     * @dataProvider Provider
     */
    public function TestCurated($config)
    {
        $client = new Photo(['apiKey' => $config['api_key']]);
        $response = $client->curated();
        $this->assertIsArray($response);
    }
}