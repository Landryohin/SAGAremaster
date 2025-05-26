<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230408220822 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE postes_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE postes (id INT NOT NULL, agent_id INT NOT NULL, owner_id INT NOT NULL, niveau VARCHAR(25) NOT NULL, fonction VARCHAR(15) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_5A763C643414710B ON postes (agent_id)');
        $this->addSql('CREATE INDEX IDX_5A763C647E3C61F9 ON postes (owner_id)');
        $this->addSql('ALTER TABLE postes ADD CONSTRAINT FK_5A763C643414710B FOREIGN KEY (agent_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE postes ADD CONSTRAINT FK_5A763C647E3C61F9 FOREIGN KEY (owner_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE affectations ADD owner_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE affectations ADD CONSTRAINT FK_42091047E3C61F9 FOREIGN KEY (owner_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_42091047E3C61F9 ON affectations (owner_id)');
        $this->addSql('ALTER TABLE directions ADD owner_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE directions ADD CONSTRAINT FK_495867EC7E3C61F9 FOREIGN KEY (owner_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_495867EC7E3C61F9 ON directions (owner_id)');
        $this->addSql('ALTER TABLE divisions ADD owner_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE divisions ADD CONSTRAINT FK_1C40C317E3C61F9 FOREIGN KEY (owner_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_1C40C317E3C61F9 ON divisions (owner_id)');
        $this->addSql('ALTER TABLE secretariats ADD owner_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE secretariats ADD CONSTRAINT FK_A0F54B6C7E3C61F9 FOREIGN KEY (owner_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_A0F54B6C7E3C61F9 ON secretariats (owner_id)');
        $this->addSql('ALTER TABLE services ADD owner_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE services ADD CONSTRAINT FK_7332E1697E3C61F9 FOREIGN KEY (owner_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_7332E1697E3C61F9 ON services (owner_id)');
        $this->addSql('ALTER TABLE type_documents ADD owner_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE type_documents ADD CONSTRAINT FK_167633987E3C61F9 FOREIGN KEY (owner_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_167633987E3C61F9 ON type_documents (owner_id)');
        $this->addSql('ALTER TABLE users ADD owner_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E97E3C61F9 FOREIGN KEY (owner_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_1483A5E97E3C61F9 ON users (owner_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE postes_id_seq CASCADE');
        $this->addSql('ALTER TABLE postes DROP CONSTRAINT FK_5A763C643414710B');
        $this->addSql('ALTER TABLE postes DROP CONSTRAINT FK_5A763C647E3C61F9');
        $this->addSql('DROP TABLE postes');
        $this->addSql('ALTER TABLE divisions DROP CONSTRAINT FK_1C40C317E3C61F9');
        $this->addSql('DROP INDEX IDX_1C40C317E3C61F9');
        $this->addSql('ALTER TABLE divisions DROP owner_id');
        $this->addSql('ALTER TABLE users DROP CONSTRAINT FK_1483A5E97E3C61F9');
        $this->addSql('DROP INDEX IDX_1483A5E97E3C61F9');
        $this->addSql('ALTER TABLE users DROP owner_id');
        $this->addSql('ALTER TABLE services DROP CONSTRAINT FK_7332E1697E3C61F9');
        $this->addSql('DROP INDEX IDX_7332E1697E3C61F9');
        $this->addSql('ALTER TABLE services DROP owner_id');
        $this->addSql('ALTER TABLE secretariats DROP CONSTRAINT FK_A0F54B6C7E3C61F9');
        $this->addSql('DROP INDEX IDX_A0F54B6C7E3C61F9');
        $this->addSql('ALTER TABLE secretariats DROP owner_id');
        $this->addSql('ALTER TABLE directions DROP CONSTRAINT FK_495867EC7E3C61F9');
        $this->addSql('DROP INDEX IDX_495867EC7E3C61F9');
        $this->addSql('ALTER TABLE directions DROP owner_id');
        $this->addSql('ALTER TABLE affectations DROP CONSTRAINT FK_42091047E3C61F9');
        $this->addSql('DROP INDEX IDX_42091047E3C61F9');
        $this->addSql('ALTER TABLE affectations DROP owner_id');
        $this->addSql('ALTER TABLE type_documents DROP CONSTRAINT FK_167633987E3C61F9');
        $this->addSql('DROP INDEX IDX_167633987E3C61F9');
        $this->addSql('ALTER TABLE type_documents DROP owner_id');
    }
}
