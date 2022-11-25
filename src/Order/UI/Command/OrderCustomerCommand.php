<?php

namespace Order\UI\Command;

use Order\UI\CustomerModuleInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:order:customer')]
class OrderCustomerCommand extends Command
{
    public function __construct(private readonly CustomerModuleInterface $customerModule)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $customer = $this->customerModule->customer(12);
        $output->writeln($customer->name());
        return Command::SUCCESS;
    }
}