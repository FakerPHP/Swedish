<?php

namespace Faker\Swedish;

use Faker\Extension\CountryExtension;
use Faker\Extension\Helper;

class Country implements CountryExtension
{
    private $country = [
        'Afghanistan', 'Albanien', 'Algeriet', 'Amerikanska Jungfruöarna', 'Amerikanska Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarktis', 'Antigua och Barbuda', 'Argentina', 'Armenien', 'Aruba', 'Australien', 'Azerbajdzjan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belgien', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnien och Hercegovina', 'Botswana', 'Bouvetön', 'Brasilien', 'Brittiska Indiska oceanöarna', 'Brittiska Jungfruöarna', 'Brunei', 'Bulgarien', 'Burkina Faso', 'Burundi',
        'Caymanöarna', 'Centralafrikanska republiken', 'Chile', 'Colombia', 'Cooköarna', 'Costa Rica', 'Cypern',
        'Danmark', 'Djibouti', 'Dominica', 'Dominikanska republiken',
        'Ecuador', 'Egypten', 'Ekvatorialguinea', 'El Salvador', 'Elfenbenskusten', 'Eritrea', 'Estland', 'Etiopien',
        'Falklandsöarna', 'Fiji', 'Filippinerna', 'Finland', 'Frankrike', 'Franska Guyana', 'Franska Polynesien', 'Franska Sydterritorierna', 'Färöarna', 'Förenade Arabemiraten',
        'Gabon', 'Gambia', 'Georgien', 'Ghana', 'Gibraltar', 'Grekland', 'Grenada', 'Grönland', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard- och McDonaldöarna', 'Honduras', 'Hongkong (S.A.R. Kina)',
        'Indien', 'Indonesien', 'Irak', 'Iran', 'Irland', 'Island', 'Isle of Man', 'Israel', 'Italien',
        'Jamaica', 'Japan', 'Jemen', 'Jersey', 'Jordanien', 'Julön',
        'Kambodja', 'Kamerun', 'Kanada', 'Kap Verde', 'Kazakstan', 'Kenya', 'Kina', 'Kirgizistan', 'Kiribati', 'Kokosöarna', 'Komorerna', 'Kongo-Brazzaville', 'Kongo-Kinshasa', 'Kroatien', 'Kuba', 'Kuwait',
        'Laos', 'Lesotho', 'Lettland', 'Libanon', 'Liberia', 'Libyen', 'Liechtenstein', 'Litauen', 'Luxemburg',
        'Macao (S.A.R. Kina)', 'Madagaskar', 'Makedonien', 'Malawi', 'Malaysia', 'Maldiverna', 'Mali', 'Malta', 'Marocko', 'Marshallöarna', 'Martinique', 'Mauretanien', 'Mauritius', 'Mayotte', 'Mexiko', 'Mikronesien', 'Moldavien', 'Monaco', 'Mongoliet', 'Montenegro', 'Montserrat', 'Moçambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nederländerna', 'Nederländska Antillerna', 'Nepal', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Nordkorea', 'Nordmarianerna', 'Norfolkön', 'Norge', 'Nya Kaledonien', 'Nya Zeeland',
        'Oman',
        'Pakistan', 'Palau', 'Palestinska territoriet', 'Panama', 'Papua Nya Guinea', 'Paraguay', 'Peru', 'Pitcairn', 'Polen', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Rumänien', 'Rwanda', 'Ryssland', 'Réunion',
        'S:t Barthélemy', 'S:t Helena', 'S:t Kitts och Nevis', 'S:t Lucia', 'S:t Martin', 'S:t Pierre och Miquelon', 'S:t Vincent och Grenadinerna', 'Salomonöarna', 'Samoa', 'San Marino', 'Saudiarabien', 'Schweiz', 'Senegal', 'Serbien', 'Serbien och Montenegro', 'Seychellerna', 'Sierra Leone', 'Singapore', 'Slovakien', 'Slovenien', 'Somalia', 'Spanien', 'Sri Lanka', 'Storbritannien', 'Sudan', 'Surinam', 'Svalbard och Jan Mayen', 'Sverige', 'Swaziland', 'Sydafrika', 'Sydgeorgien och Södra Sandwichöarna', 'Sydkorea', 'Syrien', 'São Tomé och Príncipe',
        'Tadzjikistan', 'Taiwan', 'Tanzania', 'Tchad', 'Thailand', 'Tjeckien', 'Togo', 'Tokelau', 'Tonga', 'Trinidad och Tobago', 'Tunisien', 'Turkiet', 'Turkmenistan', 'Turks- och Caicosöarna', 'Tuvalu', 'Tyskland',
        'USA', 'USA:s yttre öar', 'Uganda', 'Ukraina', 'Ungern', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Vatikanstaten', 'Venezuela', 'Vietnam', 'Vitryssland', 'Västsahara', 'Wallis- och Futunaöarna',
        'Zambia', 'Zimbabwe',
        'Åland',
        'Österrike', 'Östtimor',
    ];

    public function country(): string
    {
        return Helper::randomElement($this->country);
    }
}
