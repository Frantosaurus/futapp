<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonkretniRestauraceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurace = [
            // Asijské restaurace
            [
                'typ_id' => 1,
                'nazev' => 'Chopstix',
                'mapa' => 'https://www.google.com/maps/@49.7453561,13.4044427,14z?entry=ttu', // Odkaz nefunguje, příliš dlouhý
                'adresa' => 'Husova 786/19, 301 00 Plzeň 3-Jižní Předměstí',
                'telefon' => '608 266 779',
            ],
            [
                'typ_id' => 1,
                'nazev' => 'Homy Asian Fusion',
                'mapa' => 'https://www.google.com/maps/@49.7453561,13.4044427,14z?entry=ttu', // Odkaz nefunguje, příliš dlouhý
                'adresa' => 'Bezručova 149/4, 301 00 Plzeň 3-Vnitřní Město',
                'telefon' => '739 026 789',
            ],
            [
                'typ_id' => 1,
                'nazev' => 'King Sheng Restaurant',
                'mapa' => 'https://www.google.com/maps/@49.7453561,13.4044427,14z?entry=ttu', // Odkaz nefunguje, příliš dlouhý
                'adresa' => '5, Otýlie Beníškové 468, 301 00 Plzeň 1',
                'telefon' => '606 232 323',
            ],

            // České restaurace
            [
                'typ_id' => 3,
                'nazev' => 'Lokal',
                'mapa' => 'https://www.google.com/maps/@49.7479511,13.3847885,15z',
                'adresa' => 'Bezručova 315, Vnitřní Město, 301 00 Plzeň 3',
                'telefon' => '778 726 191',
            ],
            [
                'typ_id' => 3,
                'nazev' => 'Hospoda Na Spilce',
                'mapa' => 'https://www.google.com/maps/@49.7465715,13.3747751,17z',
                'adresa' => 'U Prazdroje 64/7, 301 00 Plzeň 3',
                'telefon' => '778 551 179',
            ],
            [
                'typ_id' => 3,
                'nazev' => 'Plzeňka',
                'mapa' => 'https://www.google.com/maps/@49.7491862,13.3771083,17z',
                'adresa' => 'Riegrova 7, 301 00 Plzeň 3',
                'telefon' => '732 175 124',
            ],
            [
                'typ_id' => 3,
                'nazev' => 'Potrefená Husa',
                'mapa' => 'https://www.google.com/maps/@49.7510961,13.3934691,17z',
                'adresa' => 'Martinská 10, Jižní Předměstí, 301 00 Plzeň 1',
                'telefon' => '777 760 146',
            ],

            // Fastfood
            [
                'typ_id' => 6,
                'nazev' => 'KFC Plzeň Area Bory',
                'mapa' => 'https://www.google.com/maps/@49.7470283,13.3839817,17z',
                'adresa' => 'Sukova 2895/25, 301 00 Plzeň 3',
                'telefon' => '725 426 573',
            ],
            [
                'typ_id' => 6,
                'nazev' => "McDonald's",
                'mapa' => 'https://www.google.com/maps/@49.7641262,13.3803211,17z',
                'adresa' => 'Americká 46, 301 50 Plzeň 3',
                'telefon' => '725 424 804',
            ],
            [
                'typ_id' => 6,
                'nazev' => 'New York Burger & Chicken',
                'mapa' => 'https://www.google.com/maps/@49.7453561,13.4044427,14z?entry=ttu', // Odkaz nefunguje, příliš dlouhý
                'adresa' => 'Americká 33, 301 00 Plzeň 3-Jižní Předměstí',
                'telefon' => '725 806 402',
            ],

            // Indické restaurace
            [
                'typ_id' => 2,
                'nazev' => 'Buddha',
                'mapa' => 'https://www.google.com/maps/@49.7416815,13.3877758,17z',
                'adresa' => 'Perlová 84, Vnitřní Město, 301 00 Plzeň 3',
                'telefon' => '777 081 282',
            ],
            [
                'typ_id' => 2,
                'nazev' => 'Ganesh',
                'mapa' => 'https://www.google.com/maps/@49.7423819,13.3858891,17z',
                'adresa' => 'Americká 38, 301 00 Plzeň 3',
                'telefon' => '771 111 234',
            ],
            [
                'typ_id' => 2,
                'nazev' => 'Indická a nepálská restaurace Everest',
                'mapa' => 'https://www.google.com/maps/@49.7532165,13.3857864,15z',
                'adresa' => 'Lochotínská 442/11, 301 00 Plzeň 1',
                'telefon' => '774 048 597',
            ],

            // Italské restaurace
            [
                'typ_id' => 5,
                'nazev' => 'Pizzerie Da Vinci',
                'mapa' => 'https://www.google.com/maps/@49.749137,13.3875067,17z',
                'adresa' => 'Sedláčkova 28, 301 00 Plzeň 3',
                'telefon' => '775 045 490',
            ],
            [
                'typ_id' => 5,
                'nazev' => 'Pizzeria Da Pietro',
                'mapa' => 'https://www.google.com/maps/@49.7446557,13.3824793,17z',
                'adresa' => 'Smetanovy sady 331/4, 301 00 Plzeň 3-Vnitřní Město',
                'telefon' => '608 249 000',
            ],
            [
                'typ_id' => 5,
                'nazev' => 'Pizzerie Mamma Mia',
                'mapa' => 'https://www.google.com/maps/@49.7526121,13.3908811,17z',
                'adresa' => 'B. Smetany, 301 00 Plzeň 3',
                'telefon' => '735 269 000',
            ],

            // Kebab
            [
                'typ_id' => 4,
                'nazev' => 'ALIBABA Kebab',
                'mapa' => 'https://www.google.com/maps/@49.7235362,13.4291669,17z',
                'adresa' => 'Masarykova 1201/75, 312 00 Plzeň 4-Doubravka',
                'telefon' => '601 523 693',
            ],
            [
                'typ_id' => 4,
                'nazev' => 'Alanya Kebab',
                'mapa' => 'https://www.google.com/maps/@49.7470705,13.3845544,17z',
                'adresa' => 'Rooseveltova 9/7, 301 00 Plzeň 3-Vnitřní Město',
                'telefon' => '725 665 801',
            ],
            [
                'typ_id' => 4,
                'nazev' => 'Family kebab',
                'mapa' => 'https://www.google.com/maps/@49.7357082,13.3918004,17z',
                'adresa' => 'Slovanská 1168/36, 326 00 Plzeň 2-Slovany-Východní Předměstí',
                'telefon' => '777 320 652',
            ],

            // Menza
            [
                'typ_id' => 8,
                'nazev' => 'Menza Západočeské univerzity v Plzni - Bory',
                'mapa' => 'https://www.google.com/maps/@49.7351283,13.3836312,17z',
                'adresa' => 'Univerzitní 12, 306 14 Plzeň 3',
                'telefon' => '377 634 880',
            ],
            [
                'typ_id' => 8,
                'nazev' => 'Menza Západočeské univerzity v Plzni - Kollárová',
                'mapa' => 'https://www.google.com/maps/@49.7476339,13.3827402,17z',
                'adresa' => 'Kollárova 1239/19, 301 00 Plzeň 3',
                'telefon' => '377 631 737',
            ],

            // Mexické restaurace
            [
                'typ_id' => 7,
                'nazev' => 'La Chica | Casa Mexicana',
                'mapa' => 'https://www.google.com/maps/@49.743243,13.388059,17z',
                'adresa' => 'Malá 3, 301 00 Plzeň 3',
                'telefon' => '605 397 568',
            ],
            [
                'typ_id' => 7,
                'nazev' => "Pancho's",
                'mapa' => 'https://www.google.com/maps/@49.7531157,13.3848797,17z',
                'adresa' => 'Slovanská 389, 326 00 Plzeň 2-Slovany',
                'telefon' => '732 341 891',
            ],
        ];

        // Vložení dat do databáze
        DB::table('konkretni_restaurace')->insert($restaurace);
    }
}
