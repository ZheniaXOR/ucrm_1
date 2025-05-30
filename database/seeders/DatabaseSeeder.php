<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tasks;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    /*public function run(): void
    {

        //User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //    'password' => 'password',
        //]);
        Tasks::factory(10)->create();
        //User::factory(5)->has(
        //    
        //)->create();
    }*/

    /*public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        User::factory(5)->has(
            Tasks::factory(10)
        )->create();

    }*/

    public function run(): void
    {
        $this->call([
            EmployeeSeeder::class,
            FilesSeeder::class, 
        ]);
    }   

}
