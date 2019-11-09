<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

final class Version20191109014536 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create user table';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('user');

        $table->addColumn('id', Types::INTEGER, ['autoincrement' => true]);
        $table->addColumn('username', Types::STRING);
        $table->addColumn('active', Types::BOOLEAN);

        $table->setPrimaryKey(['id']);
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('user');
    }
}
