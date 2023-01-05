<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // eksternal seeder
        // $this->call([
        // ExampleSeeder::class,
        // ]);

        $tasks = [
                    [
                    'list' => fake()->name(),
                    'mark' => rand(0, 1),
                    ],
                    [
                    'list' => fake()->name(),
                    'mark' => rand(0, 1),
                    ],
                    [
                    'list' => 'hari ini aku hidup sehat',
                    'mark' => rand(0, 1),
                    ]
                 ];
                 foreach ($tasks as $task) {
                     Task::create($task);
                 }
    }
}
