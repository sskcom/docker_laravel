<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class task extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert(
            [
            [
                'name' => 'Task ',
                'description' => 'This is a dummy task',
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Task ',
                'description' => 'This is a dummy task',
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Task ',
                'description' => 'This is a dummy task',
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Task ',
                'description' => 'This is a dummy task',
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Task ',
                'description' => 'This is a dummy task',
                'status_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
            ]
          );
    }
}
