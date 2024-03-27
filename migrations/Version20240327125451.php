<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240327125451 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE airport (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, code VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, INDEX IDX_7E91F7C2A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, type_evenement_id INT DEFAULT NULL, user_id INT DEFAULT NULL, nom_event VARCHAR(255) NOT NULL, adresse_event VARCHAR(255) NOT NULL, nbrticketsdispo INT NOT NULL, datedebut_event DATE NOT NULL, datefinevent DATE NOT NULL, prixentre INT NOT NULL, imageevent VARCHAR(255) NOT NULL, INDEX IDX_3BAE0AA788939516 (type_evenement_id), INDEX IDX_3BAE0AA7A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_event (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, event_id INT DEFAULT NULL, INDEX IDX_78D1DA00A76ED395 (user_id), INDEX IDX_78D1DA0071F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservationvol (id INT AUTO_INCREMENT NOT NULL, vol_id INT DEFAULT NULL, user_id INT DEFAULT NULL, total_price DOUBLE PRECISION NOT NULL, payment_method VARCHAR(255) NOT NULL, INDEX IDX_D72FC53C9F2BFB7A (vol_id), INDEX IDX_D72FC53CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_evenement (id INT AUTO_INCREMENT NOT NULL, nom_type VARCHAR(255) NOT NULL, type_description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, reset_token VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, is_verified TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vol (id INT AUTO_INCREMENT NOT NULL, airport_depart_id INT DEFAULT NULL, airport_arrive_id INT DEFAULT NULL, volclass_id INT DEFAULT NULL, user_id INT DEFAULT NULL, compagnie_aerienne VARCHAR(255) NOT NULL, heure_depart DATETIME NOT NULL, heure_arrive DATETIME NOT NULL, disponible TINYINT(1) NOT NULL, INDEX IDX_95C97EB323E3080 (airport_depart_id), INDEX IDX_95C97EB683E4883 (airport_arrive_id), INDEX IDX_95C97EB6889D068 (volclass_id), INDEX IDX_95C97EBA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE volclass (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, class_name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, ticket_number INT NOT NULL, INDEX IDX_26BC5AD1A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE airport ADD CONSTRAINT FK_7E91F7C2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA788939516 FOREIGN KEY (type_evenement_id) REFERENCES type_evenement (id)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation_event ADD CONSTRAINT FK_78D1DA00A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation_event ADD CONSTRAINT FK_78D1DA0071F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE reservationvol ADD CONSTRAINT FK_D72FC53C9F2BFB7A FOREIGN KEY (vol_id) REFERENCES vol (id)');
        $this->addSql('ALTER TABLE reservationvol ADD CONSTRAINT FK_D72FC53CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE vol ADD CONSTRAINT FK_95C97EB323E3080 FOREIGN KEY (airport_depart_id) REFERENCES airport (id)');
        $this->addSql('ALTER TABLE vol ADD CONSTRAINT FK_95C97EB683E4883 FOREIGN KEY (airport_arrive_id) REFERENCES airport (id)');
        $this->addSql('ALTER TABLE vol ADD CONSTRAINT FK_95C97EB6889D068 FOREIGN KEY (volclass_id) REFERENCES volclass (id)');
        $this->addSql('ALTER TABLE vol ADD CONSTRAINT FK_95C97EBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE volclass ADD CONSTRAINT FK_26BC5AD1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE airport DROP FOREIGN KEY FK_7E91F7C2A76ED395');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA788939516');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7A76ED395');
        $this->addSql('ALTER TABLE reservation_event DROP FOREIGN KEY FK_78D1DA00A76ED395');
        $this->addSql('ALTER TABLE reservation_event DROP FOREIGN KEY FK_78D1DA0071F7E88B');
        $this->addSql('ALTER TABLE reservationvol DROP FOREIGN KEY FK_D72FC53C9F2BFB7A');
        $this->addSql('ALTER TABLE reservationvol DROP FOREIGN KEY FK_D72FC53CA76ED395');
        $this->addSql('ALTER TABLE vol DROP FOREIGN KEY FK_95C97EB323E3080');
        $this->addSql('ALTER TABLE vol DROP FOREIGN KEY FK_95C97EB683E4883');
        $this->addSql('ALTER TABLE vol DROP FOREIGN KEY FK_95C97EB6889D068');
        $this->addSql('ALTER TABLE vol DROP FOREIGN KEY FK_95C97EBA76ED395');
        $this->addSql('ALTER TABLE volclass DROP FOREIGN KEY FK_26BC5AD1A76ED395');
        $this->addSql('DROP TABLE airport');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE reservation_event');
        $this->addSql('DROP TABLE reservationvol');
        $this->addSql('DROP TABLE type_evenement');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vol');
        $this->addSql('DROP TABLE volclass');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
