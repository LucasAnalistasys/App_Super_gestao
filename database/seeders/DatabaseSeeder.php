<?php

namespace Database\Seeders;

use App\Models\User;
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

        //Para chamar apenas um seeder, basta informar no php artisan a classe a ser usada. Exemplo: php artisan db:seed --class=SiteContatoSeeder

        $this->call(FornecedorSeeder::class);
        $this->call(SiteContataoSeeder::class);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
