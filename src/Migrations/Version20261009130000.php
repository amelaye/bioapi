<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Adds the NCBI genetic code table number (transl_table) to the species of triplets : the id of
 * triplet_specie is an auto-increment (echinoderm mitochondrial is 7 there, table 9 at NCBI), so a
 * consumer could not tell which code a row stands for. The existing rows are numbered from their
 * nature ; the genetic codes 24 to 33 that were missing come with the fixtures.
 */
final class Version20261009130000 extends AbstractMigration
{
    private const NCBI_TABLES = [
        'standard' => 1,
        'vertebrate mitochondrial' => 2,
        'yeast mitochondrial' => 3,
        'mold protozoan coelenterate mitochondrial' => 4,
        'invertebrate mitochondrial' => 5,
        'ciliate dasycladacean hexamita nuclear' => 6,
        'echinoderm mitochondrial' => 9,
        'euplotid nuclear' => 10,
        'bacterial plant plastid' => 11,
        'alternative yeast nuclear' => 12,
        'ascidian mitochondria' => 13,
        'flatworm mitochondrial' => 14,
        'blepharisma macronuclear' => 15,
        'chlorophycean mitochondrial' => 16,
        'trematode mitochondrial' => 21,
        'scenedesmus obliquus mitochondrial' => 22,
        'thraustochytrium mitochondrial code' => 23,
    ];

    public function getDescription(): string
    {
        return 'Add triplet_specie.ncbi_table_id and number the existing genetic codes';
    }

    public function up(Schema $schema): void
    {
        // MySQL commits a DDL statement at once : a run that failed after the ALTER is replayed
        // without it, the UPDATEs being harmless to repeat.
        if (!$schema->getTable('triplet_specie')->hasColumn('ncbi_table_id')) {
            $this->addSql('ALTER TABLE triplet_specie ADD ncbi_table_id INT DEFAULT NULL');
        }
        foreach (self::NCBI_TABLES as $sNature => $iTable) {
            $this->addSql('UPDATE triplet_specie SET ncbi_table_id = ' . $iTable . ' WHERE nature = ' . $this->connection->quote($sNature));
        }
    }

    public function down(Schema $schema): void
    {
        if ($schema->getTable('triplet_specie')->hasColumn('ncbi_table_id')) {
            $this->addSql('ALTER TABLE triplet_specie DROP ncbi_table_id');
        }
    }
}
