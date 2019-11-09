<?php

declare(strict_types=1);

namespace App\Command;

use App\Repository\UserRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RepositoryCommand extends Command
{
    protected static $defaultName = 'test:doctrine:repository';
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        parent::__construct();

        $this->userRepository = $userRepository;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $users = $this->userRepository->getAll();

        print_r($users);
    }
}
