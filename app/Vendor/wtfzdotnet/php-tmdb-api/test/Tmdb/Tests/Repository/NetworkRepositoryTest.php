<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Tests\Repository;

class NetworkRepositoryTest extends TestCase
{
    const NETWORK_ID = 49;

    /**
     * @test
     */
    public function shouldLoadNetwork()
    {
        $repository = $this->getRepositoryWithMockedHttpClient();

        $repository->load(self::NETWORK_ID);
    }

    /**
     * @test
     */
    public function shouldGetNetworks()
    {
        $repository = $this->getRepositoryWithMockedHttpClient();

        $repository->load(self::NETWORK_ID);
    }

    protected function getApiClass()
    {
        return 'Tmdb\Api\Network';
    }

    protected function getRepositoryClass()
    {
        return 'Tmdb\Repository\NetworkRepository';
    }
}
