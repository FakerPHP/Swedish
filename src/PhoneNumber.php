<?php

namespace Faker\Swedish;

use Faker\Extension\Helper;
use Faker\Extension\PhoneNumberExtension;

class PhoneNumber implements PhoneNumberExtension
{
    /**
     * @var array Swedish phone number formats
     */
    private $formats = [
        '08-### ### ##',
        '0%#-### ## ##',
        '0%########',
        '+46 (0)%## ### ###',
        '+46(0)%########',
        '+46 %## ### ###',
        '+46%########',

        '08-### ## ##',
        '0%#-## ## ##',
        '0%##-### ##',
        '0%#######',
        '+46 (0)8 ### ## ##',
        '+46 (0)%# ## ## ##',
        '+46 (0)%## ### ##',
        '+46 (0)%#######',
        '+46(0)%#######',
        '+46%#######',

        '08-## ## ##',
        '0%#-### ###',
        '0%#######',
        '+46 (0)%######',
        '+46(0)%######',
        '+46%######',
    ];

    /**
     * @example '555-123-546'
     */
    public function phoneNumber(): string
    {
        return Helper::numerify(Helper::randomElement($this->formats));
    }

    /**
     * @example +27113456789
     */
    public function e164PhoneNumber(): string
    {
        $formats = ['+%############'];

        return Helper::numerify(Helper::randomElement($formats));
    }
}
