<?php

declare(strict_types=1);

namespace Faker\Swedish;


use Faker\Extension\ContainerBuilder;
use Faker\Generator;
use Faker\Extension;

class Factory
{
    public static function sweden(): Generator
    {
        $builder = new Extension\ContainerBuilder();

        foreach (Extension\ContainerBuilder::defaultExtensions() as $id => $definition) {
            $builder->add($definition, $id);
        }

        // Add Swedish specific extension to replace some default ones
        $builder->add(Address::class, Extension\AddressExtension::class);
        $builder->add(Company::class, Extension\CompanyExtension::class);
        $builder->add(Country::class, Extension\CountryExtension::class);
        $builder->add(Person::class, Extension\PersonExtension::class);
        $builder->add(PhoneNumber::class, Extension\PhoneNumberExtension::class);

        $builder->add(Address::class);
        $builder->add(Company::class);
        $builder->add(Country::class);
        $builder->add(Person::class);
        $builder->add(PhoneNumber::class);
        $builder->add(Municipality::class);

        return new Generator($builder->build());
    }
}
