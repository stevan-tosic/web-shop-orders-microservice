<?php declare(strict_types=1);

namespace App\Core\Application\Service\Formatter;

use App\Core\Domain\Entity\Article\Article;
use Symfony\Component\Routing\RouterInterface;

/**
 * Class AddressFormatter
 */
class ArticleFormatter
{
    /** @var RouterInterface */
    private $router;

    /**
     * AddressFormatter constructor.
     *
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    /**
     * @param Article $article
     *
     * @return array
     */
    public function execute(Article $article): array
    {
        return [

        ];
    }
}
