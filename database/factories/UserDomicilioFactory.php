<?php

namespace Database\Factories;

use App\Models\UserDomicilio;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = UserDomicilio::class;


    public function definition(): array
    {
        static $number = 1;
        return [
            'user_id' => $number++,
            'domicilio' => fake()->address(),
            'numero_exterior' => fake()->buildingNumber(),
            'colonia' => fake()->city(),
            'cp' => fake()->postcode(),
            'ciudad' => fake()->country(),
        ];
    }
}
