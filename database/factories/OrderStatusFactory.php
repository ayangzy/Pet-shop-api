<?php

namespace Database\Factories;

use App\Models\OrderStatus;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderStatusFactory extends Factory
{
      /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderStatus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => Str::uuid(),
            'title' => $this->faker->randomElement(['pending_payment', 'paid', 'shipped', 'cancelled', 'open'])
        ];
    }
}
