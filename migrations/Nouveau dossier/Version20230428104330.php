<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230428104330 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type_documents ADD direction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE type_documents ADD status BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE type_documents ADD CONSTRAINT FK_16763398AF73D997 FOREIGN KEY (direction_id) REFERENCES directions (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_16763398AF73D997 ON type_documents (direction_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE type_documents DROP CONSTRAINT FK_16763398AF73D997');
        $this->addSql('DROP INDEX IDX_16763398AF73D997');
        $this->addSql('ALTER TABLE type_documents DROP direction_id');
        $this->addSql('ALTER TABLE type_documents DROP status');
    }
}
