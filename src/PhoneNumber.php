<?php

namespace Faker\Swedish;

use Faker\Extension\Extension;
use Faker\Extension\Helper;

class PhoneNumber implements Extension
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
    public function phoneNumber()
    {
        return Helper::numerify(Helper::randomElement($this->formats));
    }

    /**
     * @example +27113456789
     *
     * @return string
     */
    public function e164PhoneNumber()
    {
        $formats = ['+%############'];

        return Helper::numerify(Helper::randomElement($formats));
    }
}
