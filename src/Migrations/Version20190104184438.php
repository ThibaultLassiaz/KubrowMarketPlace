<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190104184438 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $this->addSql('INSERT INTO kubrow_build values (1, \'Skinny\')');
        $this->addSql('INSERT INTO kubrow_build values (2, \'Athletic\')');
        $this->addSql('INSERT INTO kubrow_build values (3, \'Bulky\')');

        $this->addSql('INSERT INTO kubrow_color (id, name) values (1, \'Gold\')');
        $this->addSql('INSERT INTO kubrow_color (id, name) values (2, \'Red\')');
        $this->addSql('INSERT INTO kubrow_color (id, name) values (3, \'Blue\')');
        $this->addSql('INSERT INTO kubrow_color (id, name) values (4, \'Dark Brown\')');
        $this->addSql('INSERT INTO kubrow_color (id, name) values (5, \'Grey\')');
        $this->addSql('INSERT INTO kubrow_color (id, name) values (6, \'Navy Blue\')');
        $this->addSql('INSERT INTO kubrow_color (id, name) values (7, \'Black\')');
        $this->addSql('INSERT INTO kubrow_color (id, name) values (8, \'Orange\')');
        $this->addSql('INSERT INTO kubrow_color (id, name) values (9, \'Light Blue\')');
        $this->addSql('INSERT INTO kubrow_color (id, name) values (10, \'Purple\')');

        $this->addSql('INSERT INTO kubrow_energy (id, name) values (1, \'Gold\')');
        $this->addSql('INSERT INTO kubrow_energy (id, name) values (2, \'Red\')');
        $this->addSql('INSERT INTO kubrow_energy (id, name) values (3, \'Blue\')');
        $this->addSql('INSERT INTO kubrow_energy (id, name) values (4, \'Liliac\')');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DELETE FROM kubrow_build');
        $this->addSql('DELETE FROM kubrow_color');
        $this->addSql('DELETE FROM kubrow_energy');
    }
}
