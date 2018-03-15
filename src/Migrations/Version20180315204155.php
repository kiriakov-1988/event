<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180315204155 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE day (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE room (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sponsor (id INT AUTO_INCREMENT NOT NULL, type_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, website VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, INDEX IDX_818CC9D4C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE speaker (id INT AUTO_INCREMENT NOT NULL, full_name VARCHAR(255) NOT NULL, company VARCHAR(255) NOT NULL, position VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lecture (id INT AUTO_INCREMENT NOT NULL, day_id INT DEFAULT NULL, room_id INT DEFAULT NULL, speaker_id INT DEFAULT NULL, type_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, time TIME NOT NULL, duration VARCHAR(255) NOT NULL, INDEX IDX_C16779489C24126 (day_id), INDEX IDX_C167794854177093 (room_id), INDEX IDX_C1677948D04A0F27 (speaker_id), INDEX IDX_C1677948C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, cost INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lecture_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photo_gallery (id INT AUTO_INCREMENT NOT NULL, src VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sponsor_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT FK_818CC9D4C54C8C93 FOREIGN KEY (type_id) REFERENCES sponsor_type (id)');
        $this->addSql('ALTER TABLE lecture ADD CONSTRAINT FK_C16779489C24126 FOREIGN KEY (day_id) REFERENCES day (id)');
        $this->addSql('ALTER TABLE lecture ADD CONSTRAINT FK_C167794854177093 FOREIGN KEY (room_id) REFERENCES room (id)');
        $this->addSql('ALTER TABLE lecture ADD CONSTRAINT FK_C1677948D04A0F27 FOREIGN KEY (speaker_id) REFERENCES speaker (id)');
        $this->addSql('ALTER TABLE lecture ADD CONSTRAINT FK_C1677948C54C8C93 FOREIGN KEY (type_id) REFERENCES lecture_type (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE lecture DROP FOREIGN KEY FK_C16779489C24126');
        $this->addSql('ALTER TABLE lecture DROP FOREIGN KEY FK_C167794854177093');
        $this->addSql('ALTER TABLE lecture DROP FOREIGN KEY FK_C1677948D04A0F27');
        $this->addSql('ALTER TABLE lecture DROP FOREIGN KEY FK_C1677948C54C8C93');
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_818CC9D4C54C8C93');
        $this->addSql('DROP TABLE day');
        $this->addSql('DROP TABLE room');
        $this->addSql('DROP TABLE sponsor');
        $this->addSql('DROP TABLE speaker');
        $this->addSql('DROP TABLE lecture');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('DROP TABLE lecture_type');
        $this->addSql('DROP TABLE photo_gallery');
        $this->addSql('DROP TABLE sponsor_type');
    }
}
