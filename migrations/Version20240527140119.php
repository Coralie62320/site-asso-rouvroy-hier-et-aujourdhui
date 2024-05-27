<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240527140119 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE archives_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE celestine_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE galeries_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE histoire_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE monographie_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE patrimoine_civil_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE patrimoine_disparus_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE patrimoine_monuments_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE patrimoine_religieux_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE personnages_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE archives (id INT NOT NULL, nom VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, dates VARCHAR(255) NOT NULL, description TEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN archives.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN archives.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE celestine (id INT NOT NULL, titre VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, contenu TEXT DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, contenu2 TEXT DEFAULT NULL, image2 VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN celestine.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN celestine.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE galeries (id INT NOT NULL, dates VARCHAR(255) DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, description TEXT DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, image2 VARCHAR(255) DEFAULT NULL, image3 VARCHAR(255) DEFAULT NULL, image4 VARCHAR(255) DEFAULT NULL, image5 VARCHAR(255) DEFAULT NULL, image6 VARCHAR(255) DEFAULT NULL, image7 VARCHAR(255) DEFAULT NULL, image8 VARCHAR(255) DEFAULT NULL, image9 VARCHAR(255) DEFAULT NULL, image10 VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN galeries.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN galeries.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE histoire (id INT NOT NULL, titre VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, contenu TEXT DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, contenu2 TEXT DEFAULT NULL, image2 VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN histoire.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN histoire.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE monographie (id INT NOT NULL, titre VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, contenu TEXT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, contenu2 TEXT DEFAULT NULL, image2 VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN monographie.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN monographie.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE patrimoine_civil (id INT NOT NULL, titre VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, contenu TEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN patrimoine_civil.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN patrimoine_civil.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE patrimoine_disparus (id INT NOT NULL, titre VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, contenu TEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN patrimoine_disparus.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN patrimoine_disparus.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE patrimoine_monuments (id INT NOT NULL, titre VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, contenu TEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN patrimoine_monuments.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN patrimoine_monuments.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE patrimoine_religieux (id INT NOT NULL, titre VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, contenu TEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN patrimoine_religieux.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN patrimoine_religieux.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE personnages (id INT NOT NULL, nom VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, dates VARCHAR(255) NOT NULL, description TEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN personnages.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN personnages.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, username VARCHAR(255) DEFAULT NULL, is_verified BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON "user" (email)');
        $this->addSql('CREATE TABLE messenger_messages (id BIGSERIAL NOT NULL, body TEXT NOT NULL, headers TEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, available_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, delivered_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
        $this->addSql('COMMENT ON COLUMN messenger_messages.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN messenger_messages.available_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN messenger_messages.delivered_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE OR REPLACE FUNCTION notify_messenger_messages() RETURNS TRIGGER AS $$
            BEGIN
                PERFORM pg_notify(\'messenger_messages\', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$ LANGUAGE plpgsql;');
        $this->addSql('DROP TRIGGER IF EXISTS notify_trigger ON messenger_messages;');
        $this->addSql('CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON messenger_messages FOR EACH ROW EXECUTE PROCEDURE notify_messenger_messages();');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE archives_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE celestine_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE galeries_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE histoire_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE monographie_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE patrimoine_civil_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE patrimoine_disparus_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE patrimoine_monuments_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE patrimoine_religieux_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE personnages_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP TABLE archives');
        $this->addSql('DROP TABLE celestine');
        $this->addSql('DROP TABLE galeries');
        $this->addSql('DROP TABLE histoire');
        $this->addSql('DROP TABLE monographie');
        $this->addSql('DROP TABLE patrimoine_civil');
        $this->addSql('DROP TABLE patrimoine_disparus');
        $this->addSql('DROP TABLE patrimoine_monuments');
        $this->addSql('DROP TABLE patrimoine_religieux');
        $this->addSql('DROP TABLE personnages');
        $this->addSql('DROP TABLE "user"');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
