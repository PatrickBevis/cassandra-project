<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260206093734 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE audit_user (audit_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_AB33384DBD29F359 (audit_id), INDEX IDX_AB33384DA76ED395 (user_id), PRIMARY KEY(audit_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE report_user (report_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_FEBF3BB24BD2A4C0 (report_id), INDEX IDX_FEBF3BB2A76ED395 (user_id), PRIMARY KEY(report_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tax_invoice (tax_id INT NOT NULL, invoice_id INT NOT NULL, INDEX IDX_D12DB74EB2A824D8 (tax_id), INDEX IDX_D12DB74E2989F1FD (invoice_id), PRIMARY KEY(tax_id, invoice_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE audit_user ADD CONSTRAINT FK_AB33384DBD29F359 FOREIGN KEY (audit_id) REFERENCES audit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE audit_user ADD CONSTRAINT FK_AB33384DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE report_user ADD CONSTRAINT FK_FEBF3BB24BD2A4C0 FOREIGN KEY (report_id) REFERENCES report (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE report_user ADD CONSTRAINT FK_FEBF3BB2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tax_invoice ADD CONSTRAINT FK_D12DB74EB2A824D8 FOREIGN KEY (tax_id) REFERENCES tax (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tax_invoice ADD CONSTRAINT FK_D12DB74E2989F1FD FOREIGN KEY (invoice_id) REFERENCES invoice (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE audit ADD report_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE audit ADD CONSTRAINT FK_9218FF794BD2A4C0 FOREIGN KEY (report_id) REFERENCES report (id)');
        $this->addSql('CREATE INDEX IDX_9218FF794BD2A4C0 ON audit (report_id)');
        $this->addSql('ALTER TABLE customer ADD address_id INT DEFAULT NULL, CHANGE phone_number phone_number VARCHAR(15) NOT NULL');
        $this->addSql('ALTER TABLE customer ADD CONSTRAINT FK_81398E09F5B7AF75 FOREIGN KEY (address_id) REFERENCES address (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_81398E093D05145B ON customer (siret_number)');
        $this->addSql('CREATE INDEX IDX_81398E09F5B7AF75 ON customer (address_id)');
        $this->addSql('ALTER TABLE invoice ADD customer_id INT NOT NULL, ADD tax_id INT DEFAULT NULL, DROP total');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_906517449395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (id)');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744B2A824D8 FOREIGN KEY (tax_id) REFERENCES tax (id)');
        $this->addSql('CREATE INDEX IDX_906517449395C3F3 ON invoice (customer_id)');
        $this->addSql('CREATE INDEX IDX_90651744B2A824D8 ON invoice (tax_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE audit_user DROP FOREIGN KEY FK_AB33384DBD29F359');
        $this->addSql('ALTER TABLE audit_user DROP FOREIGN KEY FK_AB33384DA76ED395');
        $this->addSql('ALTER TABLE report_user DROP FOREIGN KEY FK_FEBF3BB24BD2A4C0');
        $this->addSql('ALTER TABLE report_user DROP FOREIGN KEY FK_FEBF3BB2A76ED395');
        $this->addSql('ALTER TABLE tax_invoice DROP FOREIGN KEY FK_D12DB74EB2A824D8');
        $this->addSql('ALTER TABLE tax_invoice DROP FOREIGN KEY FK_D12DB74E2989F1FD');
        $this->addSql('DROP TABLE audit_user');
        $this->addSql('DROP TABLE report_user');
        $this->addSql('DROP TABLE tax_invoice');
        $this->addSql('ALTER TABLE audit DROP FOREIGN KEY FK_9218FF794BD2A4C0');
        $this->addSql('DROP INDEX IDX_9218FF794BD2A4C0 ON audit');
        $this->addSql('ALTER TABLE audit DROP report_id');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_906517449395C3F3');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744B2A824D8');
        $this->addSql('DROP INDEX IDX_906517449395C3F3 ON invoice');
        $this->addSql('DROP INDEX IDX_90651744B2A824D8 ON invoice');
        $this->addSql('ALTER TABLE invoice ADD total NUMERIC(6, 2) NOT NULL, DROP customer_id, DROP tax_id');
        $this->addSql('ALTER TABLE customer DROP FOREIGN KEY FK_81398E09F5B7AF75');
        $this->addSql('DROP INDEX UNIQ_81398E093D05145B ON customer');
        $this->addSql('DROP INDEX IDX_81398E09F5B7AF75 ON customer');
        $this->addSql('ALTER TABLE customer DROP address_id, CHANGE phone_number phone_number VARCHAR(12) NOT NULL');
    }
}
