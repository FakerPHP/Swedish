<?php

namespace Faker\Test\Swedish;

use Faker\Calculator\Luhn;
use Faker\Swedish\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    public function provideSeedAndExpectedReturn()
    {
        return [
            ['720727'],
            ['710414'],
            ['591012'],
            ['180307'],
            ['820904'],
        ];
    }

    /**
     * @dataProvider provideSeedAndExpectedReturn
     */
    public function testPersonalIdentityNumberUsesBirthDateIfProvided($birthdate)
    {
        $ext = new Person();
        $output = $ext->personalIdentityNumber(\DateTime::createFromFormat('ymd', $birthdate));
        self::assertNotEmpty($output);
        self::assertMatchesRegularExpression('|^'.$birthdate.'\-[0-9][0-9][0-9][0-9]$|', $output);

        $pin = str_replace('-', '', $output);
        self::assertTrue(Luhn::isValid($pin));
    }

    public function testPersonalIdentityNumberGeneratesOddValuesForMales()
    {
        $ext = new Person();
        $pin = $ext->personalIdentityNumber(null, 'male');
        self::assertEquals(1, $pin[9] % 2);
    }

    public function testPersonalIdentityNumberGeneratesEvenValuesForFemales()
    {
        $ext = new Person();
        $pin = $ext->personalIdentityNumber(null, 'female');
        self::assertEquals(0, $pin[9] % 2);
    }
}
