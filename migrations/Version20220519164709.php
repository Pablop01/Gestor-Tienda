<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220519164709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articulos ADD precio_compra DOUBLE PRECISION NOT NULL, ADD margen DOUBLE PRECISION NOT NULL, CHANGE foto foto LONGBLOB NOT NULL');
        $this->addSql('ALTER TABLE lineas_ticket ADD cantidad INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articulos DROP precio_compra, DROP margen, CHANGE foto foto BLOB NOT NULL');
        $this->addSql('ALTER TABLE lineas_ticket DROP cantidad');
    }
}
