<?php

namespace Database\Factories;

use App\Models\layanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<layanan>
 */
class layananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_layanan'=>fake()([
                'Cuci Kering',
                'Cuci Setrika',
                'Bed Cover',
                'jas'
            ]),

            'jenis'=>fake()([
                'kiloan',
                'satuan'
            ]),

          
        ];
    }
}
