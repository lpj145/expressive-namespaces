<?php
namespace ExpressiveNamespace;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Spacenames;

class NamespaceCommand extends Command
{
    protected function configure()
    {
        $this
            ->setDescription('Change all files namespace')
            ->addArgument('current', InputArgument::REQUIRED, 'namespace to find it on composer.json')
            ->addArgument('new', InputArgument::REQUIRED, 'namespace to change it')
            ->addArgument('debugMode', InputArgument::OPTIONAL, 'enable debug mode ?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $current = $input->getArgument('current');
        $new = $input->getArgument('new');
        $debugMode = $input->getArgument('debugMode');

        Spacenames\Core::changeNamespace($current, $new, $debugMode ?? false);

        $output->writeln('All namespace changed with success!');
    }
}
