<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240425074224 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE galeries ADD image4 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE galeries ADD image5 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE galeries ADD image6 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE galeries ADD image7 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE galeries ADD image8 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE galeries ADD image9 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE galeries ADD image10 VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE galeries DROP image4');
        $this->addSql('ALTER TABLE galeries DROP image5');
        $this->addSql('ALTER TABLE galeries DROP image6');
        $this->addSql('ALTER TABLE galeries DROP image7');
        $this->addSql('ALTER TABLE galeries DROP image8');
        $this->addSql('ALTER TABLE galeries DROP image9');
        $this->addSql('ALTER TABLE galeries DROP image10');
    }
}
