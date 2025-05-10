<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221123131001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE directions_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE divisions_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE documents_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE services_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE type_documents_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE users_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE directions (id INT NOT NULL, directeur_id INT DEFAULT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(255) NOT NULL, status BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_495867EC77153098 ON directions (code)');
        $this->addSql('CREATE INDEX IDX_495867ECE82E7EE8 ON directions (directeur_id)');
        $this->addSql('CREATE TABLE divisions (id INT NOT NULL, service_id INT DEFAULT NULL, chef_id INT DEFAULT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(255) NOT NULL, status BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1C40C3177153098 ON divisions (code)');
        $this->addSql('CREATE INDEX IDX_1C40C31ED5CA9E6 ON divisions (service_id)');
        $this->addSql('CREATE INDEX IDX_1C40C31150A48F1 ON divisions (chef_id)');
        $this->addSql('CREATE TABLE documents (id INT NOT NULL, owner_id INT NOT NULL, type_document_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, objet VARCHAR(255) NOT NULL, chemin VARCHAR(255) NOT NULL, structure VARCHAR(255) NOT NULL, mouvement VARCHAR(25) NOT NULL, niveau VARCHAR(50) NOT NULL, zone VARCHAR(50) NOT NULL, document_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, date_mouvement TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, status BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A2B072887E3C61F9 ON documents (owner_id)');
        $this->addSql('CREATE INDEX IDX_A2B072888826AFA6 ON documents (type_document_id)');
        $this->addSql('COMMENT ON COLUMN documents.document_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE services (id INT NOT NULL, direction_id INT DEFAULT NULL, chef_id INT DEFAULT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(255) NOT NULL, status BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7332E16977153098 ON services (code)');
        $this->addSql('CREATE INDEX IDX_7332E169AF73D997 ON services (direction_id)');
        $this->addSql('CREATE INDEX IDX_7332E169150A48F1 ON services (chef_id)');
        $this->addSql('CREATE TABLE type_documents (id INT NOT NULL, code VARCHAR(25) NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE users (id INT NOT NULL, email VARCHAR(180) NOT NULL, nom VARCHAR(80) NOT NULL, prenom VARCHAR(100) NOT NULL, roles JSON NOT NULL, niveau VARCHAR(15) NOT NULL, zone VARCHAR(15) NOT NULL, status BOOLEAN NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON users (email)');
        $this->addSql('CREATE TABLE messenger_messages (id BIGSERIAL NOT NULL, body TEXT NOT NULL, headers TEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, available_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, delivered_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
        $this->addSql('CREATE OR REPLACE FUNCTION notify_messenger_messages() RETURNS TRIGGER AS $$
            BEGIN
                PERFORM pg_notify(\'messenger_messages\', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$ LANGUAGE plpgsql;');
        $this->addSql('DROP TRIGGER IF EXISTS notify_trigger ON messenger_messages;');
        $this->addSql('CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON messenger_messages FOR EACH ROW EXECUTE PROCEDURE notify_messenger_messages();');
        $this->addSql('ALTER TABLE directions ADD CONSTRAINT FK_495867ECE82E7EE8 FOREIGN KEY (directeur_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE divisions ADD CONSTRAINT FK_1C40C31ED5CA9E6 FOREIGN KEY (service_id) REFERENCES services (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE divisions ADD CONSTRAINT FK_1C40C31150A48F1 FOREIGN KEY (chef_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE documents ADD CONSTRAINT FK_A2B072887E3C61F9 FOREIGN KEY (owner_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE documents ADD CONSTRAINT FK_A2B072888826AFA6 FOREIGN KEY (type_document_id) REFERENCES type_documents (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE services ADD CONSTRAINT FK_7332E169AF73D997 FOREIGN KEY (direction_id) REFERENCES directions (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE services ADD CONSTRAINT FK_7332E169150A48F1 FOREIGN KEY (chef_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE directions_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE divisions_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE documents_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE services_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE type_documents_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE users_id_seq CASCADE');
        $this->addSql('ALTER TABLE directions DROP CONSTRAINT FK_495867ECE82E7EE8');
        $this->addSql('ALTER TABLE divisions DROP CONSTRAINT FK_1C40C31ED5CA9E6');
        $this->addSql('ALTER TABLE divisions DROP CONSTRAINT FK_1C40C31150A48F1');
        $this->addSql('ALTER TABLE documents DROP CONSTRAINT FK_A2B072887E3C61F9');
        $this->addSql('ALTER TABLE documents DROP CONSTRAINT FK_A2B072888826AFA6');
        $this->addSql('ALTER TABLE services DROP CONSTRAINT FK_7332E169AF73D997');
        $this->addSql('ALTER TABLE services DROP CONSTRAINT FK_7332E169150A48F1');
        $this->addSql('DROP TABLE directions');
        $this->addSql('DROP TABLE divisions');
        $this->addSql('DROP TABLE documents');
        $this->addSql('DROP TABLE services');
        $this->addSql('DROP TABLE type_documents');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
