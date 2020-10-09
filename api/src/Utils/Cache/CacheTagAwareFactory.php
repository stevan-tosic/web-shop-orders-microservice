<?php declare(strict_types = 1);

namespace App\Utils\Cache;

use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Cache\Adapter\TagAwareAdapter;
use Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

/**
 * Class CacheTagAwareFactory
 */
class CacheTagAwareFactory
{

    use ContainerAwareTrait;

    /**
     * @return TagAwareAdapterInterface
     *
     */
    public function create(): TagAwareAdapterInterface
    {
        /** @var AdapterInterface $itemsPool */
        $itemsPool = $this->container->get('cache.app');

        return new TagAwareAdapter($itemsPool);
    }
}
