<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Pexels;

use Illuminate\Support\Facades\Facade;

/**
 * Class Pexels
 * @mixin PexelsManager
 * @method static PexelsInterface with($driver)
 * @author Tongle Xu <xutongle@gmail.com>
 */
class Pexels extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return PexelsManager::class;
    }

    /**
     * 获取 image
     * @return Photo
     */
    public static function image()
    {
        return static::getFacadeRoot()->with('image');
    }

    /**
     * 获取 Video
     * @return Video
     */
    public static function video()
    {
        return static::getFacadeRoot()->with('video');
    }
}