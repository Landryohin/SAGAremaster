<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221112065949 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE directions ALTER status SET NOT NULL');
        $this->addSql('ALTER TABLE divisions ALTER status SET NOT NULL');
        $this->addSql('ALTER TABLE documents ADD zone VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE documents ALTER status SET NOT NULL');
        $this->addSql('ALTER TABLE picture ADD documents_id INT NOT NULL');
        $this->addSql('ALTER TABLE picture ADD picture VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE picture ADD CONSTRAINT FK_16DB4F895F0F2752 FOREIGN KEY (documents_id) REFERENCES documents (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_16DB4F895F0F2752 ON picture (documents_id)');
        $this->addSql('ALTER TABLE services ALTER status SET NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE documents DROP zone');
        $this->addSql('ALTER TABLE documents ALTER status DROP NOT NULL');
        $this->addSql('ALTER TABLE picture DROP CONSTRAINT FK_16DB4F895F0F2752');
        $this->addSql('DROP INDEX IDX_16DB4F895F0F2752');
        $this->addSql('ALTER TABLE picture DROP documents_id');
        $this->addSql('ALTER TABLE picture DROP picture');
        $this->addSql('ALTER TABLE directions ALTER status DROP NOT NULL');
        $this->addSql('ALTER TABLE services ALTER status DROP NOT NULL');
        $this->addSql('ALTER TABLE divisions ALTER status DROP NOT NULL');
    }
}
