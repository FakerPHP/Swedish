<?php

namespace Faker\Test\Swedish;


use Faker\Swedish\Municipality;
use PHPUnit\Framework\TestCase;

final class MunicipalityTest extends TestCase
{
    public function testGenerate()
    {
        $ext = new Municipality();
        self::assertNotEmpty($ext->municipality());
    }
}
