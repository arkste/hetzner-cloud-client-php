<?php

/*
 * This file is part of the arkste/hetzner-cloud-client-php package.
 *
 * (c) Arkadius Stefanski <arkste@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HetznerCloud;

use HetznerCloud\Api\ApiInterface;

/**
 * Pager interface
 *
 * @author Arkadius Stefanski <arkste@gmail.com>
 */
interface ResultPagerInterface
{
    /**
     * Fetch a single result (page) from an api call
     *
     * @param ApiInterface $api the Api instance
     * @param string $method the method name to call on the Api instance
     * @param array $parameters the method parameters in an array
     *
     * @return array returns the result of the Api::$method() call
     */
    public function fetch(ApiInterface $api, $method, array $parameters = []);

    /**
     * Fetch all results (pages) from an api call
     * Use with care - there is no maximum
     *
     * @param ApiInterface $api the Api instance
     * @param string $method the method name to call on the Api instance
     * @param array $parameters the method parameters in an array
     *
     * @return array returns a merge of the results of the Api::$method() call
     */
    public function fetchAll(ApiInterface $api, $method, array $parameters = []);

    /**
     * Check to determine the availability of a next page
     *
     * @return bool
     */
    public function hasNext();

    /**
     * Check to determine the availability of a previous page
     *
     * @return bool
     */
    public function hasPrevious();

    /**
     * Fetch the next page
     *
     * @return array|string
     */
    public function fetchNext();

    /**
     * Fetch the previous page
     *
     * @return array|string
     */
    public function fetchPrevious();

    /**
     * Fetch the first page
     *
     * @return array|string
     */
    public function fetchFirst();

    /**
     * Fetch the last page
     *
     * @return array|string
     */
    public function fetchLast();
}
