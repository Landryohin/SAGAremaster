<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221028154539 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE UNIQUE INDEX UNIQ_495867EC77153098 ON directions (code)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1C40C3177153098 ON divisions (code)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7332E16977153098 ON services (code)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP INDEX UNIQ_7332E16977153098');
        $this->addSql('DROP INDEX UNIQ_1C40C3177153098');
        $this->addSql('DROP INDEX UNIQ_495867EC77153098');
    }
}
