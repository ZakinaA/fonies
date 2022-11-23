<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221123080901 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE enseigne (id INT AUTO_INCREMENT NOT NULL, professeur_id INT DEFAULT NULL, type_instrument_id INT DEFAULT NULL, INDEX IDX_37D4778EBAB22EE9 (professeur_id), INDEX IDX_37D4778E7C1CAAA9 (type_instrument_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE enseigne ADD CONSTRAINT FK_37D4778EBAB22EE9 FOREIGN KEY (professeur_id) REFERENCES professeur (id)');
        $this->addSql('ALTER TABLE enseigne ADD CONSTRAINT FK_37D4778E7C1CAAA9 FOREIGN KEY (type_instrument_id) REFERENCES type_instrument (id)');
        $this->addSql('ALTER TABLE accessoire ADD instrument_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE accessoire ADD CONSTRAINT FK_8FD026ACF11D9C FOREIGN KEY (instrument_id) REFERENCES instrument (id)');
        $this->addSql('CREATE INDEX IDX_8FD026ACF11D9C ON accessoire (instrument_id)');
        $this->addSql('ALTER TABLE contrat_pret ADD instrument_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contrat_pret ADD CONSTRAINT FK_1FB84C67CF11D9C FOREIGN KEY (instrument_id) REFERENCES instrument (id)');
        $this->addSql('CREATE INDEX IDX_1FB84C67CF11D9C ON contrat_pret (instrument_id)');
        $this->addSql('ALTER TABLE instrument ADD type_instrument_id INT DEFAULT NULL, ADD marque_instrument_id INT DEFAULT NULL, ADD modele_instrument_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE instrument ADD CONSTRAINT FK_3CBF69DD7C1CAAA9 FOREIGN KEY (type_instrument_id) REFERENCES type_instrument (id)');
        $this->addSql('ALTER TABLE instrument ADD CONSTRAINT FK_3CBF69DDA3DC3CB0 FOREIGN KEY (marque_instrument_id) REFERENCES marque_instrument (id)');
        $this->addSql('ALTER TABLE instrument ADD CONSTRAINT FK_3CBF69DD487B4449 FOREIGN KEY (modele_instrument_id) REFERENCES modele_instrument (id)');
        $this->addSql('CREATE INDEX IDX_3CBF69DD7C1CAAA9 ON instrument (type_instrument_id)');
        $this->addSql('CREATE INDEX IDX_3CBF69DDA3DC3CB0 ON instrument (marque_instrument_id)');
        $this->addSql('CREATE INDEX IDX_3CBF69DD487B4449 ON instrument (modele_instrument_id)');
        $this->addSql('ALTER TABLE inter_pret ADD contrat_pret_id INT DEFAULT NULL, ADD intervention_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE inter_pret ADD CONSTRAINT FK_244C2367B2AF233D FOREIGN KEY (contrat_pret_id) REFERENCES contrat_pret (id)');
        $this->addSql('ALTER TABLE inter_pret ADD CONSTRAINT FK_244C23678EAE3863 FOREIGN KEY (intervention_id) REFERENCES intervention (id)');
        $this->addSql('CREATE INDEX IDX_244C2367B2AF233D ON inter_pret (contrat_pret_id)');
        $this->addSql('CREATE INDEX IDX_244C23678EAE3863 ON inter_pret (intervention_id)');
        $this->addSql('ALTER TABLE intervention ADD professionel_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE intervention ADD CONSTRAINT FK_D11814ABF837D6C3 FOREIGN KEY (professionel_id) REFERENCES professionnel (id)');
        $this->addSql('CREATE INDEX IDX_D11814ABF837D6C3 ON intervention (professionel_id)');
        $this->addSql('ALTER TABLE type_instrument ADD classe_instrument_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE type_instrument ADD CONSTRAINT FK_21BCBFF8CE879FB1 FOREIGN KEY (classe_instrument_id) REFERENCES classe_instrument (id)');
        $this->addSql('CREATE INDEX IDX_21BCBFF8CE879FB1 ON type_instrument (classe_instrument_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enseigne DROP FOREIGN KEY FK_37D4778EBAB22EE9');
        $this->addSql('ALTER TABLE enseigne DROP FOREIGN KEY FK_37D4778E7C1CAAA9');
        $this->addSql('DROP TABLE enseigne');
        $this->addSql('ALTER TABLE accessoire DROP FOREIGN KEY FK_8FD026ACF11D9C');
        $this->addSql('DROP INDEX IDX_8FD026ACF11D9C ON accessoire');
        $this->addSql('ALTER TABLE accessoire DROP instrument_id');
        $this->addSql('ALTER TABLE contrat_pret DROP FOREIGN KEY FK_1FB84C67CF11D9C');
        $this->addSql('DROP INDEX IDX_1FB84C67CF11D9C ON contrat_pret');
        $this->addSql('ALTER TABLE contrat_pret DROP instrument_id');
        $this->addSql('ALTER TABLE instrument DROP FOREIGN KEY FK_3CBF69DD7C1CAAA9');
        $this->addSql('ALTER TABLE instrument DROP FOREIGN KEY FK_3CBF69DDA3DC3CB0');
        $this->addSql('ALTER TABLE instrument DROP FOREIGN KEY FK_3CBF69DD487B4449');
        $this->addSql('DROP INDEX IDX_3CBF69DD7C1CAAA9 ON instrument');
        $this->addSql('DROP INDEX IDX_3CBF69DDA3DC3CB0 ON instrument');
        $this->addSql('DROP INDEX IDX_3CBF69DD487B4449 ON instrument');
        $this->addSql('ALTER TABLE instrument DROP type_instrument_id, DROP marque_instrument_id, DROP modele_instrument_id');
        $this->addSql('ALTER TABLE inter_pret DROP FOREIGN KEY FK_244C2367B2AF233D');
        $this->addSql('ALTER TABLE inter_pret DROP FOREIGN KEY FK_244C23678EAE3863');
        $this->addSql('DROP INDEX IDX_244C2367B2AF233D ON inter_pret');
        $this->addSql('DROP INDEX IDX_244C23678EAE3863 ON inter_pret');
        $this->addSql('ALTER TABLE inter_pret DROP contrat_pret_id, DROP intervention_id');
        $this->addSql('ALTER TABLE intervention DROP FOREIGN KEY FK_D11814ABF837D6C3');
        $this->addSql('DROP INDEX IDX_D11814ABF837D6C3 ON intervention');
        $this->addSql('ALTER TABLE intervention DROP professionel_id');
        $this->addSql('ALTER TABLE type_instrument DROP FOREIGN KEY FK_21BCBFF8CE879FB1');
        $this->addSql('DROP INDEX IDX_21BCBFF8CE879FB1 ON type_instrument');
        $this->addSql('ALTER TABLE type_instrument DROP classe_instrument_id');
    }
}
