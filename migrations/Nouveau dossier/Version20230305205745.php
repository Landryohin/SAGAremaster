<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230305205745 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE documents ALTER poste SET NOT NULL');
        $this->addSql('ALTER TABLE documents ALTER niveau SET NOT NULL');
        $this->addSql('ALTER TABLE secretariats ALTER secretaire SET NOT NULL');
        $this->addSql('ALTER TABLE secretariats ALTER type SET NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE secretariats ALTER secretaire DROP NOT NULL');
        $this->addSql('ALTER TABLE secretariats ALTER type DROP NOT NULL');
        $this->addSql('ALTER TABLE documents ALTER poste DROP NOT NULL');
        $this->addSql('ALTER TABLE documents ALTER niveau DROP NOT NULL');
    }
}
