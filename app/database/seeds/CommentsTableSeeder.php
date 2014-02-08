<?php

class CommentsTableSeeder extends Seeder {

    public function run()
    {
        $Comments = [
            [
                'id'            => '1',
                'articleId'     => '1', 
                'name'          => 'Komentator 1', 
                'email'         => 'someone@someweb.com',
                'content'       => 'Hi, My name is comment, nice to meet you.',
                'approved'      => '1',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],
            [
                'id'            => '2',
                'articleId'     => '1', 
                'name'          => 'Komentator 2', 
                'email'         => 'someone@someweb.com',
                'content'       => 'Hi, you can delete me for free.',
                'approved'      => '1',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],
            [
                'id'            => '3',
                'articleId'     => '1', 
                'name'          => 'Komentator 3', 
                'email'         => 'someone@someweb.com',
                'content'       => 'Sadly, i am unapproved comments. I just wanna die.',
                'approved'      => NULL,
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],
            [
                'id'            => '4',
                'articleId'     => '2', 
                'name'          => 'Komentator', 
                'email'         => 'someone@someweb.com',
                'content'       => 'Oke, i am back again, it is my second comment. Just delete me if you want',
                'approved'      => '1',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],

		];
        DB::table('comments')->insert($Comments);
    }

}