<?php

namespace ConsoleComponent\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\ArrayInput;

class DaysoftheWeekCommand extends Command
{
    public function configure()
    {
        $this->setName('techjourney:daysoftheweek')
            ->setDescription('Display the days of the week of given dates')
            ->addArgument('dates', InputArgument::REQUIRED,  'Dates to get the days of the week', null);
    }
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $dates = $input->getArgument('dates');
        $dates = explode(',', $dates);
        $command = $this->getApplication()->find('techjourney:dayofweekwithothermethods');
        foreach ($dates as $date) {
            $arguments = [
                'date' => $date
            ];
            $dayOfTheWeekInput = new ArrayInput($arguments);
            $command->run($dayOfTheWeekInput, $output);
        }
        return 0;
    }
}
