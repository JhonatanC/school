<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class)->create([
            'name' => 'Jhonatan',
            'last_name' => 'Cortes',
            'username' => 'jhonatandev',
            'type' => 'admin',
            'email' => 'jdev@gmail.com',
            'password' => bcrypt('secret'),
            'remember_token' => bcrypt('secret')
        ]);
        factory(App\Models\User::class, 9)->create();
    }
}
