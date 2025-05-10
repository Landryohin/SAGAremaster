<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221007123901 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE documents_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE documents (id INT NOT NULL, nom VARCHAR(255) NOT NULL, objet VARCHAR(255) NOT NULL, chemin VARCHAR(255) NOT NULL, structure VARCHAR(255) NOT NULL, mouvement VARCHAR(25) NOT NULL, niveau VARCHAR(50) NOT NULL, document_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, date_mouvement TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN documents.document_at IS \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE documents_id_seq CASCADE');
        $this->addSql('DROP TABLE documents');
    }
}
