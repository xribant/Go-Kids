<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181011074250 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE controle_classroom (controle_id INT NOT NULL, classroom_id INT NOT NULL, INDEX IDX_83E0E0C1758926A6 (controle_id), INDEX IDX_83E0E0C16278D5A8 (classroom_id), PRIMARY KEY(controle_id, classroom_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE controle_classroom ADD CONSTRAINT FK_83E0E0C1758926A6 FOREIGN KEY (controle_id) REFERENCES controle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE controle_classroom ADD CONSTRAINT FK_83E0E0C16278D5A8 FOREIGN KEY (classroom_id) REFERENCES classroom (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE controle ADD teacher_id INT NOT NULL');
        $this->addSql('ALTER TABLE controle ADD CONSTRAINT FK_E39396E41807E1D FOREIGN KEY (teacher_id) REFERENCES teacher (id)');
        $this->addSql('CREATE INDEX IDX_E39396E41807E1D ON controle (teacher_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE controle_classroom');
        $this->addSql('ALTER TABLE controle DROP FOREIGN KEY FK_E39396E41807E1D');
        $this->addSql('DROP INDEX IDX_E39396E41807E1D ON controle');
        $this->addSql('ALTER TABLE controle DROP teacher_id');
    }
}
