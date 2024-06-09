<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Freelance>
 */
class FreelanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone_number' => $this->faker->phoneNumber,
            'email_address' => $this->faker->unique()->safeEmail,
            'profile_picture' => null, // Générez une URL d'image aléatoire si vous avez des images par défaut
            'freelance_pdf' => null, // Générez des fichiers PDF aléatoires si nécessaire
        ];
    }
}
