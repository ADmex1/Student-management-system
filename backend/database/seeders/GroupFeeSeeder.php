<?php

namespace Database\Seeders;
use App\Models\GroupFee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupFeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            GroupFee::factory()->count(8)->create();
    }
}
