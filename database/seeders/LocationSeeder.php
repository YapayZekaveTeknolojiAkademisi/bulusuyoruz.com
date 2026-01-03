<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Process Provinces (il.json)
        $jsonIl = File::get(base_path('il.json'));
        $dataIl = json_decode($jsonIl, true);

        // Find the table data
        $ilTable = collect($dataIl)->firstWhere('name', 'il');
        
        if ($ilTable && isset($ilTable['data'])) {
            $this->command->info('Seeding provinces...');
            
            // Disable foreign key checks to allow truncation
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table('provinces')->truncate();
            
            $provinces = [];
            foreach ($ilTable['data'] as $row) {
                $provinces[] = [
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            
            // Insert in chunks to avoid memory limits
            foreach (array_chunk($provinces, 100) as $chunk) {
                DB::table('provinces')->insert($chunk);
            }
        }

        // 2. Process Districts (ilce.json)
        $jsonIlce = File::get(base_path('ilce.json'));
        $dataIlce = json_decode($jsonIlce, true);

        // Find the table data
        $ilceTable = collect($dataIlce)->firstWhere('name', 'ilce');

        if ($ilceTable && isset($ilceTable['data'])) {
            $this->command->info('Seeding districts...');
            
            DB::table('districts')->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            $districts = [];
            foreach ($ilceTable['data'] as $row) {
                $districts[] = [
                    'id' => $row['id'],
                    'province_id' => $row['il_id'], // Map il_id to province_id
                    'name' => $row['name'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            foreach (array_chunk($districts, 100) as $chunk) {
                DB::table('districts')->insert($chunk);
            }
        }
        
        $this->command->info('Location seeding completed!');
    }
}
