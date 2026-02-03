<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260203093559 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer CHANGE phone_number phone_number VARCHAR(15) NOT NULL');
        $this->addSql('ALTER TABLE invoice ADD tax_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744B2A824D8 FOREIGN KEY (tax_id) REFERENCES tax (id)');
        $this->addSql('CREATE INDEX IDX_90651744B2A824D8 ON invoice (tax_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer CHANGE phone_number phone_number VARCHAR(12) NOT NULL');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744B2A824D8');
        $this->addSql('DROP INDEX IDX_90651744B2A824D8 ON invoice');
        $this->addSql('ALTER TABLE invoice DROP tax_id');
    }
}
