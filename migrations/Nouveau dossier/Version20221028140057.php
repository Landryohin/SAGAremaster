<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221028140057 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE divisions_services DROP CONSTRAINT fk_c0190dea73540333');
        $this->addSql('ALTER TABLE divisions_services DROP CONSTRAINT fk_c0190deaaef5a6c1');
        $this->addSql('DROP TABLE divisions_services');
        $this->addSql('ALTER TABLE divisions ADD service_id INT NOT NULL');
        $this->addSql('ALTER TABLE divisions ADD CONSTRAINT FK_1C40C31ED5CA9E6 FOREIGN KEY (service_id) REFERENCES services (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_1C40C31ED5CA9E6 ON divisions (service_id)');
        $this->addSql('ALTER TABLE services DROP CONSTRAINT fk_7332e169150a48f1');
        $this->addSql('DROP INDEX idx_7332e169150a48f1');
        $this->addSql('ALTER TABLE services DROP chef_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE TABLE divisions_services (divisions_id INT NOT NULL, services_id INT NOT NULL, PRIMARY KEY(divisions_id, services_id))');
        $this->addSql('CREATE INDEX idx_c0190deaaef5a6c1 ON divisions_services (services_id)');
        $this->addSql('CREATE INDEX idx_c0190dea73540333 ON divisions_services (divisions_id)');
        $this->addSql('ALTER TABLE divisions_services ADD CONSTRAINT fk_c0190dea73540333 FOREIGN KEY (divisions_id) REFERENCES divisions (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE divisions_services ADD CONSTRAINT fk_c0190deaaef5a6c1 FOREIGN KEY (services_id) REFERENCES services (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE divisions DROP CONSTRAINT FK_1C40C31ED5CA9E6');
        $this->addSql('DROP INDEX IDX_1C40C31ED5CA9E6');
        $this->addSql('ALTER TABLE divisions DROP service_id');
        $this->addSql('ALTER TABLE services ADD chef_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE services ADD CONSTRAINT fk_7332e169150a48f1 FOREIGN KEY (chef_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_7332e169150a48f1 ON services (chef_id)');
    }
}
