<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function Laravel\Prompts\password;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'appointments'=>$this->faker->randomElement(['Saturday','Sunday','Monday','Tuesday','wednesday','Thursday','Friday']),
            'email'=>$this->faker->unique()->safeEmail(),
            'email_verified_at'=>now(),
            'password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone'=>$this->faker->phoneNumber(),
            'price'=>$this->faker->randomElement([100,200,300,400,500]),

        ];
    }
}
