<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Pexels;

/**
 * 视频
 * @author Tongle Xu <xutongle@gmail.com>
 */
class Video extends PexelsClient
{
    /**
     * 视频搜索
     * @param string $query
     * @param int $page
     * @param int $perPage
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Larva\Support\Exception\ConnectionException
     */
    public function search($query, $page = 1, $perPage = 20)
    {
        return $this->getJSON('/videos/search', [
            'query' => $query,
            'per_page' => $perPage,
            'page' => $page
        ]);
    }

    /**
     * 热门视频
     * @param int $page
     * @param int $perPage
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Larva\Support\Exception\ConnectionException
     */
    public function popular($page = 1, $perPage = 20)
    {
        return $this->getJSON('/videos/popular', [
            'per_page' => $perPage,
            'page' => $page
        ]);
    }

    /**
     * 获取视频详情
     * @param int $id
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Larva\Support\Exception\ConnectionException
     */
    public function detail($id)
    {
        return $this->getJSON('/videos/videos/' . $id);
    }
}