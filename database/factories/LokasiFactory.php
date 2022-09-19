<?php

namespace Database\Factories;

use App\Models\Lokasi;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class LokasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lokasi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lokasi' => $this->faker->word(255),
        ];
    }
}
