<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221202082111 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accessoire (id INT AUTO_INCREMENT NOT NULL, instrument_id INT DEFAULT NULL, libelle VARCHAR(50) NOT NULL, INDEX IDX_8FD026ACF11D9C (instrument_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE classe_instrument (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrat_pret (id INT AUTO_INCREMENT NOT NULL, eleve_id INT DEFAULT NULL, instrument_id INT DEFAULT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, etat_detaille_debut VARCHAR(255) NOT NULL, etat_detaille_retour VARCHAR(255) DEFAULT NULL, INDEX IDX_1FB84C67A6CC7B2 (eleve_id), INDEX IDX_1FB84C67CF11D9C (instrument_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE couleur_instrument (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, professeur_id INT DEFAULT NULL, jour_id INT DEFAULT NULL, type_cours_id INT DEFAULT NULL, type_instrument_id INT DEFAULT NULL, agemini INT NOT NULL, agemax INT NOT NULL, heure_debut TIME NOT NULL, heure_fin TIME NOT NULL, nb_places INT DEFAULT NULL, INDEX IDX_FDCA8C9CBAB22EE9 (professeur_id), INDEX IDX_FDCA8C9C220C6AD0 (jour_id), INDEX IDX_FDCA8C9CB3305F4C (type_cours_id), INDEX IDX_FDCA8C9C7C1CAAA9 (type_instrument_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE eleve (id INT AUTO_INCREMENT NOT NULL, responsable_id INT DEFAULT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, num_rue INT DEFAULT NULL, rue VARCHAR(50) DEFAULT NULL, code_postale INT DEFAULT NULL, ville VARCHAR(100) DEFAULT NULL, telephone INT DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, INDEX IDX_ECA105F753C59D72 (responsable_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enseigne (id INT AUTO_INCREMENT NOT NULL, professeur_id INT DEFAULT NULL, type_instrument_id INT DEFAULT NULL, INDEX IDX_37D4778EBAB22EE9 (professeur_id), INDEX IDX_37D4778E7C1CAAA9 (type_instrument_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscription (id INT AUTO_INCREMENT NOT NULL, eleve_id INT NOT NULL, cours_id INT DEFAULT NULL, nombre_de_paiement INT DEFAULT NULL, date_inscription DATE NOT NULL, INDEX IDX_5E90F6D6A6CC7B2 (eleve_id), INDEX IDX_5E90F6D67ECF78B0 (cours_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE instrument (id INT AUTO_INCREMENT NOT NULL, type_instrument_id INT DEFAULT NULL, marque_instrument_id INT DEFAULT NULL, modele_instrument_id INT DEFAULT NULL, intitule VARCHAR(50) NOT NULL, date_achat DATE NOT NULL, numeroserie VARCHAR(10) NOT NULL, couleur VARCHAR(50) NOT NULL, utilisation VARCHAR(50) DEFAULT NULL, prix_achat DOUBLE PRECISION DEFAULT NULL, chemin_image VARCHAR(150) DEFAULT NULL, INDEX IDX_3CBF69DD7C1CAAA9 (type_instrument_id), INDEX IDX_3CBF69DDA3DC3CB0 (marque_instrument_id), INDEX IDX_3CBF69DD487B4449 (modele_instrument_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inter_pret (id INT AUTO_INCREMENT NOT NULL, contrat_pret_id INT DEFAULT NULL, intervention_id INT DEFAULT NULL, quotite INT NOT NULL, INDEX IDX_244C2367B2AF233D (contrat_pret_id), INDEX IDX_244C23678EAE3863 (intervention_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE intervention (id INT AUTO_INCREMENT NOT NULL, professionel_id INT DEFAULT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, descriptif VARCHAR(150) NOT NULL, prix DOUBLE PRECISION NOT NULL, INDEX IDX_D11814ABF837D6C3 (professionel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jour (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE marque_instrument (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE metier (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modele_instrument (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, inscription_id INT DEFAULT NULL, montant DOUBLE PRECISION NOT NULL, date_paiement DATE NOT NULL, INDEX IDX_B1DC7A1E5DAC5993 (inscription_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE professeur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, rue VARCHAR(100) DEFAULT NULL, code_postale INT DEFAULT NULL, ville VARCHAR(100) DEFAULT NULL, email VARCHAR(50) DEFAULT NULL, telephone VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE professionnel (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, num_rue INT NOT NULL, rue VARCHAR(150) NOT NULL, code_postal INT NOT NULL, ville VARCHAR(50) NOT NULL, telephone INT NOT NULL, email VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE responsable (id INT AUTO_INCREMENT NOT NULL, tranche_id INT DEFAULT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) DEFAULT NULL, num_rue INT NOT NULL, rue VARCHAR(150) NOT NULL, ville VARCHAR(50) DEFAULT NULL, code_postal INT NOT NULL, email VARCHAR(50) DEFAULT NULL, telephone VARCHAR(255) NOT NULL, INDEX IDX_52520D07B76F6B31 (tranche_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tarif (id INT AUTO_INCREMENT NOT NULL, type_cours_id INT DEFAULT NULL, tranche_id INT DEFAULT NULL, montant DOUBLE PRECISION NOT NULL, INDEX IDX_E7189C9B3305F4C (type_cours_id), INDEX IDX_E7189C9B76F6B31 (tranche_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tranche (id INT AUTO_INCREMENT NOT NULL, quotientmin INT NOT NULL, quotientmax INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_cours (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_instrument (id INT AUTO_INCREMENT NOT NULL, classe_instrument_id INT DEFAULT NULL, libelle VARCHAR(50) NOT NULL, INDEX IDX_21BCBFF8CE879FB1 (classe_instrument_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE accessoire ADD CONSTRAINT FK_8FD026ACF11D9C FOREIGN KEY (instrument_id) REFERENCES instrument (id)');
        $this->addSql('ALTER TABLE contrat_pret ADD CONSTRAINT FK_1FB84C67A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE contrat_pret ADD CONSTRAINT FK_1FB84C67CF11D9C FOREIGN KEY (instrument_id) REFERENCES instrument (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CBAB22EE9 FOREIGN KEY (professeur_id) REFERENCES professeur (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C220C6AD0 FOREIGN KEY (jour_id) REFERENCES jour (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CB3305F4C FOREIGN KEY (type_cours_id) REFERENCES type_cours (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C7C1CAAA9 FOREIGN KEY (type_instrument_id) REFERENCES type_instrument (id)');
        $this->addSql('ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F753C59D72 FOREIGN KEY (responsable_id) REFERENCES responsable (id)');
        $this->addSql('ALTER TABLE enseigne ADD CONSTRAINT FK_37D4778EBAB22EE9 FOREIGN KEY (professeur_id) REFERENCES professeur (id)');
        $this->addSql('ALTER TABLE enseigne ADD CONSTRAINT FK_37D4778E7C1CAAA9 FOREIGN KEY (type_instrument_id) REFERENCES type_instrument (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D6A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE inscription ADD CONSTRAINT FK_5E90F6D67ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE instrument ADD CONSTRAINT FK_3CBF69DD7C1CAAA9 FOREIGN KEY (type_instrument_id) REFERENCES type_instrument (id)');
        $this->addSql('ALTER TABLE instrument ADD CONSTRAINT FK_3CBF69DDA3DC3CB0 FOREIGN KEY (marque_instrument_id) REFERENCES marque_instrument (id)');
        $this->addSql('ALTER TABLE instrument ADD CONSTRAINT FK_3CBF69DD487B4449 FOREIGN KEY (modele_instrument_id) REFERENCES modele_instrument (id)');
        $this->addSql('ALTER TABLE inter_pret ADD CONSTRAINT FK_244C2367B2AF233D FOREIGN KEY (contrat_pret_id) REFERENCES contrat_pret (id)');
        $this->addSql('ALTER TABLE inter_pret ADD CONSTRAINT FK_244C23678EAE3863 FOREIGN KEY (intervention_id) REFERENCES intervention (id)');
        $this->addSql('ALTER TABLE intervention ADD CONSTRAINT FK_D11814ABF837D6C3 FOREIGN KEY (professionel_id) REFERENCES professionnel (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E5DAC5993 FOREIGN KEY (inscription_id) REFERENCES inscription (id)');
        $this->addSql('ALTER TABLE responsable ADD CONSTRAINT FK_52520D07B76F6B31 FOREIGN KEY (tranche_id) REFERENCES tranche (id)');
        $this->addSql('ALTER TABLE tarif ADD CONSTRAINT FK_E7189C9B3305F4C FOREIGN KEY (type_cours_id) REFERENCES type_cours (id)');
        $this->addSql('ALTER TABLE tarif ADD CONSTRAINT FK_E7189C9B76F6B31 FOREIGN KEY (tranche_id) REFERENCES tranche (id)');
        $this->addSql('ALTER TABLE type_instrument ADD CONSTRAINT FK_21BCBFF8CE879FB1 FOREIGN KEY (classe_instrument_id) REFERENCES classe_instrument (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accessoire DROP FOREIGN KEY FK_8FD026ACF11D9C');
        $this->addSql('ALTER TABLE contrat_pret DROP FOREIGN KEY FK_1FB84C67A6CC7B2');
        $this->addSql('ALTER TABLE contrat_pret DROP FOREIGN KEY FK_1FB84C67CF11D9C');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CBAB22EE9');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C220C6AD0');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CB3305F4C');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C7C1CAAA9');
        $this->addSql('ALTER TABLE eleve DROP FOREIGN KEY FK_ECA105F753C59D72');
        $this->addSql('ALTER TABLE enseigne DROP FOREIGN KEY FK_37D4778EBAB22EE9');
        $this->addSql('ALTER TABLE enseigne DROP FOREIGN KEY FK_37D4778E7C1CAAA9');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D6A6CC7B2');
        $this->addSql('ALTER TABLE inscription DROP FOREIGN KEY FK_5E90F6D67ECF78B0');
        $this->addSql('ALTER TABLE instrument DROP FOREIGN KEY FK_3CBF69DD7C1CAAA9');
        $this->addSql('ALTER TABLE instrument DROP FOREIGN KEY FK_3CBF69DDA3DC3CB0');
        $this->addSql('ALTER TABLE instrument DROP FOREIGN KEY FK_3CBF69DD487B4449');
        $this->addSql('ALTER TABLE inter_pret DROP FOREIGN KEY FK_244C2367B2AF233D');
        $this->addSql('ALTER TABLE inter_pret DROP FOREIGN KEY FK_244C23678EAE3863');
        $this->addSql('ALTER TABLE intervention DROP FOREIGN KEY FK_D11814ABF837D6C3');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E5DAC5993');
        $this->addSql('ALTER TABLE responsable DROP FOREIGN KEY FK_52520D07B76F6B31');
        $this->addSql('ALTER TABLE tarif DROP FOREIGN KEY FK_E7189C9B3305F4C');
        $this->addSql('ALTER TABLE tarif DROP FOREIGN KEY FK_E7189C9B76F6B31');
        $this->addSql('ALTER TABLE type_instrument DROP FOREIGN KEY FK_21BCBFF8CE879FB1');
        $this->addSql('DROP TABLE accessoire');
        $this->addSql('DROP TABLE classe_instrument');
        $this->addSql('DROP TABLE contrat_pret');
        $this->addSql('DROP TABLE couleur_instrument');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE eleve');
        $this->addSql('DROP TABLE enseigne');
        $this->addSql('DROP TABLE inscription');
        $this->addSql('DROP TABLE instrument');
        $this->addSql('DROP TABLE inter_pret');
        $this->addSql('DROP TABLE intervention');
        $this->addSql('DROP TABLE jour');
        $this->addSql('DROP TABLE marque_instrument');
        $this->addSql('DROP TABLE metier');
        $this->addSql('DROP TABLE modele_instrument');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE professeur');
        $this->addSql('DROP TABLE professionnel');
        $this->addSql('DROP TABLE responsable');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE tarif');
        $this->addSql('DROP TABLE tranche');
        $this->addSql('DROP TABLE type_cours');
        $this->addSql('DROP TABLE type_instrument');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
