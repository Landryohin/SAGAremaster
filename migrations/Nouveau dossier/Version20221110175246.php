<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221110175246 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE directions ADD status BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE divisions ADD status BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE documents ADD status BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE services ADD status BOOLEAN NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE documents DROP status');
        $this->addSql('ALTER TABLE divisions DROP status');
        $this->addSql('ALTER TABLE directions DROP status');
        $this->addSql('ALTER TABLE services DROP status');
    }
}
