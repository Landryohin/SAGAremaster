<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230125200634 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE secretariats_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE secretariats (id INT NOT NULL, direction_id INT DEFAULT NULL, secretaire_id INT DEFAULT NULL, interim BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A0F54B6CAF73D997 ON secretariats (direction_id)');
        $this->addSql('CREATE INDEX IDX_A0F54B6CA90F02B2 ON secretariats (secretaire_id)');
        $this->addSql('ALTER TABLE secretariats ADD CONSTRAINT FK_A0F54B6CAF73D997 FOREIGN KEY (direction_id) REFERENCES directions (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE secretariats ADD CONSTRAINT FK_A0F54B6CA90F02B2 FOREIGN KEY (secretaire_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE secretariats_id_seq CASCADE');
        $this->addSql('ALTER TABLE secretariats DROP CONSTRAINT FK_A0F54B6CAF73D997');
        $this->addSql('ALTER TABLE secretariats DROP CONSTRAINT FK_A0F54B6CA90F02B2');
        $this->addSql('DROP TABLE secretariats');
    }
}
