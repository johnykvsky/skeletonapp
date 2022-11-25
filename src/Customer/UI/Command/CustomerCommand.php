<?php

namespace Customer\UI\Command;

use Customer\CustomerFacade;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:customer')]
class CustomerCommand extends Command
{
    public function __construct(private readonly CustomerFacade $customerFacade)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $customer = $this->customerFacade->customer(12);
        $output->writeln($customer->name());
        return Command::SUCCESS;
    }
}