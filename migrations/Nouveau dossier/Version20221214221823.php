<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221214221823 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE tansferts_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE Affectations_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE documents (id INT NOT NULL, owner_id INT NOT NULL, type_document_id INT DEFAULT NULL, objet VARCHAR(255) NOT NULL, chemin VARCHAR(255) NOT NULL, mouvement VARCHAR(25) NOT NULL, document_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, status BOOLEAN NOT NULL, structure VARCHAR(255) NOT NULL, reference VARCHAR(255) NOT NULL, numero_enregistrement INT NOT NULL, date_arrivee DATE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A2B072887E3C61F9 ON documents (owner_id)');
        $this->addSql('CREATE INDEX IDX_A2B072888826AFA6 ON documents (type_document_id)');
        $this->addSql('COMMENT ON COLUMN documents.document_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE Affectations (id INT NOT NULL, envoyeur_id INT NOT NULL, document_id INT NOT NULL, receveur_id INT NOT NULL, date_Affectation_at DATE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_47A3EBA34795A786 ON Affectations (envoyeur_id)');
        $this->addSql('CREATE INDEX IDX_47A3EBA3C33F7837 ON Affectations (document_id)');
        $this->addSql('CREATE INDEX IDX_47A3EBA3B967E626 ON Affectations (receveur_id)');
        $this->addSql('ALTER TABLE documents ADD CONSTRAINT FK_A2B072887E3C61F9 FOREIGN KEY (owner_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE documents ADD CONSTRAINT FK_A2B072888826AFA6 FOREIGN KEY (type_document_id) REFERENCES type_documents (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE Affectations ADD CONSTRAINT FK_47A3EBA34795A786 FOREIGN KEY (envoyeur_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE Affectations ADD CONSTRAINT FK_47A3EBA3C33F7837 FOREIGN KEY (document_id) REFERENCES documents (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE Affectations ADD CONSTRAINT FK_47A3EBA3B967E626 FOREIGN KEY (receveur_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE tansferts DROP CONSTRAINT fk_ce98cb134795a786');
        $this->addSql('ALTER TABLE tansferts DROP CONSTRAINT fk_ce98cb13b967e626');
        $this->addSql('DROP TABLE tansferts');
        $this->addSql('ALTER TABLE provenances ADD CONSTRAINT FK_81307960C33F7837 FOREIGN KEY (document_id) REFERENCES documents (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_16763398A4D60759 ON type_documents (libelle)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE provenances DROP CONSTRAINT FK_81307960C33F7837');
        $this->addSql('DROP SEQUENCE Affectations_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE tansferts_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE tansferts (id INT NOT NULL, envoyeur_id INT NOT NULL, receveur_id INT NOT NULL, document_id INT NOT NULL, date_Affectation_at DATE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_ce98cb13b967e626 ON tansferts (receveur_id)');
        $this->addSql('CREATE INDEX idx_ce98cb13c33f7837 ON tansferts (document_id)');
        $this->addSql('CREATE INDEX idx_ce98cb134795a786 ON tansferts (envoyeur_id)');
        $this->addSql('ALTER TABLE tansferts ADD CONSTRAINT fk_ce98cb134795a786 FOREIGN KEY (envoyeur_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE tansferts ADD CONSTRAINT fk_ce98cb13b967e626 FOREIGN KEY (receveur_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE documents DROP CONSTRAINT FK_A2B072887E3C61F9');
        $this->addSql('ALTER TABLE documents DROP CONSTRAINT FK_A2B072888826AFA6');
        $this->addSql('ALTER TABLE Affectations DROP CONSTRAINT FK_47A3EBA34795A786');
        $this->addSql('ALTER TABLE Affectations DROP CONSTRAINT FK_47A3EBA3C33F7837');
        $this->addSql('ALTER TABLE Affectations DROP CONSTRAINT FK_47A3EBA3B967E626');
        $this->addSql('DROP TABLE documents');
        $this->addSql('DROP TABLE Affectations');
        $this->addSql('DROP INDEX UNIQ_16763398A4D60759');
    }
}
