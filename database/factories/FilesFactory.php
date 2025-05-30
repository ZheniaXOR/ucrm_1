<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FilesFactory extends Factory
{
    public function definition(): array
    {
        return [
            'file_path' => $this->faker->filePath(),
            'file_type' => $this->faker->fileExtension(),
            'size' => $this->faker->numberBetween(1000, 500000),
            'date_created' => $this->faker->date(),
            'hash' => $this->faker->sha256(),
            'employee_id' => \App\Models\Employee::factory(),
        ];
    }
}
