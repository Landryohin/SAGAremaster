<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221025095722 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE users_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE users (id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON users (email)');
        $this->addSql('ALTER TABLE directions ADD directeur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE directions ADD CONSTRAINT FK_495867ECE82E7EE8 FOREIGN KEY (directeur_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_495867ECE82E7EE8 ON directions (directeur_id)');
        $this->addSql('ALTER TABLE divisions ADD chef_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE divisions ADD CONSTRAINT FK_1C40C31150A48F1 FOREIGN KEY (chef_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_1C40C31150A48F1 ON divisions (chef_id)');
        $this->addSql('ALTER TABLE documents ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE documents ADD type_document_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE documents ADD CONSTRAINT FK_A2B072887E3C61F9 FOREIGN KEY (owner_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE documents ADD CONSTRAINT FK_A2B072888826AFA6 FOREIGN KEY (type_document_id) REFERENCES type_documents (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_A2B072887E3C61F9 ON documents (owner_id)');
        $this->addSql('CREATE INDEX IDX_A2B072888826AFA6 ON documents (type_document_id)');
        $this->addSql('ALTER TABLE services ADD chef_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE services ADD CONSTRAINT FK_7332E169150A48F1 FOREIGN KEY (chef_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_7332E169150A48F1 ON services (chef_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE directions DROP CONSTRAINT FK_495867ECE82E7EE8');
        $this->addSql('ALTER TABLE divisions DROP CONSTRAINT FK_1C40C31150A48F1');
        $this->addSql('ALTER TABLE documents DROP CONSTRAINT FK_A2B072887E3C61F9');
        $this->addSql('ALTER TABLE services DROP CONSTRAINT FK_7332E169150A48F1');
        $this->addSql('DROP SEQUENCE users_id_seq CASCADE');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP INDEX IDX_7332E169150A48F1');
        $this->addSql('ALTER TABLE services DROP chef_id');
        $this->addSql('DROP INDEX IDX_1C40C31150A48F1');
        $this->addSql('ALTER TABLE divisions DROP chef_id');
        $this->addSql('ALTER TABLE documents DROP CONSTRAINT FK_A2B072888826AFA6');
        $this->addSql('DROP INDEX IDX_A2B072887E3C61F9');
        $this->addSql('DROP INDEX IDX_A2B072888826AFA6');
        $this->addSql('ALTER TABLE documents DROP owner_id');
        $this->addSql('ALTER TABLE documents DROP type_document_id');
        $this->addSql('DROP INDEX IDX_495867ECE82E7EE8');
        $this->addSql('ALTER TABLE directions DROP directeur_id');
    }
}
