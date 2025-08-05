<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Device;
use App\Models\Specification;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $device = Storage::json('data.json');
        
        foreach ($device as $key => $value) {
            Device::create([
                "brand" => $value["brand"],
                "model" => $value["model"],
                // "ref_id" => $value['ref_id'],
                "image" => $value["image"],
                "price" => $value["price"],
                "condition" => $value['condition']
            ]);
        }

        $spec = Storage::json('data.json');

        foreach ($spec as $key => $value) {
            Specification::create([
                "display" => $value["specifications"]["display"],
                "processor" => $value["specifications"]["processor"],
                "ram" => $value["specifications"]["ram"],
                "storage" => $value["specifications"]["storage"],
                "camera" => $value["specifications"]["camera"],
                "battery" => $value["specifications"]["battery"],
            ]);
        }
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
