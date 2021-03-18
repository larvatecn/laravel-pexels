<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Pexels;

use Larva\Support\HttpClient;
use Psr\Http\Message\RequestInterface;

/**
 * Class PexelsClient
 * @author Tongle Xu <xutongle@gmail.com>
 */
class PexelsClient extends HttpClient implements PexelsInterface
{
    /**
     * @var string Api Key
     */
    protected $apiKey;

    /**
     * The base URL for the request.
     *
     * @var string
     */
    protected $baseUrl = 'https://api.pexels.com';

    /**
     * @return \Closure
     */
    public function buildBeforeSendingHandler()
    {
        return function (callable $handler) {
            return function (RequestInterface $request, array $options) use ($handler) {
                $request->withHeader('Authorization', $this->apiKey);
                return $handler($request, $options);
            };
        };
    }
}