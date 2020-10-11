<?php

use App\Core\Infrastructure\Command\ContainerDumpCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ContainerDumpCommandTest extends TestCase
{
    private $commandName;
    private $command;
    private $container;

    public function setUp()
    {
        $this->commandName = 'container:dump';

        $command = new ContainerDumpCommand();
        $application = new Application();

//        $this->container = $this->prophesize(ContainerInterface::class);
        $application->add($command);

        $this->command = $application->find($this->commandName);
//        $this->command->setContainer($this->container->reveal());
    }

    /**
     * @group stupid-container
     */
    public function testExecute()
    {
        $commandTester = new CommandTester($this->command);
        $commandTester->execute(['command' => $this->commandName]);

        $output = $commandTester->getDisplay();
        $this->assertEquals('Container dumped successfully', trim($output));
    }
    /**
     * @group stupid-container
     */
    public function testExecuteWhenFilesDoNotExist()
    {
        if (file_exists(ContainerDumpCommand::DEST_FILE_PATH.ContainerDumpCommand::DEST_FILE_NAME)) {
            unlink(ContainerDumpCommand::DEST_FILE_PATH.ContainerDumpCommand::DEST_FILE_NAME);
            unlink(ContainerDumpCommand::DEST_FILE_PATH.ContainerDumpCommand::DEST_FILE_NAME.'.meta');
            rmdir(ContainerDumpCommand::DEST_FILE_PATH);
        }

        $commandTester = new CommandTester($this->command);
        $commandTester->execute(['command' => $this->commandName]);

        $output = $commandTester->getDisplay();
        $this->assertEquals('Container dumped successfully', trim($output));
    }
    /**
     * @group stupid-container
     */
    public function testExecuteWhenDestinationIsNotWritable()
    {
        if (file_exists(ContainerDumpCommand::DEST_FILE_PATH)) {
            chmod(ContainerDumpCommand::DEST_FILE_PATH, 0444);
        }

        $commandTester = new CommandTester($this->command);
        $commandTester->execute(['command' => $this->commandName]);

        $output = $commandTester->getDisplay();
        $this->assertEquals('Container dumped successfully', trim($output));
    }
}
