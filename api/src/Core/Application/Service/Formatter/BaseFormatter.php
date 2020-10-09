<?php declare(strict_types=1);

namespace App\Core\Application\Service\Formatter;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;

/**
 * Class BaseFormatter
 */
class BaseFormatter
{
    /** @var RouterInterface */
    private $router;

    /**
     * OrderListFormatter constructor.
     *
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    /**
     * @param $routeName
     * @param $id
     *
     * @return string|null
     */
    protected function generateLink($routeName, $id)
    {
        return $id
            ? $this->router->generate($routeName, ['id' => $id], UrlGeneratorInterface::ABSOLUTE_URL)
            : null;
    }
}
