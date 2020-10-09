<?php

namespace App\Core\Infrastructure\Command;

use Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\ContainerBuilderDebugDumpPass;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class ContainerDumpCommand
 */
class ContainerDumpCommand extends Command
{
    const CONFIG_FILE_PATH = 'vendor/phpro/grumphp/resources/config/';
    const CONFIG_FILE_NAME = 'services.yml';
    const DEST_FILE_PATH = 'var/containerDump/';
    const DEST_FILE_NAME = 'appDevDebugProjectContainer.xml';

    /**
     * Configuring console command, required inputs and help info.
     */
    protected function configure()
    {
        $this->setName('container:dump')
            ->setDescription('Dumps the container contents as an .xml file');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $containerBuilder = new ContainerBuilder();

        $loader = new YamlFileLoader($containerBuilder, new FileLocator(self::CONFIG_FILE_PATH));
        $loader->load(self::CONFIG_FILE_NAME);

        if (!\file_exists(self::DEST_FILE_PATH)) {
            \mkdir(self::DEST_FILE_PATH, 0775, true);
        }
        if (!\is_writable(self::DEST_FILE_PATH)) {
            \chmod(self::DEST_FILE_PATH, 0775);
        }
        $containerBuilder->setParameter('debug.container.dump', self::DEST_FILE_PATH.self::DEST_FILE_NAME);
        $cbDebugDumpPass = new ContainerBuilderDebugDumpPass();
        $cbDebugDumpPass->process($containerBuilder);

        $output->writeln('<info>Container dumped successfully</info>');
    }
}
