<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220124135104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activity_logs (
            id BLOB NOT NULL --(DC2Type:uuid),
            "action" CLOB NOT NULL,
            actor_id CLOB DEFAULT NULL,
            actor_name CLOB DEFAULT NULL,
            actor_type CLOB NOT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            subject_data CLOB DEFAULT NULL --(DC2Type:json),
            subject_id CLOB NOT NULL,
            subject_old_data CLOB DEFAULT NULL --(DC2Type:json),
            subject_type CLOB NOT NULL
        )');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE activity_logs');
    }
}
