<?php

namespace Database\Seeders;
use App\Models\faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Faculty::factory()->count(8)->create();
    }
}
