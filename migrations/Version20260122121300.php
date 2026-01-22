<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260122121300 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE audit (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(30) NOT NULL, audit_inspector_name VARCHAR(30) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ended_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', status VARCHAR(255) NOT NULL, is_deleted TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE audit_user (audit_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_AB33384DBD29F359 (audit_id), INDEX IDX_AB33384DA76ED395 (user_id), PRIMARY KEY(audit_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE audit_user ADD CONSTRAINT FK_AB33384DBD29F359 FOREIGN KEY (audit_id) REFERENCES audit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE audit_user ADD CONSTRAINT FK_AB33384DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE audit_user DROP FOREIGN KEY FK_AB33384DBD29F359');
        $this->addSql('ALTER TABLE audit_user DROP FOREIGN KEY FK_AB33384DA76ED395');
        $this->addSql('DROP TABLE audit');
        $this->addSql('DROP TABLE audit_user');
    }
}
