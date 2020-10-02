<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Person;
use Faker\Provider\Uuid;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'person_id' => Person::factory(),
            'phone'=>$this->faker->randomNumber(),
            'email'=>$this->faker->unique()->safeEmail(),
            'whatsapp'=>$this->faker->randomNumber()
        ];
    }
}
