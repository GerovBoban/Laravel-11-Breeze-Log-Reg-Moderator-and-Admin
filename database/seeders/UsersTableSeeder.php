<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Gerov Boban',
                'usertype' => 'admin',
                'email' => 'bracevci@yahoo.com',
                'email_verified_at' => '2024-08-12 03:58:44',
                'password' => '$2y$12$bXmxvoXZXPQh0a8NW194P.l8WXNjb8xNvM5G9KvOn.t8aBQbeJ4ne',
                'remember_token' => NULL,
                'created_at' => '2024-08-12 04:27:17',
                'updated_at' => '2024-08-12 04:27:17',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Test User',
                'usertype' => 'user',
                'email' => 'test@example.com',
                'email_verified_at' => '2024-08-12 03:58:22',
                'password' => '$2y$12$BxeIAdegQfml5w9l1uFEruBb65hLitCNNODPaURPcfRmc0hPliOvK',
                'remember_token' => '5ygy2sZ6vD',
                'created_at' => '2024-08-12 03:58:23',
                'updated_at' => '2024-08-12 03:58:23',
            ),
        ));
        
        
    }
}