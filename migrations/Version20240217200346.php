<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240217200346 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE airport (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservationvol (id INT AUTO_INCREMENT NOT NULL, vol_id INT DEFAULT NULL, total_price DOUBLE PRECISION NOT NULL, INDEX IDX_D72FC53C9F2BFB7A (vol_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vol (id INT AUTO_INCREMENT NOT NULL, airport_depart INT DEFAULT NULL, airport_arrive INT DEFAULT NULL, volclass_id INT DEFAULT NULL, compagnie_aerienne VARCHAR(255) NOT NULL, heure_depart DATETIME NOT NULL, heure_arrive DATETIME NOT NULL, escale TINYINT(1) NOT NULL, disponible TINYINT(1) NOT NULL, INDEX IDX_95C97EBD69E2287 (airport_depart), INDEX IDX_95C97EBFE558463 (airport_arrive), INDEX IDX_95C97EB6889D068 (volclass_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE volclass (id INT AUTO_INCREMENT NOT NULL, class_name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, ticket_number INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservationvol ADD CONSTRAINT FK_D72FC53C9F2BFB7A FOREIGN KEY (vol_id) REFERENCES vol (id)');
        $this->addSql('ALTER TABLE vol ADD CONSTRAINT FK_95C97EBD69E2287 FOREIGN KEY (airport_depart) REFERENCES airport (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vol ADD CONSTRAINT FK_95C97EBFE558463 FOREIGN KEY (airport_arrive) REFERENCES airport (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vol ADD CONSTRAINT FK_95C97EB6889D068 FOREIGN KEY (volclass_id) REFERENCES volclass (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservationvol DROP FOREIGN KEY FK_D72FC53C9F2BFB7A');
        $this->addSql('ALTER TABLE vol DROP FOREIGN KEY FK_95C97EBD69E2287');
        $this->addSql('ALTER TABLE vol DROP FOREIGN KEY FK_95C97EBFE558463');
        $this->addSql('ALTER TABLE vol DROP FOREIGN KEY FK_95C97EB6889D068');
        $this->addSql('DROP TABLE airport');
        $this->addSql('DROP TABLE reservationvol');
        $this->addSql('DROP TABLE vol');
        $this->addSql('DROP TABLE volclass');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
