<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240211224023 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cookieconsent_log (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, ip_address VARCHAR(255) NOT NULL, consent_key VARCHAR(255) NOT NULL, cookie_name VARCHAR(255) NOT NULL, cookie_value VARCHAR(1024) NOT NULL, timestamp DATETIME NOT NULL)');
        $this->addSql('CREATE TABLE welcome_message (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, message CLOB NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cookieconsent_log');
        $this->addSql('DROP TABLE welcome_message');
    }
}
