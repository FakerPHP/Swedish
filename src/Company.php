<?php

namespace Faker\Swedish;

use Faker\Extension\Extension;
use Faker\Extension\GeneratorAwareExtension;
use Faker\Extension\GeneratorAwareExtensionTrait;
use Faker\Extension\Helper;

class Company implements GeneratorAwareExtension
{
    use GeneratorAwareExtensionTrait;

    private $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{firstName}} {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}}',
        '{{lastName}} och {{lastName}}',
        '{{lastName}} och {{lastName}} {{companySuffix}}'
    ];

    private $companySuffix = ['AB', 'HB'];

    private $jobTitles = ['Automationsingenjör', 'Bagare', 'Digital Designer', 'Ekonom', 'Ekonomichef', 'Elektronikingenjör', 'Försäljare', 'Försäljningschef', 'Innovationsdirektör', 'Investeringsdirektör', 'Journalist', 'Kock', 'Kulturstrateg', 'Läkare', 'Lokförare', 'Mäklare', 'Programmerare', 'Projektledare', 'Sjuksköterska', 'Utvecklare', 'UX Designer', 'Webbutvecklare'];

    /**
     * @example 'Acme Ltd'
     *
     * @return string
     */
    public function company()
    {
        $format = Helper::randomElement($this->formats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Ltd'
     *
     * @return string
     */
    public function companySuffix()
    {
        return Helper::randomElement($this->companySuffix);
    }


    public function jobTitle()
    {
        return Helper::randomElement($this->jobTitles);
    }
}
