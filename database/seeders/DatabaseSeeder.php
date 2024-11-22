<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\GuardianInfo;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StudentsSeeder::class,
            GuardiansInfoSeeder::class,
        ]);
        // Student::factory(350)->create();
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
