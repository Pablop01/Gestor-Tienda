<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220503164709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE articulos (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, precio_base DOUBLE PRECISION NOT NULL, iva DOUBLE PRECISION NOT NULL, precio DOUBLE PRECISION NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lineas_ticket (id INT AUTO_INCREMENT NOT NULL, id_ticket_id INT NOT NULL, id_articulo_id INT NOT NULL, INDEX IDX_8192977EF035FBF5 (id_ticket_id), UNIQUE INDEX UNIQ_8192977E35AEE23E (id_articulo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tickets (id INT AUTO_INCREMENT NOT NULL, fecha DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nombre VARCHAR(255) NOT NULL, apellido1 VARCHAR(255) NOT NULL, apellido2 VARCHAR(255) NOT NULL, dni VARCHAR(9) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE lineas_ticket ADD CONSTRAINT FK_8192977EF035FBF5 FOREIGN KEY (id_ticket_id) REFERENCES tickets (id)');
        $this->addSql('ALTER TABLE lineas_ticket ADD CONSTRAINT FK_8192977E35AEE23E FOREIGN KEY (id_articulo_id) REFERENCES articulos (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lineas_ticket DROP FOREIGN KEY FK_8192977E35AEE23E');
        $this->addSql('ALTER TABLE lineas_ticket DROP FOREIGN KEY FK_8192977EF035FBF5');
        $this->addSql('DROP TABLE articulos');
        $this->addSql('DROP TABLE lineas_ticket');
        $this->addSql('DROP TABLE tickets');
        $this->addSql('DROP TABLE `user`');
    }
}
