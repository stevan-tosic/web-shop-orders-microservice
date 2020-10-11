<?php declare(strict_types=1);

namespace App\Utils\Cache;

use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Cache\Adapter\TagAwareAdapter;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class CacheTagAwareFactory
 */
class CacheTagAwareFactoryTest extends TestCase
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @var AdapterInterface
     */
    private $adapter;

    /**
     * @var CacheTagAwareFactory
     */
    private $instance;

    public function setUp()
    {
        parent::setUp();
        $this->container = $this->prophesize(ContainerInterface::class);
        $this->adapter   = $this->prophesize(AdapterInterface::class);

        $this->container->get('cache.app')->willReturn($this->adapter->reveal());
        $this->container = $this->container->reveal();

        $this->instance = new CacheTagAwareFactory();
        $this->instance->setContainer($this->container);
    }

    public function testCreate()
    {
        $result = $this->instance->create();
        $this->assertInstanceOf(TagAwareAdapter::class, $result);
    }
}
