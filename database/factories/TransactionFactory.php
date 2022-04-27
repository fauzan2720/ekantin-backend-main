<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id' => 1,
            'address' => $this->faker->address(),
            'payment' => 'TUNAI',
            'total_price' => $this->faker->biasedNumberBetween(),
            'shipping_price' => 10000,
            'status' => 'PENDING',
        ];
    }
}
