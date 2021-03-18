<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Pexels;

use Illuminate\Support\Manager;
use InvalidArgumentException;

/**
 * Class PexelsManager
 * @author Tongle Xu <xutongle@gmail.com>
 */
class PexelsManager extends Manager
{
    /**
     * Get a driver instance.
     *
     * @param string $driver
     * @return mixed
     */
    public function with(string $driver)
    {
        return $this->driver($driver);
    }

    /**
     * Get the default driver name.
     *
     * @return string
     *
     * @throws \InvalidArgumentException
     */
    public function getDefaultDriver()
    {
        return 'default';
    }

    /**
     * 创建 Default 服务
     * @return PexelsClient
     */
    public function createDefaultDriver(): PexelsClient
    {
        $config = $this->config["services.pexels"] ?: [];
        return new PexelsClient(['apiKey' => $config['api_key']]);
    }

    /**
     * 创建 Photo 服务
     * @return Photo
     */
    public function createImageDriver(): Photo
    {
        $config = $this->config["services.pexels"] ?: [];
        return new Photo(['apiKey' => $config['api_key']]);
    }

    /**
     * 创建 Video 服务
     * @return Video
     */
    public function createVideoDriver(): Video
    {
        $config = $this->config["services.pexels"] ?: [];
        return new Video(['apiKey' => $config['api_key']]);
    }
}