<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221221943 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE airport (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, code VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, INDEX IDX_7E91F7C2A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chambre (id INT AUTO_INCREMENT NOT NULL, hotel_id INT DEFAULT NULL, type_chambre VARCHAR(255) NOT NULL, vue_hotel VARCHAR(255) NOT NULL, type_log_hotel VARCHAR(255) NOT NULL, prix_hotel DOUBLE PRECISION NOT NULL, INDEX IDX_C509E4FF3243BB18 (hotel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hotel (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, nom_hotel VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, tel_hotel VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, disc_hotel VARCHAR(255) NOT NULL, date_arr DATE NOT NULL, date_depart DATE NOT NULL, etat_hotel VARCHAR(255) NOT NULL, nb_chambre INT NOT NULL, INDEX IDX_3535ED9A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payment (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, payment_date DATETIME NOT NULL, amount DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme (id INT AUTO_INCREMENT NOT NULL, voyage_id INT DEFAULT NULL, description VARCHAR(255) NOT NULL, datedebut DATE NOT NULL, datefin DATE NOT NULL, prix INT NOT NULL, INDEX IDX_3DDCB9FF68C9E5AF (voyage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_hotel (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, hotel_id INT DEFAULT NULL, payment_id INT DEFAULT NULL, prix_tt DOUBLE PRECISION NOT NULL, INDEX IDX_402C8E7EA76ED395 (user_id), INDEX IDX_402C8E7E3243BB18 (hotel_id), INDEX IDX_402C8E7E4C3A3BB (payment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_voyage (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, voyage_id INT DEFAULT NULL, payment_id INT DEFAULT NULL, numberticket INT NOT NULL, INDEX IDX_776CC0CEA76ED395 (user_id), INDEX IDX_776CC0CE68C9E5AF (voyage_id), INDEX IDX_776CC0CE4C3A3BB (payment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservationvol (id INT AUTO_INCREMENT NOT NULL, vol_id INT DEFAULT NULL, user_id INT NOT NULL, payment_id INT DEFAULT NULL, total_price DOUBLE PRECISION NOT NULL, INDEX IDX_D72FC53C9F2BFB7A (vol_id), INDEX IDX_D72FC53CA76ED395 (user_id), INDEX IDX_D72FC53C4C3A3BB (payment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, numero INT NOT NULL, role VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, codedeverification INT NOT NULL, question VARCHAR(255) NOT NULL, reponse VARCHAR(255) NOT NULL, nouveaumotdepasse VARCHAR(255) NOT NULL, bloquenonbloque VARCHAR(255) NOT NULL, raisondeblocage VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vol (id INT AUTO_INCREMENT NOT NULL, airport_depart INT DEFAULT NULL, airport_arrive INT DEFAULT NULL, volclass_id INT DEFAULT NULL, user_id INT DEFAULT NULL, compagnie_aerienne VARCHAR(255) NOT NULL, heure_depart DATETIME NOT NULL, heure_arrive DATETIME NOT NULL, escale TINYINT(1) NOT NULL, disponible TINYINT(1) NOT NULL, INDEX IDX_95C97EBD69E2287 (airport_depart), INDEX IDX_95C97EBFE558463 (airport_arrive), INDEX IDX_95C97EB6889D068 (volclass_id), INDEX IDX_95C97EBA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE volclass (id INT AUTO_INCREMENT NOT NULL, class_name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, ticket_number INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voyage (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, mois VARCHAR(255) NOT NULL, annee INT NOT NULL, villedepart VARCHAR(255) NOT NULL, destination VARCHAR(255) NOT NULL, INDEX IDX_3F9D8955A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE airport ADD CONSTRAINT FK_7E91F7C2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE chambre ADD CONSTRAINT FK_C509E4FF3243BB18 FOREIGN KEY (hotel_id) REFERENCES hotel (id)');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT FK_3535ED9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE programme ADD CONSTRAINT FK_3DDCB9FF68C9E5AF FOREIGN KEY (voyage_id) REFERENCES voyage (id)');
        $this->addSql('ALTER TABLE reservation_hotel ADD CONSTRAINT FK_402C8E7EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation_hotel ADD CONSTRAINT FK_402C8E7E3243BB18 FOREIGN KEY (hotel_id) REFERENCES hotel (id)');
        $this->addSql('ALTER TABLE reservation_hotel ADD CONSTRAINT FK_402C8E7E4C3A3BB FOREIGN KEY (payment_id) REFERENCES payment (id)');
        $this->addSql('ALTER TABLE reservation_voyage ADD CONSTRAINT FK_776CC0CEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation_voyage ADD CONSTRAINT FK_776CC0CE68C9E5AF FOREIGN KEY (voyage_id) REFERENCES voyage (id)');
        $this->addSql('ALTER TABLE reservation_voyage ADD CONSTRAINT FK_776CC0CE4C3A3BB FOREIGN KEY (payment_id) REFERENCES payment (id)');
        $this->addSql('ALTER TABLE reservationvol ADD CONSTRAINT FK_D72FC53C9F2BFB7A FOREIGN KEY (vol_id) REFERENCES vol (id)');
        $this->addSql('ALTER TABLE reservationvol ADD CONSTRAINT FK_D72FC53CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservationvol ADD CONSTRAINT FK_D72FC53C4C3A3BB FOREIGN KEY (payment_id) REFERENCES payment (id)');
        $this->addSql('ALTER TABLE vol ADD CONSTRAINT FK_95C97EBD69E2287 FOREIGN KEY (airport_depart) REFERENCES airport (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vol ADD CONSTRAINT FK_95C97EBFE558463 FOREIGN KEY (airport_arrive) REFERENCES airport (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vol ADD CONSTRAINT FK_95C97EB6889D068 FOREIGN KEY (volclass_id) REFERENCES volclass (id)');
        $this->addSql('ALTER TABLE vol ADD CONSTRAINT FK_95C97EBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE voyage ADD CONSTRAINT FK_3F9D8955A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE airport DROP FOREIGN KEY FK_7E91F7C2A76ED395');
        $this->addSql('ALTER TABLE chambre DROP FOREIGN KEY FK_C509E4FF3243BB18');
        $this->addSql('ALTER TABLE hotel DROP FOREIGN KEY FK_3535ED9A76ED395');
        $this->addSql('ALTER TABLE programme DROP FOREIGN KEY FK_3DDCB9FF68C9E5AF');
        $this->addSql('ALTER TABLE reservation_hotel DROP FOREIGN KEY FK_402C8E7EA76ED395');
        $this->addSql('ALTER TABLE reservation_hotel DROP FOREIGN KEY FK_402C8E7E3243BB18');
        $this->addSql('ALTER TABLE reservation_hotel DROP FOREIGN KEY FK_402C8E7E4C3A3BB');
        $this->addSql('ALTER TABLE reservation_voyage DROP FOREIGN KEY FK_776CC0CEA76ED395');
        $this->addSql('ALTER TABLE reservation_voyage DROP FOREIGN KEY FK_776CC0CE68C9E5AF');
        $this->addSql('ALTER TABLE reservation_voyage DROP FOREIGN KEY FK_776CC0CE4C3A3BB');
        $this->addSql('ALTER TABLE reservationvol DROP FOREIGN KEY FK_D72FC53C9F2BFB7A');
        $this->addSql('ALTER TABLE reservationvol DROP FOREIGN KEY FK_D72FC53CA76ED395');
        $this->addSql('ALTER TABLE reservationvol DROP FOREIGN KEY FK_D72FC53C4C3A3BB');
        $this->addSql('ALTER TABLE vol DROP FOREIGN KEY FK_95C97EBD69E2287');
        $this->addSql('ALTER TABLE vol DROP FOREIGN KEY FK_95C97EBFE558463');
        $this->addSql('ALTER TABLE vol DROP FOREIGN KEY FK_95C97EB6889D068');
        $this->addSql('ALTER TABLE vol DROP FOREIGN KEY FK_95C97EBA76ED395');
        $this->addSql('ALTER TABLE voyage DROP FOREIGN KEY FK_3F9D8955A76ED395');
        $this->addSql('DROP TABLE airport');
        $this->addSql('DROP TABLE chambre');
        $this->addSql('DROP TABLE hotel');
        $this->addSql('DROP TABLE payment');
        $this->addSql('DROP TABLE programme');
        $this->addSql('DROP TABLE reservation_hotel');
        $this->addSql('DROP TABLE reservation_voyage');
        $this->addSql('DROP TABLE reservationvol');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vol');
        $this->addSql('DROP TABLE volclass');
        $this->addSql('DROP TABLE voyage');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
