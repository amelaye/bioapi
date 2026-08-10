<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Converts the columns previously mapped with Doctrine's removed "array" type
 * (PHP serialize() storage) to the "json" type required by Doctrine ORM 3 / DBAL 4:
 * type_iiendonuclease.same_pattern, type_iib_endonuclease.same_pattern,
 * type_iis_endonuclease.same_pattern, triplet_specie.triplets, triplet_specie.triplets_groups.
 */
final class Version20260807140000 extends AbstractMigration
{
    /** @var array<int, array{table: string, columns: string[]}> */
    private const CONVERSIONS = [
        ['table' => 'type_iiendonuclease', 'columns' => ['same_pattern']],
        ['table' => 'type_iib_endonuclease', 'columns' => ['same_pattern']],
        ['table' => 'type_iis_endonuclease', 'columns' => ['same_pattern']],
        ['table' => 'triplet_specie', 'columns' => ['triplets', 'triplets_groups']],
    ];

    public function getDescription(): string
    {
        return 'Convert legacy PHP-serialized "array" columns to JSON (Doctrine ORM 3 / DBAL 4 dropped the "array" type)';
    }

    public function up(Schema $schema): void
    {
        foreach (self::CONVERSIONS as $conversion) {
            foreach ($conversion['columns'] as $column) {
                $this->convertColumn($conversion['table'], $column, 'serialize', 'json');
                $this->connection->executeStatement(sprintf(
                    'ALTER TABLE %s MODIFY %s JSON NOT NULL',
                    $conversion['table'],
                    $column
                ));
            }
        }
    }

    public function down(Schema $schema): void
    {
        foreach (self::CONVERSIONS as $conversion) {
            foreach ($conversion['columns'] as $column) {
                $this->connection->executeStatement(sprintf(
                    'ALTER TABLE %s MODIFY %s LONGTEXT NOT NULL',
                    $conversion['table'],
                    $column
                ));
                $this->convertColumn($conversion['table'], $column, 'json', 'serialize');
            }
        }
    }

    /**
     * @param 'serialize'|'json' $from
     * @param 'serialize'|'json' $to
     */
    private function convertColumn(string $table, string $column, string $from, string $to): void
    {
        $rows = $this->connection->fetchAllAssociative(
            sprintf('SELECT id, %s FROM %s', $column, $table)
        );

        foreach ($rows as $row) {
            $raw = $row[$column];

            $value = $from === 'serialize' ? unserialize($raw) : json_decode($raw, true);

            $this->abortIf(
                $value === null || $value === false,
                sprintf('Could not decode %s.%s for id=%s during %s->%s conversion', $table, $column, $row['id'], $from, $to)
            );

            $encoded = $to === 'json' ? json_encode($value) : serialize($value);

            $this->connection->executeStatement(
                sprintf('UPDATE %s SET %s = :value WHERE id = :id', $table, $column),
                ['value' => $encoded, 'id' => $row['id']]
            );
        }
    }
}
