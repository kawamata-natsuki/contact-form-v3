<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ContactFactory extends Factory
{
    public function definition()
    {
        $categoryids = DB::table('categories')->pluck('id')->toArray();

        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'gender' => $this->faker->randomElement([1, 2, 3]),
            'email' => $this->faker->unique()->safeEmail(),
            'tel' => $this->faker->phoneNumber(),
            'address' => $this->faker->streetAddress(),
            'building' => $this->faker->secondaryAddress(),
            'category_id' => $this->faker->randomElement($categoryids),
            'detail' => $this->faker->realtext(120),
        ];
    }
}
