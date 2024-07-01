<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221007115256 extends AbstractMigration
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
        $this->addSql('CREATE SEQUENCE services_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE type_documents_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE directions (id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE divisions (id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE divisions_services (divisions_id INT NOT NULL, services_id INT NOT NULL, PRIMARY KEY(divisions_id, services_id))');
        $this->addSql('CREATE INDEX IDX_C0190DEA73540333 ON divisions_services (divisions_id)');
        $this->addSql('CREATE INDEX IDX_C0190DEAAEF5A6C1 ON divisions_services (services_id)');
        $this->addSql('CREATE TABLE services (id INT NOT NULL, direction_id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_7332E169AF73D997 ON services (direction_id)');
        $this->addSql('CREATE TABLE type_documents (id INT NOT NULL, code VARCHAR(25) NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
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
        $this->addSql('ALTER TABLE divisions_services ADD CONSTRAINT FK_C0190DEA73540333 FOREIGN KEY (divisions_id) REFERENCES divisions (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE divisions_services ADD CONSTRAINT FK_C0190DEAAEF5A6C1 FOREIGN KEY (services_id) REFERENCES services (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE services ADD CONSTRAINT FK_7332E169AF73D997 FOREIGN KEY (direction_id) REFERENCES directions (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE directions_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE divisions_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE services_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE type_documents_id_seq CASCADE');
        $this->addSql('ALTER TABLE divisions_services DROP CONSTRAINT FK_C0190DEA73540333');
        $this->addSql('ALTER TABLE divisions_services DROP CONSTRAINT FK_C0190DEAAEF5A6C1');
        $this->addSql('ALTER TABLE services DROP CONSTRAINT FK_7332E169AF73D997');
        $this->addSql('DROP TABLE directions');
        $this->addSql('DROP TABLE divisions');
        $this->addSql('DROP TABLE divisions_services');
        $this->addSql('DROP TABLE services');
        $this->addSql('DROP TABLE type_documents');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
