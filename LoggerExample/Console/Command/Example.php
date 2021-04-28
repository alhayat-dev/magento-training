<?php

declare(strict_types=1);

namespace Training\LoggerExample\Console\Command;

use Monolog\Handler\NativeMailerHandler;
use Monolog\Handler\StreamHandler;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Training\LoggerExample\Logger\Logger;

class Example extends Command
{
    /**
     * @var Logger
     */
    protected $logger;

    public function __construct(Logger $logger, string $name = null)
    {
        parent::__construct($name);
        $this->logger = $logger;
    }

    protected function configure()
    {
        $this->setName('logger:example:run');
        $this->setDescription('Run Logger Example');
        parent::configure();
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /**
         *  $streamHandler =  new StreamHandler('', Logger::DEBUG);
            $this->logger->pushHandler($streamHandler);
            $mailerHandler = new NativeMailerHandler(
                'to@receiver.com',
                'Example Logger',
                'from@sender.com',
                Logger::DEBUG
            );
            $this->logger->pushHandler($mailerHandler);
         */

        $this->logger->info("Example logger info.");
        $this->logger->debug("Example logger debug.");
        $this->logger->error("Example logger error.");
        $this->logger->critical("Example logger critical.");
    }
}
