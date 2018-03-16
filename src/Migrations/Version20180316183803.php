<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180316183803 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sponsor ADD type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT FK_818CC9D4C54C8C93 FOREIGN KEY (type_id) REFERENCES sponsor_type (id)');
        $this->addSql('CREATE INDEX IDX_818CC9D4C54C8C93 ON sponsor (type_id)');
        $this->addSql('ALTER TABLE sponsor_type DROP FOREIGN KEY FK_6C7C14C9FB0F2BBC');
        $this->addSql('DROP INDEX IDX_6C7C14C9FB0F2BBC ON sponsor_type');
        $this->addSql('ALTER TABLE sponsor_type DROP sponsors_id');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_818CC9D4C54C8C93');
        $this->addSql('DROP INDEX IDX_818CC9D4C54C8C93 ON sponsor');
        $this->addSql('ALTER TABLE sponsor DROP type_id');
        $this->addSql('ALTER TABLE sponsor_type ADD sponsors_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sponsor_type ADD CONSTRAINT FK_6C7C14C9FB0F2BBC FOREIGN KEY (sponsors_id) REFERENCES sponsor (id)');
        $this->addSql('CREATE INDEX IDX_6C7C14C9FB0F2BBC ON sponsor_type (sponsors_id)');
    }
}
