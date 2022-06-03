<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220521130412 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lineas_ticket DROP FOREIGN KEY FK_8192977E35AEE23E');
        $this->addSql('ALTER TABLE lineas_ticket DROP FOREIGN KEY FK_8192977EF035FBF5');
        $this->addSql('DROP INDEX UNIQ_8192977E35AEE23E ON lineas_ticket');
        $this->addSql('DROP INDEX IDX_8192977EF035FBF5 ON lineas_ticket');
        $this->addSql('ALTER TABLE lineas_ticket ADD id_ticket INT NOT NULL, ADD id_articulo INT NOT NULL, DROP id_ticket_id, DROP id_articulo_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lineas_ticket ADD id_ticket_id INT NOT NULL, ADD id_articulo_id INT NOT NULL, DROP id_ticket, DROP id_articulo');
        $this->addSql('ALTER TABLE lineas_ticket ADD CONSTRAINT FK_8192977E35AEE23E FOREIGN KEY (id_articulo_id) REFERENCES articulos (id)');
        $this->addSql('ALTER TABLE lineas_ticket ADD CONSTRAINT FK_8192977EF035FBF5 FOREIGN KEY (id_ticket_id) REFERENCES tickets (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8192977E35AEE23E ON lineas_ticket (id_articulo_id)');
        $this->addSql('CREATE INDEX IDX_8192977EF035FBF5 ON lineas_ticket (id_ticket_id)');
    }
}
