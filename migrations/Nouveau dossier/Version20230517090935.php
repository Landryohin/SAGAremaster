<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230517090935 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affectations ADD agent_id INT NULL');
        $this->addSql('ALTER TABLE affectations ADD CONSTRAINT FK_42091043414710B FOREIGN KEY (agent_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_42091043414710B ON affectations (agent_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE affectations DROP CONSTRAINT FK_42091043414710B');
        $this->addSql('DROP INDEX IDX_42091043414710B');
        $this->addSql('ALTER TABLE affectations DROP agent_id');
    }
}
