<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /* Listing::create([
            'title' => 'Laravel senior developer',
            'tags' => 'laravel,php,backend',
            'company' => 'Acme Corp',
            'location' => 'Remote',
            'email' => 'email@gmail.com',
            'website' => 'https://acme.com',
            'description' => 'This is a test job description.'
        ]);

        Listing::create([
            'title' => 'Laravel junior developer',
            'tags' => 'laravel,php,backend',
            'company' => 'Acme Corp',
            'location' => 'Remote',
            'email' => 'email2@gmail.com',
            'website' => 'https://acme.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl quis aliquam ultricies, nunc nisl aliquet nunc, quis aliquam'
        ]); */
    }
}
