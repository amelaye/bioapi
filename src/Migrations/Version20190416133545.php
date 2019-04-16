<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190416133545 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE element (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, weight VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vendor (id VARCHAR(255) NOT NULL, vendor VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_iis_endonucleolase (id VARCHAR(255) NOT NULL, same_pattern LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', recognition_pattern VARCHAR(255) NOT NULL, computing_pattern VARCHAR(255) NOT NULL, length_recognition_pattern INT NOT NULL, cleavage_pos_upper INT NOT NULL, cleavage_pos_lower INT NOT NULL, nb_non_nbases INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE amino (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, name1letter VARCHAR(255) NOT NULL, name3letters VARCHAR(255) NOT NULL, weight1 VARCHAR(255) NOT NULL, weight2 VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nucleotid (id INT AUTO_INCREMENT NOT NULL, letter VARCHAR(255) NOT NULL, complement VARCHAR(255) NOT NULL, nature VARCHAR(255) NOT NULL, weigth VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_iiendonucleolase (id VARCHAR(255) NOT NULL, same_pattern LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', recognition_pattern VARCHAR(255) NOT NULL, computing_pattern VARCHAR(255) NOT NULL, length_recognition_pattern INT NOT NULL, cleavage_pos_upper INT NOT NULL, cleavage_pos_lower INT NOT NULL, nb_non_nbases INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_iib_endonucleolase (id VARCHAR(255) NOT NULL, same_pattern LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', recognition_pattern VARCHAR(255) NOT NULL, computing_pattern LONGTEXT NOT NULL, length_recognition_pattern INT NOT NULL, cleavage_pos_upper INT NOT NULL, cleavage_pos_lower INT NOT NULL, nb_non_nbases INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE element');
        $this->addSql('DROP TABLE vendor');
        $this->addSql('DROP TABLE type_iis_endonucleolase');
        $this->addSql('DROP TABLE amino');
        $this->addSql('DROP TABLE nucleotid');
        $this->addSql('DROP TABLE type_iiendonucleolase');
        $this->addSql('DROP TABLE type_iib_endonucleolase');
    }
}
