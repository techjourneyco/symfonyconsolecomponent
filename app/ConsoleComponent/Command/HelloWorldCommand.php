<?php

namespace ConsoleComponent\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorldCommand extends Command{
    protected function configure(){
        $this->setName('techjourney:helloworld')
            ->setDescription('Prints "Hello World"');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
            $output->writeln('Hello World');
            return 0;
    }
}

