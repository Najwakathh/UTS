<?php

namespace Database\Seeders;
use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::firstOrCreate([
    'name' => 'Avanza',
    'plate_number' => 'B1234XYZ',
    'price' => 250_000_000
]);

    }
}
