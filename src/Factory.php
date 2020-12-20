<?php

declare(strict_types=1);

namespace Faker\Swedish;

use Faker\Generator;
use Faker\Container\ContainerBuilder;

/**
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class Factory
{
    public static function sweden(): Generator
    {
        $builder = new ContainerBuilder();
        foreach (ContainerBuilder::defaultExtensions() as $id => $definition) {
            $builder->add($definition, $id);
        }

        // Add Swedish specific extension to replace some default ones
        $builder->add(SwedishPerson::class, PersonInterface::class);

        return $builder->build();
    }
}
