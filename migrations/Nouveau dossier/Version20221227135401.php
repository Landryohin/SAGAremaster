<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221227135401 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE transferts_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE affectations_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE affectations (id INT NOT NULL, envoyeur_id INT NOT NULL, document_id INT NOT NULL, receveur_id INT NOT NULL, date_affectation_at DATE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_42091044795A786 ON affectations (envoyeur_id)');
        $this->addSql('CREATE INDEX IDX_4209104C33F7837 ON affectations (document_id)');
        $this->addSql('CREATE INDEX IDX_4209104B967E626 ON affectations (receveur_id)');
        $this->addSql('ALTER TABLE affectations ADD CONSTRAINT FK_42091044795A786 FOREIGN KEY (envoyeur_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE affectations ADD CONSTRAINT FK_4209104C33F7837 FOREIGN KEY (document_id) REFERENCES documents (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE affectations ADD CONSTRAINT FK_4209104B967E626 FOREIGN KEY (receveur_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE transferts DROP CONSTRAINT fk_47a3eba34795a786');
        $this->addSql('ALTER TABLE transferts DROP CONSTRAINT fk_47a3eba3c33f7837');
        $this->addSql('ALTER TABLE transferts DROP CONSTRAINT fk_47a3eba3b967e626');
        $this->addSql('DROP TABLE transferts');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE affectations_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE transferts_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE transferts (id INT NOT NULL, envoyeur_id INT NOT NULL, document_id INT NOT NULL, receveur_id INT NOT NULL, date_transfert_at DATE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_47a3eba3b967e626 ON transferts (receveur_id)');
        $this->addSql('CREATE INDEX idx_47a3eba3c33f7837 ON transferts (document_id)');
        $this->addSql('CREATE INDEX idx_47a3eba34795a786 ON transferts (envoyeur_id)');
        $this->addSql('ALTER TABLE transferts ADD CONSTRAINT fk_47a3eba34795a786 FOREIGN KEY (envoyeur_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE transferts ADD CONSTRAINT fk_47a3eba3c33f7837 FOREIGN KEY (document_id) REFERENCES documents (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE transferts ADD CONSTRAINT fk_47a3eba3b967e626 FOREIGN KEY (receveur_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE affectations DROP CONSTRAINT FK_42091044795A786');
        $this->addSql('ALTER TABLE affectations DROP CONSTRAINT FK_4209104C33F7837');
        $this->addSql('ALTER TABLE affectations DROP CONSTRAINT FK_4209104B967E626');
        $this->addSql('DROP TABLE affectations');
    }
}
