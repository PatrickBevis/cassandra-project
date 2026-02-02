<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260202125327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE address ADD is_deleted TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE audit ADD is_deleted TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE customer ADD is_deleted TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE invoice ADD is_deleted TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE report ADD is_deleted TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE user ADD is_deleted TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE address DROP is_deleted');
        $this->addSql('ALTER TABLE audit DROP is_deleted');
        $this->addSql('ALTER TABLE user DROP is_deleted');
        $this->addSql('ALTER TABLE invoice DROP is_deleted');
        $this->addSql('ALTER TABLE customer DROP is_deleted');
        $this->addSql('ALTER TABLE report DROP is_deleted');
    }
}
