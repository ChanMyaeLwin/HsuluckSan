<?php

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
        factory(App\Tickets::class, 200)->create();
        // $this->call(CreateUserSeeder::class);
        // $this->call(PermissionTableSeeder::class);

    }
}
