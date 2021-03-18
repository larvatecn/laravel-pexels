<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Pexels\Tests;

use Larva\Pexels\PexelsClient;

/**
 * Class PexelsClientTest
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class PexelsClientTest extends TestCase
{
    /**
     * @dataProvider Provider
     */
    public function testGet($config)
    {
        $client = new PexelsClient(['apiKey' => $config['api_key']]);
        $response = $client->getJSON('https://api.pexels.com/v1/photos/5092153');
        $this->assertIsArray($response);
    }
}
