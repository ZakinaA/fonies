<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221123074958 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte ADD responsable_id INT DEFAULT NULL, ADD eleve_id INT DEFAULT NULL, ADD professeur_id INT DEFAULT NULL, ADD role_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF6526053C59D72 FOREIGN KEY (responsable_id) REFERENCES responsable (id)');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF65260A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF65260BAB22EE9 FOREIGN KEY (professeur_id) REFERENCES professeur (id)');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF65260D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('CREATE INDEX IDX_CFF6526053C59D72 ON compte (responsable_id)');
        $this->addSql('CREATE INDEX IDX_CFF65260A6CC7B2 ON compte (eleve_id)');
        $this->addSql('CREATE INDEX IDX_CFF65260BAB22EE9 ON compte (professeur_id)');
        $this->addSql('CREATE INDEX IDX_CFF65260D60322AC ON compte (role_id)');
        $this->addSql('ALTER TABLE contrat_pret ADD eleve_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contrat_pret ADD CONSTRAINT FK_1FB84C67A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('CREATE INDEX IDX_1FB84C67A6CC7B2 ON contrat_pret (eleve_id)');
        $this->addSql('ALTER TABLE cours ADD professeur_id INT DEFAULT NULL, ADD jour_id INT DEFAULT NULL, ADD type_cours_id INT DEFAULT NULL, ADD type_instrument_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CBAB22EE9 FOREIGN KEY (professeur_id) REFERENCES professeur (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C220C6AD0 FOREIGN KEY (jour_id) REFERENCES jour (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CB3305F4C FOREIGN KEY (type_cours_id) REFERENCES type_cours (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C7C1CAAA9 FOREIGN KEY (type_instrument_id) REFERENCES type_instrument (id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9CBAB22EE9 ON cours (professeur_id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9C220C6AD0 ON cours (jour_id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9CB3305F4C ON cours (type_cours_id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9C7C1CAAA9 ON cours (type_instrument_id)');
        $this->addSql('ALTER TABLE eleve ADD responsable_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F753C59D72 FOREIGN KEY (responsable_id) REFERENCES responsable (id)');
        $this->addSql('CREATE INDEX IDX_ECA105F753C59D72 ON eleve (responsable_id)');
        $this->addSql('ALTER TABLE inscription ADD eleve_id INT NOT NULL, ADD cours_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D67ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('CREATE INDEX IDX_5E90F6D6A6CC7B2 ON inscription (eleve_id)');
        $this->addSql('CREATE INDEX IDX_5E90F6D67ECF78B0 ON inscription (cours_id)');
        $this->addSql('ALTER TABLE paiement ADD inscription_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E5DAC5993 FOREIGN KEY (inscription_id) REFERENCES inscription (id)');
        $this->addSql('CREATE INDEX IDX_B1DC7A1E5DAC5993 ON paiement (inscription_id)');
        $this->addSql('ALTER TABLE responsable ADD tranche_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE responsable ADD CONSTRAINT FK_52520D07B76F6B31 FOREIGN KEY (tranche_id) REFERENCES tranche (id)');
        $this->addSql('CREATE INDEX IDX_52520D07B76F6B31 ON responsable (tranche_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF6526053C59D72');
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF65260A6CC7B2');
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF65260BAB22EE9');
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF65260D60322AC');
        $this->addSql('DROP INDEX IDX_CFF6526053C59D72 ON compte');
        $this->addSql('DROP INDEX IDX_CFF65260A6CC7B2 ON compte');
        $this->addSql('DROP INDEX IDX_CFF65260BAB22EE9 ON compte');
        $this->addSql('DROP INDEX IDX_CFF65260D60322AC ON compte');
        $this->addSql('ALTER TABLE compte DROP responsable_id, DROP eleve_id, DROP professeur_id, DROP role_id');
        $this->addSql('ALTER TABLE contrat_pret DROP FOREIGN KEY FK_1FB84C67A6CC7B2');
        $this->addSql('DROP INDEX IDX_1FB84C67A6CC7B2 ON contrat_pret');
        $this->addSql('ALTER TABLE contrat_pret DROP eleve_id');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CBAB22EE9');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C220C6AD0');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CB3305F4C');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C7C1CAAA9');
        $this->addSql('DROP INDEX IDX_FDCA8C9CBAB22EE9 ON cours');
        $this->addSql('DROP INDEX IDX_FDCA8C9C220C6AD0 ON cours');
        $this->addSql('DROP INDEX IDX_FDCA8C9CB3305F4C ON cours');
        $this->addSql('DROP INDEX IDX_FDCA8C9C7C1CAAA9 ON cours');
        $this->addSql('ALTER TABLE cours DROP professeur_id, DROP jour_id, DROP type_cours_id, DROP type_instrument_id');
        $this->addSql('ALTER TABLE eleve DROP FOREIGN KEY FK_ECA105F753C59D72');
        $this->addSql('DROP INDEX IDX_ECA105F753C59D72 ON eleve');
        $this->addSql('ALTER TABLE eleve DROP responsable_id');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D6A6CC7B2');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D67ECF78B0');
        $this->addSql('DROP INDEX IDX_5E90F6D6A6CC7B2 ON inscription');
        $this->addSql('DROP INDEX IDX_5E90F6D67ECF78B0 ON inscription');
        $this->addSql('ALTER TABLE inscription DROP eleve_id, DROP cours_id');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E5DAC5993');
        $this->addSql('DROP INDEX IDX_B1DC7A1E5DAC5993 ON paiement');
        $this->addSql('ALTER TABLE paiement DROP inscription_id');
        $this->addSql('ALTER TABLE responsable DROP FOREIGN KEY FK_52520D07B76F6B31');
        $this->addSql('DROP INDEX IDX_52520D07B76F6B31 ON responsable');
        $this->addSql('ALTER TABLE responsable DROP tranche_id');
    }
}
