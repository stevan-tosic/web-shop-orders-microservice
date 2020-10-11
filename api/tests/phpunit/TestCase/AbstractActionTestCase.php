<?php

namespace App\Tests\TestCase;

use App\Core\Domain\Entity\User\User;
use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

abstract class AbstractActionTestCase extends TestCase
{
    /** @var  TokenStorage */
    protected $tokenStorage;

    /** @var TokenInterface */
    protected $token;

    /** @var AuthorizationCheckerInterface */
    protected $authorizationChecker;

    /** @var LoggerInterface */
    protected $logger;

    /** @var ExceptionHandler */
    protected $exceptionHandler;

    /**
     * setUp
     */
    protected function setUp()
    {
        $this->tokenStorage = $this->prophesize(TokenStorage::class);
        $this->token        = $this->prophesize(TokenInterface::class);

        $this->exceptionHandler = $this->prophesize(ExceptionHandler::class);

        $this->authorizationChecker = $this->prophesize(AuthorizationCheckerInterface::class);
        $this->authorizationChecker->isGranted(Argument::any(), Argument::any())->willReturn(true);

        $this->logger = $this->prophesize(Logger::class);
//        $this->logger->log(Argument::any(), Argument::any())->willReturn();
    }
}
