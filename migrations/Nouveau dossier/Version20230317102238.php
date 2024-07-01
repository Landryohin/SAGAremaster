<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230317102238 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affectations ALTER envoyeur TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE affectations ALTER receveur TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE documents ADD date_document DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE documents DROP date_document');
        $this->addSql('ALTER TABLE affectations ALTER envoyeur TYPE VARCHAR(10)');
        $this->addSql('ALTER TABLE affectations ALTER receveur TYPE VARCHAR(10)');
    }
}
