<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Widens the amino acid weight columns from DECIMAL(5,2) to DECIMAL(8,4): the weights are now
 * Biopython's average masses (Bio.Data.IUPACData.protein_weights), which carry four decimals,
 * so that BioPHP's molecular weights match Bio.SeqUtils.molecular_weight exactly.
 * MODIFY is idempotent, so a retry after a partial run is safe. The values themselves come with
 * the fixtures.
 */
final class Version20261009120000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Widen amino.weight1, amino.weight2 and amino.residue_mol_weight to DECIMAL(8,4)';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE amino MODIFY weight1 NUMERIC(8, 4) NOT NULL, MODIFY weight2 NUMERIC(8, 4) NOT NULL, MODIFY residue_mol_weight NUMERIC(8, 4) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE amino MODIFY weight1 NUMERIC(5, 2) NOT NULL, MODIFY weight2 NUMERIC(5, 2) NOT NULL, MODIFY residue_mol_weight NUMERIC(5, 2) DEFAULT NULL');
    }
}
