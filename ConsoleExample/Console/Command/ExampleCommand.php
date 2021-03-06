<?php

declare(strict_types=1);

namespace Training\ConsoleExample\Console\Command;

use Symfony\Component\Console\Input\InputArgument;
use Training\ConsoleExample\Service\Example;
use Training\Core\Console\Command\AbstractCommand;

class ExampleCommand extends AbstractCommand
{

    protected function configure()
    {
        parent::configure();
        $this->setName('training:example:run'); // namespace:subject:action
        $this->setDescription("Training Console Example.");

        $this->addArgument('product_id', InputArgument::REQUIRED, 'Product ID');
        $this->addArgument('product_prefix', InputArgument::REQUIRED, 'Product Prefix');
    }

    protected function handle()
    {
        $productId = $this->getInput()->getArgument('product_id');
        $productPrefix = $this->getInput()->getArgument('product_prefix');
        $service = $this->getService();
        $this->getOutput()->writeln($service->getProductKey((int) $productId, $productPrefix));
    }
}
