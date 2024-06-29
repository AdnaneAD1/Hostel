<?php

namespace Database\Seeders;

use App\Models\Room;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $rooms = [
            [
                'name' => 'LUXURY',
                'amount' => 40,
                'description' => 'Our room offers a stunning view of the white sand beach. This room is designed and decorated with modern style and equipped with the most luxurious facilities.',
                'main_image' => 'NewLUXURY/IMG_7054.JPG',
                'facilities' => json_encode([
                    '01 Lit 3 places' => ['icon' => 'fa-solid fa-bed'],
                    'Chambre climatisée et ventilée' => ['icon' => 'fa-solid fa-snowflake'],
                    'Smart TV' => ['icon' => 'fa-solid fa-tv'],
                    '02 Salles de bain' => ['icon' => 'fa-solid fa-sink'],
                    'Système de chauffage' => ['icon' => 'fa-solid fa-temperature-half'],
                    'Cuisine bien équipée' => ['icon' => 'fa-solid fa-utensils'],
                    'Service d\'entretien' => ['icon' => 'fa-solid fa-person-digging'],
                    'Gardiennage 24h/24' => ['icon' => 'fa-solid fa-person-military-pointing'],
                    'Abonnement canal+' => ['icon' => 'fa-solid fa-satellite-dish'],
                    'WiFi' => ['icon' => 'fa-solid fa-wifi'],
                ]),
                'images' => json_encode([
                    'NewLUXURY/IMG_5076.JPG',
                    'NewLUXURY/IMG_5088.JPG',
                    'NewLUXURY/IMG_5090.JPG',
                    'NewLUXURY/IMG_5098.JPG',
                    'NewLUXURY/IMG_5110.JPG',
                    'NewLUXURY/IMG_5113.jpg',
                    'NewLUXURY/IMG_5136.JPG',
                    'NewLUXURY/IMG_7093.jpg',
                    'NewLUXURY/IMG_7097.jpg',
                ])
            ],
            [
                'name' => 'MERRY LAND',
                'amount' => 40,
                'description' => 'Our room offers a stunning view of the white sand beach. This room is designed and decorated with modern style and equipped with the most luxurious facilities.',
                'main_image' => 'NEWMERRYLAND/IMG_9688.JPG',
                'facilities' => json_encode([
                    '01 Lit 3 places' => ['icon' => 'fa-solid fa-bed'],
                    'Chambre climatisée et ventilée' => ['icon' => 'fa-solid fa-snowflake'],
                    'Smart TV' => ['icon' => 'fa-solid fa-tv'],
                    '02 Salles de bain' => ['icon' => 'fa-solid fa-sink'],
                    'Système de chauffage' => ['icon' => 'fa-solid fa-temperature-half'],
                    'Cuisine bien équipée' => ['icon' => 'fa-solid fa-utensils'],
                    'Service d\'entretien' => ['icon' => 'fa-solid fa-person-digging'],
                    'Gardiennage 24h/24' => ['icon' => 'fa-solid fa-person-military-pointing'],
                    'Abonnement canal+' => ['icon' => 'fa-solid fa-satellite-dish'],
                    'WiFi' => ['icon' => 'fa-solid fa-wifi'],
                ]),
                'images' => json_encode([
                    'NEWMERRYLAND/IMG_9664.JPG',
                    'NEWMERRYLAND/IMG_9677.JPG',
                    'NEWMERRYLAND/IMG_9688.JPG',
                    'NEWMERRYLAND/IMG_9733.JPG',
                    'NEWMERRYLAND/IMG_9753.JPG',
                    'NEWMERRYLAND/IMG_9771.JPG',
                    'NEWMERRYLAND/IMG_9773.JPG',
                    'NEWMERRYLAND/IMG_9785.JPG',
                    'NEWMERRYLAND/IMG_9804.JPG',
                ])
            ],
            [
                'name' => 'Les Echos du Bois',
                'amount' => 60,
                'description' => 'Our room offers a stunning view of the white sand beach. This room is designed and decorated with modern style and equipped with the most luxurious facilities.',
                'main_image' => 'Newlesechosdubois/IMG_5554.JPG',
                'facilities' => json_encode([
                    '02 Lit 3 places' => ['icon' => 'fa-solid fa-bed'],
                    'Chambre climatisée et ventilée' => ['icon' => 'fa-solid fa-snowflake'],
                    'Smart TV' => ['icon' => 'fa-solid fa-tv'],
                    '03 Salles de bain' => ['icon' => 'fa-solid fa-sink'],
                    'Système de chauffage' => ['icon' => 'fa-solid fa-temperature-half'],
                    'Cuisine bien équipée' => ['icon' => 'fa-solid fa-utensils'],
                    'Service d\'entretien' => ['icon' => 'fa-solid fa-person-digging'],
                    'Gardiennage 24h/24' => ['icon' => 'fa-solid fa-person-military-pointing'],
                    'Abonnement canal+' => ['icon' => 'fa-solid fa-satellite-dish'],
                    'WiFi' => ['icon' => 'fa-solid fa-wifi'],
                ]),
                'images' => json_encode([
                    'Newlesechosdubois/IMG_5509.JPG',
                    'Newlesechosdubois/IMG_5530.JPG',
                    'Newlesechosdubois/IMG_5546.JPG',
                    'Newlesechosdubois/IMG_5550.JPG',
                    'Newlesechosdubois/IMG_5570.JPG',
                    'Newlesechosdubois/IMG_5575.JPG',
                    'Newlesechosdubois/IMG_5593.JPG',
                    'Newlesechosdubois/IMG_5622.JPG',
                    'Newlesechosdubois/IMG_7273.JPG',
                ])
            ],
            [
                'name' => 'Al Palacio',
                'amount' => 60,
                'description' => 'Our room offers a stunning view of the white sand beach. This room is designed and decorated with modern style and equipped with the most luxurious facilities.',
                'main_image' => 'NewAlpalacio/IMG_5700.JPG',
                'facilities' => json_encode([
                    '02 Lit 3 places' => ['icon' => 'fa-solid fa-bed'],
                    'Chambre climatisée et ventilée' => ['icon' => 'fa-solid fa-snowflake'],
                    'Smart TV' => ['icon' => 'fa-solid fa-tv'],
                    '03 Salles de bain' => ['icon' => 'fa-solid fa-sink'],
                    'Système de chauffage' => ['icon' => 'fa-solid fa-temperature-half'],
                    'Cuisine bien équipée' => ['icon' => 'fa-solid fa-utensils'],
                    'Service d\'entretien' => ['icon' => 'fa-solid fa-person-digging'],
                    'Gardiennage 24h/24' => ['icon' => 'fa-solid fa-person-military-pointing'],
                    'Abonnement canal+' => ['icon' => 'fa-solid fa-satellite-dish'],
                    'WiFi' => ['icon' => 'fa-solid fa-wifi'],
                ]),
                'images' => json_encode([
                    'NewAlpalacio/IMG_5725.JPG',
                    'NewAlpalacio/IMG_5694.JPG',
                    'NewAlpalacio/IMG_5726.JPG',
                    'NewAlpalacio/IMG_7161.JPG',
                    'NewAlpalacio/IMG_7171.JPG',
                    'NewAlpalacio/IMG_7175.JPG',
                    'NewAlpalacio/IMG_7188.JPG',
                    'NewAlpalacio/IMG_7194.JPG',
                    'NewAlpalacio/IMG_7202.JPG',
                ])
            ],
            [
                'name' => 'Hand Love',
                'amount' => 60,
                'description' => 'Our room offers a stunning view of the white sand beach. This room is designed and decorated with modern style and equipped with the most luxurious facilities.',
                'main_image' => 'NewHandlove/IMG_6774.JPG',
                'facilities' => json_encode([
                    '02 Lit 3 places' => ['icon' => 'fa-solid fa-bed'],
                    'Chambre climatisée et ventilée' => ['icon' => 'fa-solid fa-snowflake'],
                    'Smart TV' => ['icon' => 'fa-solid fa-tv'],
                    '03 Salles de bain' => ['icon' => 'fa-solid fa-sink'],
                    'Système de chauffage' => ['icon' => 'fa-solid fa-temperature-half'],
                    'Cuisine bien équipée' => ['icon' => 'fa-solid fa-utensils'],
                    'Service d\'entretien' => ['icon' => 'fa-solid fa-person-digging'],
                    'Gardiennage 24h/24' => ['icon' => 'fa-solid fa-person-military-pointing'],
                    'Abonnement canal+' => ['icon' => 'fa-solid fa-satellite-dish'],
                    'WiFi' => ['icon' => 'fa-solid fa-wifi'],
                ]),
                'images' => json_encode([
                    'NewHandlove/IMG_6777.JPG',
                    'NewHandlove/IMG_6793.JPG',
                    'NewHandlove/IMG_6806.JPG',
                    'NewHandlove/IMG_6807.JPG',
                    'NewHandlove/IMG_6827.JPG',
                    'NewHandlove/IMG_6840.JPG',
                    'NewHandlove/IMG_6849.JPG',

                ])
            ],
            [
                'name' => 'Paradisiaque',
                'amount' => 60,
                'description' => 'Our room offers a stunning view of the white sand beach. This room is designed and decorated with modern style and equipped with the most luxurious facilities.',
                'main_image' => 'Newparadisiaque/IMG_6774.JPG',
                'facilities' => json_encode([
                    '02 Lit 3 places' => ['icon' => 'fa-solid fa-bed'],
                    'Chambre climatisée et ventilée' => ['icon' => 'fa-solid fa-snowflake'],
                    'Smart TV' => ['icon' => 'fa-solid fa-tv'],
                    '03 Salles de bain' => ['icon' => 'fa-solid fa-sink'],
                    'Système de chauffage' => ['icon' => 'fa-solid fa-temperature-half'],
                    'Cuisine bien équipée' => ['icon' => 'fa-solid fa-utensils'],
                    'Service d\'entretien' => ['icon' => 'fa-solid fa-person-digging'],
                    'Gardiennage 24h/24' => ['icon' => 'fa-solid fa-person-military-pointing'],
                    'Abonnement canal+' => ['icon' => 'fa-solid fa-satellite-dish'],
                    'WiFi' => ['icon' => 'fa-solid fa-wifi'],
                ]),
                'images' => json_encode([
                    // 'Newparadisiaque/IMG_6560.JPG',
                    'Newparadisiaque/IMG_6628.JPG',
                    'Newparadisiaque/IMG_6607.JPG',
                    'Newparadisiaque/IMG_6696.JPG',
                    'Newparadisiaque/IMG_6701.JPG',
                    'Newparadisiaque/IMG_6727.JPG',
                    'Newparadisiaque/IMG_6732.JPG',
                    'Newparadisiaque/IMG_6736.JPG',
                ])
            ],
            [
                'name' => 'Hand Love 2',
                'amount' => 60,
                'description' => 'Our room offers a stunning view of the white sand beach. This room is designed and decorated with modern style and equipped with the most luxurious facilities.',
                'main_image' => 'newHandLove2/IMG_6921.JPG',
                'facilities' => json_encode([
                    '02 Lit 3 places' => ['icon' => 'fa-solid fa-bed'],
                    'Chambre climatisée et ventilée' => ['icon' => 'fa-solid fa-snowflake'],
                    'Smart TV' => ['icon' => 'fa-solid fa-tv'],
                    '03 Salles de bain' => ['icon' => 'fa-solid fa-sink'],
                    'Système de chauffage' => ['icon' => 'fa-solid fa-temperature-half'],
                    'Cuisine bien équipée' => ['icon' => 'fa-solid fa-utensils'],
                    'Service d\'entretien' => ['icon' => 'fa-solid fa-person-digging'],
                    'Gardiennage 24h/24' => ['icon' => 'fa-solid fa-person-military-pointing'],
                    'Abonnement canal+' => ['icon' => 'fa-solid fa-satellite-dish'],
                    'WiFi' => ['icon' => 'fa-solid fa-wifi'],
                    'Machine à laver' => ['icon' => 'fa-solid fa-wifi'], // A remplacer
                ]),
                'images' => json_encode([
                    'newHandLove2/IMG_6861.JPG',
                    'newHandLove2/IMG_6888.JPG',
                    'newHandLove2/IMG_6986.JPG',
                    'newHandLove2/IMG_6939.JPG',
                    'newHandLove2/IMG_6994.JPG',
                    'newHandLove2/IMG_7001.JPG',
                    'newHandLove2/IMG_7015.JPG',
                    'newHandLove2/IMG_7026.JPG',
                ])
            ],
            [
                'name' => 'Paquerette',
                'amount' => 55,
                'description' => 'Our room offers a stunning view of the white sand beach. This room is designed and decorated with modern style and equipped with the most luxurious facilities.',
                'main_image' => 'NewPaquerette/IMG_6534.JPG',
                'facilities' => json_encode([
                    '02 Lit 3 places' => ['icon' => 'fa-solid fa-bed'],
                    'Chambre climatisée et ventilée' => ['icon' => 'fa-solid fa-snowflake'],
                    'Smart TV' => ['icon' => 'fa-solid fa-tv'],
                    '03 Salles de bain' => ['icon' => 'fa-solid fa-sink'],
                    'Système de chauffage' => ['icon' => 'fa-solid fa-temperature-half'],
                    'Cuisine bien équipée' => ['icon' => 'fa-solid fa-utensils'],
                    'Service d\'entretien' => ['icon' => 'fa-solid fa-person-digging'],
                    'Gardiennage 24h/24' => ['icon' => 'fa-solid fa-person-military-pointing'],
                    'Abonnement canal+' => ['icon' => 'fa-solid fa-satellite-dish'],
                    'WiFi' => ['icon' => 'fa-solid fa-wifi'],
                ]),
                'images' => json_encode([
                    'NewPaquerette/IMG_6528.JPG',
                    'NewPaquerette/IMG_6416.JPG',
                    'NewPaquerette/IMG_6427.JPG',
                    'NewPaquerette/IMG_6440.JPG',
                    'NewPaquerette/IMG_6460.JPG',
                    'NewPaquerette/IMG_6475.JPG',
                    'NewPaquerette/IMG_6481.JPG',
                    'NewPaquerette/IMG_6502.JPG',
                ])
            ],
            [
                'name' => 'RIVER Of Love',
                'amount' => 35,
                'description' => 'Our room offers a stunning view of the white sand beach. This room is designed and decorated with modern style and equipped with the most luxurious facilities.',
                'main_image' => 'NewRIVEROfLove/IMG_5841.JPG',
                'facilities' => json_encode([
                    '02 Lit 3 places' => ['icon' => 'fa-solid fa-bed'],
                    'Chambre climatisée et ventilée' => ['icon' => 'fa-solid fa-snowflake'],
                    'Smart TV' => ['icon' => 'fa-solid fa-tv'],
                    '03 Salles de bain' => ['icon' => 'fa-solid fa-sink'],
                    'Système de chauffage' => ['icon' => 'fa-solid fa-temperature-half'],
                    'Cuisine bien équipée' => ['icon' => 'fa-solid fa-utensils'],
                    'Service d\'entretien' => ['icon' => 'fa-solid fa-person-digging'],
                    'Gardiennage 24h/24' => ['icon' => 'fa-solid fa-person-military-pointing'],
                    'Abonnement canal+' => ['icon' => 'fa-solid fa-satellite-dish'],
                    'WiFi' => ['icon' => 'fa-solid fa-wifi'],
                ]),
                'images' => json_encode([
                    'NewRIVEROfLove/IMG_5850.JPG',
                    'NewRIVEROfLove/IMG_5851.JPG',
                    'NewRIVEROfLove/IMG_5870.JPG',
                    'NewRIVEROfLove/IMG_5899.JPG',
                    'NewRIVEROfLove/IMG_5880.JPG',
                    'NewRIVEROfLove/IMG_5876.JPG',
                    'NewRIVEROfLove/IMG_5884.JPG',
                ])
            ]
        ];
        DB::table('room')->insert($rooms);
    }
}
