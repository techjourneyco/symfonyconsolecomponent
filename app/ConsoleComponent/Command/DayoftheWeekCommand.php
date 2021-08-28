<?php

namespace ConsoleComponent\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class DayoftheWeekCommand extends Command
{
    public function configure()
    {
        $this->setName('techjourney:dayoftheweek')
            ->setDescription('Prints the day of the week of given date')
            ->addArgument('date', InputArgument::REQUIRED, 'Date to get the day of the week', null);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $date = $input->getArgument('date');
        $output->writeln("The day of the week is " . date('l', strtotime($date)));  
        return 0;
    }
}
