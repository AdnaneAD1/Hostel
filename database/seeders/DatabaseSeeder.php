<?php

namespace Database\Seeders;

use App\Models\Room;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Room::create([
            'name' => 'STUDIO',
            'amount' => 25,
            'description' => 'Our room offers a stunning view of the white sand beach. This room is designed and decorated with modern style and equipped with the most luxurious facilities.',
            'main_image' => 'single-property.jpg',
            'facilities' => json_encode([
                'lit' => ['icon' => 'fa-solid fa-bed'],
                'chambre climatisée et ventilée' => ['icon' =>'fa-solid fa-fan'],
                'smart TV'=> ['icon' =>'fa-solid fa-tv'],
                'salles de bain' => ['icon' =>'fa-solid fa-sink'],
                'système de chauffage'=> ['icon' =>'fa-solid fa-temperature-half'],
                'cuisine bien équipée'=> ['icon' =>'fa-solid fa-kitchen-set'],
                'service d\'entretien'=> ['icon' =>'fa-solid fa-person-digging'],
                'gardiennage24h/24'=> ['icon' =>'fa-solid fa-person-military-pointing'],
                'abonnement canal+'=> ['icon' =>'fa-solid fa-satellite-dish'],
                'WiFi'=> ['icon' =>'fa-solid fa-wifi'],
            ]),
            'images' => json_encode([
                'property-01.jpg',
                'property-02.jpg',
                'property-03.jpg'
            ])
        ]);
    }
}
