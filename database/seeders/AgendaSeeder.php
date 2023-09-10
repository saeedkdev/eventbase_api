<?php

namespace Database\Seeders;

use App\Models\Agenda;
use App\Models\Attendee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Agenda::factory()
            ->count(10)
            ->has(Attendee::factory())
            ->create();
    }
}
