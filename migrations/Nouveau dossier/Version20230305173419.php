<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230305173419 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE documents ADD poste VARCHAR(15) NOT NULL');
        $this->addSql('ALTER TABLE documents ADD niveau VARCHAR(15) NOT NULL');
        $this->addSql('ALTER TABLE secretariats DROP CONSTRAINT fk_a0f54b6ca90f02b2');
        $this->addSql('DROP INDEX idx_a0f54b6ca90f02b2');
        $this->addSql('ALTER TABLE secretariats ADD secretaire VARCHAR(10) NOT NULL');
        $this->addSql('ALTER TABLE secretariats ADD type VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE secretariats DROP secretaire_id');
        $this->addSql('ALTER TABLE secretariats DROP interim');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE secretariats ADD secretaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE secretariats ADD interim BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE secretariats DROP secretaire');
        $this->addSql('ALTER TABLE secretariats DROP type');
        $this->addSql('ALTER TABLE secretariats ADD CONSTRAINT fk_a0f54b6ca90f02b2 FOREIGN KEY (secretaire_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_a0f54b6ca90f02b2 ON secretariats (secretaire_id)');
        $this->addSql('ALTER TABLE documents DROP poste');
        $this->addSql('ALTER TABLE documents DROP niveau');
    }
}
