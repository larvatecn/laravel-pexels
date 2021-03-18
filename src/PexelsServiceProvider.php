<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Pexels;

use Illuminate\Support\ServiceProvider;

/**
 * Class PexelsServiceProvider
 * @author Tongle Xu <xutongle@gmail.com>
 */
class PexelsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PexelsManager::class, function ($app) {
            return new PexelsManager($this->app);
        });
    }
}