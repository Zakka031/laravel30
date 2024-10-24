<?php

namespace Database\Seeders;

<<<<<<< HEAD
=======
use App\Models\Job;
use App\Models\User;
>>>>>>> 90dab3a (laptop kapot gegaan probeer nu alles over te zetten klein beetje over gekopieerd om mezelf omhoog te helpen snap het wel)
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
=======
        User::factory()->create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'test@example.com',
        ]);

        $this->call(JobSeeder::class);
>>>>>>> 90dab3a (laptop kapot gegaan probeer nu alles over te zetten klein beetje over gekopieerd om mezelf omhoog te helpen snap het wel)
    }
}
