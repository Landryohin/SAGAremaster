<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230312173144 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affectations DROP CONSTRAINT fk_42091044795a786');
        $this->addSql('ALTER TABLE affectations DROP CONSTRAINT fk_4209104b967e626');
        $this->addSql('DROP INDEX idx_4209104b967e626');
        $this->addSql('DROP INDEX idx_42091044795a786');
        $this->addSql('ALTER TABLE affectations ADD envoyeur VARCHAR(10)');
        $this->addSql('ALTER TABLE affectations ADD receveur VARCHAR(10)');
        $this->addSql('ALTER TABLE affectations DROP envoyeur_id');
        $this->addSql('ALTER TABLE affectations DROP receveur_id');
        $this->addSql('ALTER TABLE documents ALTER poste SET NOT NULL');
        $this->addSql('ALTER TABLE documents ALTER niveau SET NOT NULL');
        $this->addSql('ALTER TABLE secretariats ALTER secretaire SET NOT NULL');
        $this->addSql('ALTER TABLE secretariats ALTER type SET NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE affectations ADD envoyeur_id INT NOT NULL');
        $this->addSql('ALTER TABLE affectations ADD receveur_id INT NOT NULL');
        $this->addSql('ALTER TABLE affectations ADD CONSTRAINT fk_42091044795a786 FOREIGN KEY (envoyeur_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE affectations ADD CONSTRAINT fk_4209104b967e626 FOREIGN KEY (receveur_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_4209104b967e626 ON affectations (receveur_id)');
        $this->addSql('CREATE INDEX idx_42091044795a786 ON affectations (envoyeur_id)');
        $this->addSql('ALTER TABLE affectations DROP envoyeur VARCHAR(10)');
        $this->addSql('ALTER TABLE affectations DROP receveur VARCHAR(10)');
        $this->addSql('ALTER TABLE secretariats ALTER secretaire DROP NOT NULL');
        $this->addSql('ALTER TABLE secretariats ALTER type DROP NOT NULL');
        $this->addSql('ALTER TABLE documents ALTER poste DROP NOT NULL');
        $this->addSql('ALTER TABLE documents ALTER niveau DROP NOT NULL');
    }
}
