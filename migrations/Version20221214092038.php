<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221214092038 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eleve ADD email_u_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F77B93B315 FOREIGN KEY (email_u_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_ECA105F77B93B315 ON eleve (email_u_id)');
        $this->addSql('ALTER TABLE responsable ADD email_u_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE responsable ADD CONSTRAINT FK_52520D077B93B315 FOREIGN KEY (email_u_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_52520D077B93B315 ON responsable (email_u_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eleve DROP FOREIGN KEY FK_ECA105F77B93B315');
        $this->addSql('DROP INDEX IDX_ECA105F77B93B315 ON eleve');
        $this->addSql('ALTER TABLE eleve DROP email_u_id');
        $this->addSql('ALTER TABLE responsable DROP FOREIGN KEY FK_52520D077B93B315');
        $this->addSql('DROP INDEX IDX_52520D077B93B315 ON responsable');
        $this->addSql('ALTER TABLE responsable DROP email_u_id');
    }
}
