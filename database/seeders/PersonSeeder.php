<?php

namespace Database\Seeders;

use App\Models\Person;
use Database\Factories\PersonFactory;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::factory(50)->create();
    }
}
