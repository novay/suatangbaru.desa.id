<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $Users = [
            [
                'id'            => '1',
                'username'      => 'admin', 
                'password'      => Hash::make('admin'), 
                'email'         => 'admin@someweb.com',
                'displayName'   => 'Administrator',
                'accessLevel'   => '1',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],
			[
                'id'            => '2',
                'username'      => 'novay', 
                'password'      => Hash::make('suatangbaru123'), 
                'email'         => 'novay@about.me',
                'displayName'   => 'Novay Mawbowo',
                'accessLevel'   => '2',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],
            [
                'id'            => '3',
                'username'      => 'suatang', 
                'password'      => Hash::make('suatangbaru123'), 
                'email'         => 'novay@otaku.si',
                'displayName'   => 'Suatang Baru',
                'accessLevel'   => '2',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ]
		];
        DB::table('users')->insert($Users);
    }

}