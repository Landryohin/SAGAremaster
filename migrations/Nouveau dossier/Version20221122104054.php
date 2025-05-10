<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221122104054 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE picture_id_seq CASCADE');
        $this->addSql('ALTER TABLE picture DROP CONSTRAINT fk_16db4f895f0f2752');
        $this->addSql('DROP TABLE picture');
        $this->addSql('ALTER TABLE divisions ALTER service_id DROP NOT NULL');
        $this->addSql('ALTER TABLE services ALTER direction_id DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE picture_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE picture (id INT NOT NULL, documents_id INT NOT NULL, picture VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_16db4f895f0f2752 ON picture (documents_id)');
        $this->addSql('ALTER TABLE picture ADD CONSTRAINT fk_16db4f895f0f2752 FOREIGN KEY (documents_id) REFERENCES documents (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE divisions ALTER service_id SET NOT NULL');
        $this->addSql('ALTER TABLE services ALTER direction_id SET NOT NULL');
    }
}
