<?php

namespace Database\Factories;

use App\Models\TypeContact;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TypeContact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => 'email',
            'active' => true
        ];
    }
}
