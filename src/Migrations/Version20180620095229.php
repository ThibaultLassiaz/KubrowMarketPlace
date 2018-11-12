<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180620095229 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('ALTER TABLE kubrow ADD COLUMN is_sold BOOLEAN DEFAULT \'1\' NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__kubrow AS SELECT id, breed, build, primary_color, secondary_color, tertiary_color, energy_color, pattern, number_of_print_available FROM kubrow');
        $this->addSql('DROP TABLE kubrow');
        $this->addSql('CREATE TABLE kubrow (id INTEGER NOT NULL, breed VARCHAR(25) NOT NULL, build VARCHAR(10) NOT NULL, primary_color VARCHAR(30) NOT NULL, secondary_color VARCHAR(30) NOT NULL, tertiary_color VARCHAR(30) NOT NULL, energy_color VARCHAR(30) NOT NULL, pattern VARCHAR(30) NOT NULL, number_of_print_available INTEGER NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO kubrow (id, breed, build, primary_color, secondary_color, tertiary_color, energy_color, pattern, number_of_print_available) SELECT id, breed, build, primary_color, secondary_color, tertiary_color, energy_color, pattern, number_of_print_available FROM __temp__kubrow');
        $this->addSql('DROP TABLE __temp__kubrow');
    }
}
