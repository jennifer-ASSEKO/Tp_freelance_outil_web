<?php

namespace Database\Seeders;


use App\Models\Freelance;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FreelanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Freelance::factory()->count(10)->create();
    }
}
