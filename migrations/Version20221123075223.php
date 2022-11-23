<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221123075223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tranche ADD tarif_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tranche ADD CONSTRAINT FK_66675840357C0A59 FOREIGN KEY (tarif_id) REFERENCES tarif (id)');
        $this->addSql('CREATE INDEX IDX_66675840357C0A59 ON tranche (tarif_id)');
        $this->addSql('ALTER TABLE type_cours ADD tarif_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE type_cours ADD CONSTRAINT FK_F3C60B6B357C0A59 FOREIGN KEY (tarif_id) REFERENCES tarif (id)');
        $this->addSql('CREATE INDEX IDX_F3C60B6B357C0A59 ON type_cours (tarif_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tranche DROP FOREIGN KEY FK_66675840357C0A59');
        $this->addSql('DROP INDEX IDX_66675840357C0A59 ON tranche');
        $this->addSql('ALTER TABLE tranche DROP tarif_id');
        $this->addSql('ALTER TABLE type_cours DROP FOREIGN KEY FK_F3C60B6B357C0A59');
        $this->addSql('DROP INDEX IDX_F3C60B6B357C0A59 ON type_cours');
        $this->addSql('ALTER TABLE type_cours DROP tarif_id');
    }
}
