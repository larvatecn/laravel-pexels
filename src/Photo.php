<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Pexels;

/**
 * 照片服务
 * @author Tongle Xu <xutongle@gmail.com>
 */
class Photo extends PexelsClient
{
    /**
     * 搜索图片
     * @param string $query
     * @param int $page
     * @param int $perPage
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Larva\Support\Exception\ConnectionException
     */
    public function search($query, $page = 1, $perPage = 20)
    {
        return $this->getJSON('/v1/search', [
            'query' => $query,
            'per_page' => $perPage,
            'page' => $page
        ]);
    }

    /**
     * 获取图片详情
     * @param int $id
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Larva\Support\Exception\ConnectionException
     */
    public function detail($id)
    {
        return $this->getJSON('/v1/photos/' . $id);
    }

    /**
     * 获取 精选照片
     * @param int $page
     * @param int $perPage
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Larva\Support\Exception\ConnectionException
     */
    public function curated($page = 1, $perPage = 20)
    {
        return $this->getJSON('/v1/curated', [
            'per_page' => $perPage,
            'page' => $page
        ]);
    }
}