<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260123153519 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE invoice (id INT AUTO_INCREMENT NOT NULL, number INT NOT NULL, status VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', price_taxfree NUMERIC(6, 2) NOT NULL, price_withtax NUMERIC(6, 2) NOT NULL, is_deleted TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tax (id INT AUTO_INCREMENT NOT NULL, rate NUMERIC(2, 1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tax_invoice (tax_id INT NOT NULL, invoice_id INT NOT NULL, INDEX IDX_D12DB74EB2A824D8 (tax_id), INDEX IDX_D12DB74E2989F1FD (invoice_id), PRIMARY KEY(tax_id, invoice_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tax_invoice ADD CONSTRAINT FK_D12DB74EB2A824D8 FOREIGN KEY (tax_id) REFERENCES tax (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tax_invoice ADD CONSTRAINT FK_D12DB74E2989F1FD FOREIGN KEY (invoice_id) REFERENCES invoice (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tax_invoice DROP FOREIGN KEY FK_D12DB74EB2A824D8');
        $this->addSql('ALTER TABLE tax_invoice DROP FOREIGN KEY FK_D12DB74E2989F1FD');
        $this->addSql('DROP TABLE invoice');
        $this->addSql('DROP TABLE tax');
        $this->addSql('DROP TABLE tax_invoice');
    }
}
