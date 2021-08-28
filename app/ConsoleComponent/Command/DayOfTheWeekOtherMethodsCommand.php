<?php

namespace ConsoleComponent\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class DayOfTheWeekOtherMethodsCommand extends Command
{

    protected $validDate;

    protected function configure()
    {
        $this->setName('techjourney:dayofweekwithothermethods')
            ->setDescription('Returns the day of the week')
            ->addArgument('date', InputArgument::REQUIRED, 'Date to get the day of the week from', null);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (true == $this->validateDate) {
            $date = $input->getArgument('date');
            $output->writeln("The day of the week is " . date('l', strtotime($date)));
        }
        return 0;
    }

    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $this->validateDate = true;
        $date = $input->getArgument('date');
        if (!$this->validateDate($date)) {
            $output->writeln("Please enter a valid date");
            return $this->validateDate = false;
        }
    }

    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        echo "Initializing...\n\r";
    }

    private function validateDate($date)
    {
        $d = \DateTime::createFromFormat('Y-m-d', $date);
        return $d && $d->format('Y-m-d') == $date;
    }
}
