<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221107133606 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE picture_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE picture (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE users ADD status BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE users ALTER password TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE users ALTER niveau TYPE VARCHAR(15)');
        $this->addSql('ALTER TABLE users ALTER zone TYPE VARCHAR(15)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE picture_id_seq CASCADE');
        $this->addSql('DROP TABLE picture');
        $this->addSql('ALTER TABLE users DROP status');
        $this->addSql('ALTER TABLE users ALTER niveau TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE users ALTER zone TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE users ALTER password TYPE VARCHAR(255)');
    }
}
