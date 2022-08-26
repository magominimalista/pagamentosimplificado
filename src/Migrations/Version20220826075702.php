<?php

declare(strict_types=1);

namespace Src\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220826075702 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE account (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, users_id INTEGER DEFAULT NULL, balance NUMERIC(10, 2) NOT NULL, updated_at DATETIME NOT NULL, CONSTRAINT FK_7D3656A467B3B43D FOREIGN KEY (users_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7D3656A467B3B43D ON account (users_id)');
        $this->addSql('CREATE TABLE transations (id VARCHAR(100) NOT NULL, users_id INTEGER DEFAULT NULL, payee INTEGER NOT NULL, value NUMERIC(10, 2) NOT NULL, created_at DATETIME NOT NULL, transationsType_id INTEGER DEFAULT NULL, PRIMARY KEY(id), CONSTRAINT FK_7C14E02B67B3B43D FOREIGN KEY (users_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_7C14E02B6586ED8D FOREIGN KEY (transationsType_id) REFERENCES transations_type (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_7C14E02B67B3B43D ON transations (users_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7C14E02B6586ED8D ON transations (transationsType_id)');
        $this->addSql('CREATE TABLE transations_type (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, type VARCHAR(10) NOT NULL)');
        $this->addSql('CREATE TABLE users (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(100) NOT NULL, email VARCHAR(100) NOT NULL, cpf VARCHAR(15) NOT NULL, password VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, usersType_id INTEGER DEFAULT NULL, CONSTRAINT FK_1483A5E9FC25DC1C FOREIGN KEY (usersType_id) REFERENCES users_type (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9FC25DC1C ON users (usersType_id)');
        $this->addSql('CREATE TABLE users_type (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, type VARCHAR(10) NOT NULL)');
        $this->addSql('CREATE TABLE validations (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, users_id INTEGER DEFAULT NULL, "key" VARCHAR(255) NOT NULL, active BOOLEAN NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, CONSTRAINT FK_B1122F0F67B3B43D FOREIGN KEY (users_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_B1122F0F67B3B43D ON validations (users_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE account');
        $this->addSql('DROP TABLE transations');
        $this->addSql('DROP TABLE transations_type');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE users_type');
        $this->addSql('DROP TABLE validations');
    }
}
