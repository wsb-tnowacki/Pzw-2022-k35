<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Posty;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => password_hash('test', PASSWORD_DEFAULT),
        ]); */
        //User::factory(10)->create();

        /* Posty::factory()->create([
            'tytul' => 'Tytuł z seedera2',
            'autor' => 'tester2',
            'email' => 'wew2@test.pl',
            'tresc' => 'Treść z seedera2',
        ]); */
        $this->call(PostyTableSeeder::class);
    }
}
