<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class Users extends Seeder
{
    public function run()
    {
        for($i = 0 ; $i < 100; $i++){
        $faker = \Faker\Factory::create();
        $data = [
            'name' => $faker->name,
            'address' => $faker->address,
            'email' => $faker->email,
            'created_at' => Time::createFromTimestamp($faker->unixTime()),
            'updated_at' => Time::createFromTimestamp($faker->unixTime())
        ];

        $this->db->table('users')->insertBatch($data);
    }
    }
}
