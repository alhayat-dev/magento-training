<?php

declare(strict_types=1);

namespace Training\Core\Console\Command;

use Magento\Framework\ObjectManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractCommand extends Command
{

    /**
     * @var ObjectManager
     */
    protected ObjectManagerInterface $objectManager;

    protected string $serviceClass;

    protected $service;

    public function __construct(ObjectManagerInterface $objectManager, string $serviceClass, string $name = null)
    {
        parent::__construct($name);
        $this->objectManager = $objectManager;
        $this->serviceClass = $serviceClass;
    }

    /**
     * @var InputInterface
     */
    protected InputInterface $input;
    /**
     * @var OutputInterface
     */
    protected OutputInterface $output;

    abstract protected function handle(): void;

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->setInput($input);
        $this->setOutput($output);
        $this->handle();
    }

    public function setInput(InputInterface $input)
    {
        $this->input = $input;
    }

    public function setOutput(OutputInterface $output)
    {
        $this->output = $output;
    }

    public function getInput(): InputInterface
    {
        return $this->input;
    }

    public function getOutput(): OutputInterface
    {
        return $this->output;
    }

    protected function getService(array $data = [])
    {
        if (null !== $this->service) {
            return $this->service;
        }

        $this->service = $this->getObject($data);
        return $this->service;
    }

    private function getObject(array $data = [])
    {
        return $this->objectManager->create($this->serviceClass, $data);
    }
}
