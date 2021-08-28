<?php

require __DIR__. '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use ConsoleComponent\Command\HelloWorldCommand;
use ConsoleComponent\Command\DayoftheWeekCommand;
use ConsoleComponent\Command\DaysoftheWeekCommand;
use ConsoleComponent\Command\DayOfTheWeekOtherMethodsCommand;


$app = new Application("Test App", "1.0.0");
$app->add(new HelloWorldCommand());
$app->add(new DayoftheWeekCommand());
$app->add(new DaysoftheWeekCommand());
$app->add(new DayOfTheWeekOtherMethodsCommand());

$app->run();
