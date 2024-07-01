<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230517150634 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affectations ADD poste_owner_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE affectations ADD CONSTRAINT FK_42091048E43489F FOREIGN KEY (poste_owner_id) REFERENCES postes (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_42091048E43489F ON affectations (poste_owner_id)');
        $this->addSql('ALTER TABLE documents ADD poste_owner_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE documents ADD CONSTRAINT FK_A2B072888E43489F FOREIGN KEY (poste_owner_id) REFERENCES postes (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_A2B072888E43489F ON documents (poste_owner_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE documents DROP CONSTRAINT FK_A2B072888E43489F');
        $this->addSql('DROP INDEX IDX_A2B072888E43489F');
        $this->addSql('ALTER TABLE documents DROP poste_owner_id');
        $this->addSql('ALTER TABLE affectations DROP CONSTRAINT FK_42091048E43489F');
        $this->addSql('DROP INDEX IDX_42091048E43489F');
        $this->addSql('ALTER TABLE affectations DROP poste_owner_id');
    }
}
