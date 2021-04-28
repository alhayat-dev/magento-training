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
     * @var ObjectManager $objectManager
     */
    protected $objectManager;

    /**
     * @var string $serviceClass
     */
    protected $serviceClass;

    /**
     * @var $service
     */
    protected $service;

    public function __construct(ObjectManagerInterface $objectManager, string $serviceClass, string $name = null)
    {
        parent::__construct($name);
        $this->objectManager = $objectManager;
        $this->serviceClass = $serviceClass;
    }

    /**
     * @var InputInterface $input
     */
    protected $input;
    /**
     * @var OutputInterface $output
     */
    protected $output;

    abstract protected function handle();

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->setInput($input);
        $this->setOutput($output);
        $this->handle();
    }

    /**
     * @param InputInterface $input
     */
    public function setInput(InputInterface $input)
    {
        $this->input = $input;
    }

    /**
     * @param OutputInterface $output
     */
    public function setOutput(OutputInterface $output)
    {
        $this->output = $output;
    }

    /**
     * @return InputInterface
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @return OutputInterface
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * @param array $data
     * @return mixed
     */
    protected function getService(array $data = [])
    {
        if (null !== $this->service) {
            return $this->service;
        }

        $this->service = $this->getObject($data);
        return $this->service;
    }

    /**
     * @param array $data
     * @return mixed
     */
    private function getObject(array $data = [])
    {
        return $this->objectManager->create($this->serviceClass, $data);
    }
}
