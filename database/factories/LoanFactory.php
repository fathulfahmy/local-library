<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => fake()->numberBetween(1, 300),
            'member_id' => fake()->numberBetween(1, 50),
            // borrow from january untill february
            'borrowingDate' => fake()->dateTimeBetween('2024-01-01', '2024-02-01')->format('d/m/Y'),
            // return from march untill april
            'returnDate' => fake()->dateTimeBetween('2024-03-01', '2024-04-01')->format('d/m/Y'),
        ];
    }
}
