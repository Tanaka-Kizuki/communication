<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\FAcades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'kizuki',
            'title' => 'シーディング',
            'message' => 'シーディングテストを実施',
        ];
        DB::table('posts') -> insert($param);
    }
}
