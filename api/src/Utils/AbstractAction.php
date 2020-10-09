<?php declare(strict_types = 1);

namespace App\Utils;

use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class AbstractAction
 *
 * In time, actions should replace Controllers
 *
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 */
class AbstractAction
{
    /** @var Logger */
    protected $logger;

    /** @var AuthorizationCheckerInterface */
    protected $authorizationChecker;

    /** @var TokenStorageInterface */
    protected $tokenStorage;

    /** @var ExceptionHandler */
    protected $exceptionHandler;

    /**
     * AbstractAction constructor.
     *
     * @param Logger                        $logger
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenStorageInterface         $tokenStorage
     * @param ExceptionHandler              $exceptionHandler
     */
    public function __construct(
        Logger $logger,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        ExceptionHandler $exceptionHandler
    ) {
        $this->logger               = $logger;
        $this->authorizationChecker = $authorizationChecker;
        $this->tokenStorage         = $tokenStorage;
        $this->exceptionHandler     = $exceptionHandler;
    }

    /**
     * Get content from Body and return it as array
     *
     * @param Request $request
     *
     * @return array|null
     */
    protected function getJsonContent(Request $request): ?array
    {
        if ($request->getContent() && $request->getContentType() === 'json') {
            return \json_decode($request->getContent(), true);
        }

        return null;
    }
}
