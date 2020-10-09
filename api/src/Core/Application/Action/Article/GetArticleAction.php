<?php declare(strict_types=1);

namespace App\Core\Application\Action\Article;

use App\Core\Application\Service\Formatter\ArticleFormatter;
use App\Core\Domain\Entity\Article\Article;
use App\Utils\AbstractAction;
use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class GetArticleAction
 */
class GetArticleAction extends AbstractAction
{
    /** @var ArticleFormatter */
    private $formatter;

    /**
     * GetArticleAction constructor.
     *
     * @param Logger                        $logger
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenStorageInterface         $tokenStorage
     * @param ExceptionHandler              $exceptionHandler
     * @param ArticleFormatter              $formatter
     */
    public function __construct(
        Logger $logger,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        ExceptionHandler $exceptionHandler,
        ArticleFormatter $formatter
    ) {
        parent::__construct($logger, $authorizationChecker, $tokenStorage, $exceptionHandler);
        $this->formatter = $formatter;
    }

    /**
     * @param Article|null $article
     *
     * @return JsonResponse
     */
    public function __invoke(?Article $article): JsonResponse
    {
        try {
            if (!$article) {
                throw new NotFoundHttpException('Article is not found');
            }

            return new JsonResponse(
                $this->formatter->execute($article),
                JsonResponse::HTTP_OK
            );
        } catch (\Throwable $exception) {
            return $this->exceptionHandler->execute($exception);
        }
    }
}
