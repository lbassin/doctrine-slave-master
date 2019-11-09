<?php

declare(strict_types=1);

namespace App\Command;

use Doctrine\DBAL\Connections\MasterSlaveConnection;
use Doctrine\DBAL\Driver\Connection;
use Doctrine\DBAL\FetchMode;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ReadCommand extends Command
{

    protected static $defaultName = 'test:doctrine:read';

    /**
     * @var MasterSlaveConnection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        parent::__construct();

        $this->connection = $connection;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $test = $this->connection->executeQuery('SELECT * FROM user');

        dump($test->fetchAll(FetchMode::ASSOCIATIVE));
    }

}
