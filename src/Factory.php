<?php

declare(strict_types=1);

namespace Faker\Swedish;

use Faker\Extension\ContainerBuilder;
use Faker\Generator;

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
        $builder->add(Address::class, AddressInterface::class);
        $builder->add(Company::class, CompanyInterface::class);
        $builder->add(Person::class, PersonInterface::class);
        $builder->add(PhoneNumber::class, PhoneNumberInterface::class);
        $builder->add(Municipality::class);

        return new Generator($builder->build());
    }
}
