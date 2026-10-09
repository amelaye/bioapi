<?php
/**
 * Gives the fixtures of the entities with an auto-increment id the id they have to keep
 * Created 9 October 2026
 */

namespace App\DataFixtures;

use Doctrine\ORM\Id\AssignedGenerator;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\Persistence\ObjectManager;

/**
 * An auto-increment id goes on from the last one used : the purge that precedes a reload deletes the
 * rows but leaves that counter alone, so the elements came back as 7 to 12 and biophp, which asks
 * for the water as /elements/6, got a 404. The fixtures of these entities number their rows
 * themselves, in the order they persist them, whatever the counter says.
 * @package App\DataFixtures
 */
trait AssignsFixedIds
{
    /**
     * Persists the entity under the given id
     * @param   ObjectManager   $manager
     * @param   object          $entity
     * @param   int             $iId        The id the row has to get
     */
    private function persistWithId(ObjectManager $manager, object $entity, int $iId): void
    {
        $metadata = $manager->getClassMetadata(get_class($entity));
        $metadata->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_NONE);
        $metadata->setIdGenerator(new AssignedGenerator());

        $entity->setId($iId);
        $manager->persist($entity);
    }
}
