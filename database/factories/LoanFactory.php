<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\User;
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
        $user = User::factory()->create();
        $item = Item::factory()->create();

        return [
            'user_id' => $user->id,
            'item_id' => $item->id,
            'loan_date' => $this->faker->date(),
            'return_date_expected' => $this->faker->date(),
            'status' => 'borrowed',
            'borrower_name' => $this->faker->name,
            'borrower_class' => $this->faker->randomElement(['XI UPW 2', 'X ULP 1', 'XII OTP 3', 'XI AKL 5', 'X PM 2', 'X BR 1']),
            'purpose' => $this->faker->sentence,
        ];
    }
}
