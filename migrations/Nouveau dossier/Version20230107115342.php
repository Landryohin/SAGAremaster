<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230107115342 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affectations ADD status BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE documents ADD reponse_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE documents ADD CONSTRAINT FK_A2B07288CF18BB82 FOREIGN KEY (reponse_id) REFERENCES documents (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_A2B07288CF18BB82 ON documents (reponse_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE documents DROP CONSTRAINT FK_A2B07288CF18BB82');
        $this->addSql('DROP INDEX IDX_A2B07288CF18BB82');
        $this->addSql('ALTER TABLE documents DROP reponse_id');
        $this->addSql('ALTER TABLE affectations DROP status');
    }
}
