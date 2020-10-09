<?php

use PHPUnit\Framework\TestCase;
use App\Kernel;
use Prophecy\Argument;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RouteCollectionBuilder;

/**
 * Class Kernel
 */
class KernelTest extends TestCase
{

    /** @var Kernel $kernelInstance */
    private $kernelInstance;

    public function setUp()
    {
        $this->kernelInstance = new Kernel('dev', true);
    }

    public function testGetCacheDir()
    {
        $cacheDir = $this->kernelInstance->getCacheDir();
        $this->assertStringEndsWith('/var/cache/dev', $cacheDir);
    }

    public function testGetLogDir()
    {
        $logDir = $this->kernelInstance->getLogDir();
        $this->assertStringEndsWith('/var/log', $logDir);
    }

    public function testRegisterBundles()
    {
        $bundles = [];
        foreach ($this->kernelInstance->registerBundles() as $bundle) {
            $name = $bundle->getName();
            if (isset($bundles[$name])) {
                throw new \LogicException(sprintf('Trying to register two bundles with the same name "%s"', $name));
            }
            $bundles[$name] = $bundle;
        }

        $this->assertNotEmpty($bundles);
    }

    /**
     * @group coverage-only
     */
    /* disable for now, to speed up test coverage builds
    public function testRunKernel()
    {
        $this->setOutputCallback(function () {
        });
        require __DIR__ . '/../../vendor/autoload.php';

        $dotenv = new Dotenv();
        $env = $dotenv->parse(file_get_contents(__DIR__ . '/../../.env'));

        $_SERVER = array(
            'APP_HOST' => $env['APP_HOST'],
            'APP_ENV' => $env['APP_ENV'],

            'REQUEST_URI' => '/api',
            'REQUEST_METHOD' => 'GET',
            'HTTP_ACCEPT' => 'text/html',
            'SCRIPT_NAME' => '/index.php',

            'REDIS_URL' => $env['REDIS_URL'],
            'REDIS_SESSION_URL' => $env['REDIS_SESSION_URL'],
            'PRIVATE_FILES_STORAGE_DIR' => $env['PRIVATE_FILES_STORAGE_DIR'],
        );
        $kernel = new Kernel('dev', true);
        $request = Request::createFromGlobals();
        $response = $kernel->handle($request);
        $routeCollection = $this->prophesize(RouteCollection::class);
        $routeCollection->all()->willReturn([]);
        $routeCollection->getResources()->willReturn([]);
        $loader = $this->prophesize(LoaderInterface::class);
        $loader->load(Argument::any(), Argument::any())->willReturn($routeCollection);
        $loader->supports(Argument::any(), Argument::any())->willReturn(true);
        $kernel->loadRoutes($loader->reveal());
        $response->send();
        $kernel->terminate($request, $response);

        $this->assertEquals(1, 1);
    }
    */

    public function testConfigureContainer()
    {
        $reflectionInstance = new ReflectionClass($this->kernelInstance);
        $method = $reflectionInstance->getMethod("configureContainer");
        $method->setAccessible(true);

        $container = $this->prophesize(ContainerBuilder::class);
        $loader = $this->prophesize(LoaderInterface::class);

        $result = $method->invokeArgs($this->kernelInstance, [$container->reveal(), $loader->reveal()]);
        $this->assertNull($result);
    }

    public function testConfigureRoutes()
    {
        $reflectionInstance = new ReflectionClass($this->kernelInstance);
        $method = $reflectionInstance->getMethod("configureRoutes");
        $method->setAccessible(true);

        $routeCollectionBuilder = $this->prophesize(RouteCollectionBuilder::class);

        $result = $method->invokeArgs($this->kernelInstance, [$routeCollectionBuilder->reveal()]);
        $this->assertNull($result);
    }
}
