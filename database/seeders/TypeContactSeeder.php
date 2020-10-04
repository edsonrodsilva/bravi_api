<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\TypeContact;
use Illuminate\Database\Seeder;

class TypeContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeContact::factory(10)->create();
    }
}
