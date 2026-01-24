<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260124102823 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, street_number INT NOT NULL, street_way VARCHAR(255) NOT NULL, street_name VARCHAR(30) NOT NULL, street_complementary VARCHAR(100) DEFAULT NULL, zip INT NOT NULL, city VARCHAR(30) NOT NULL, country VARCHAR(20) NOT NULL, is_eu TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE customer ADD invoice_id INT DEFAULT NULL, ADD address_id INT DEFAULT NULL, ADD company_name VARCHAR(50) NOT NULL, ADD siret_number VARCHAR(14) DEFAULT NULL, ADD phone_number VARCHAR(12) NOT NULL, ADD is_deleted TINYINT(1) NOT NULL, DROP name, CHANGE email email VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE customer ADD CONSTRAINT FK_81398E092989F1FD FOREIGN KEY (invoice_id) REFERENCES invoice (id)');
        $this->addSql('ALTER TABLE customer ADD CONSTRAINT FK_81398E09F5B7AF75 FOREIGN KEY (address_id) REFERENCES address (id)');
        $this->addSql('CREATE INDEX IDX_81398E092989F1FD ON customer (invoice_id)');
        $this->addSql('CREATE INDEX IDX_81398E09F5B7AF75 ON customer (address_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer DROP FOREIGN KEY FK_81398E09F5B7AF75');
        $this->addSql('DROP TABLE address');
        $this->addSql('ALTER TABLE customer DROP FOREIGN KEY FK_81398E092989F1FD');
        $this->addSql('DROP INDEX IDX_81398E092989F1FD ON customer');
        $this->addSql('DROP INDEX IDX_81398E09F5B7AF75 ON customer');
        $this->addSql('ALTER TABLE customer ADD name VARCHAR(100) NOT NULL, DROP invoice_id, DROP address_id, DROP company_name, DROP siret_number, DROP phone_number, DROP is_deleted, CHANGE email email VARCHAR(100) NOT NULL');
    }
}
