<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Partner;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $files = Storage::allFiles('partners');
        Storage::delete($files);

        $files = Storage::allFiles('members');
        Storage::delete($files);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Partner::factory(10)->create();
        // Member::factory(10)->create();

    }
}
