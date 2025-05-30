<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Files;

class FilesSeeder extends Seeder
{
    public function run(): void
    {
        Files::factory()->count(10)->create();
    }
}