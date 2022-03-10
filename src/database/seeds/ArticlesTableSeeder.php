<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'id' => '1',
                'user_id' => '2',
                'title' => 'テストのタイトル',
                'summary' => 'これはテストの記事です。これはテストの記事です。これはテストの記事です。これはテストの記事です。これはテストの記事です。',
                'image' => '',
                'category_id' => '1',
                'keyword_id' => '1',
                'revue_id' => '1',
                'rating' => '',
                'release' => '公開する',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '2',
                'user_id' => '2',
                'title' => 'テストのタイトルです',
                'summary' => 'これはテストの記事です。これはテストの記事です。これはテストの記事です。これはテストの記事です。これはテストの記事です。',
                'image' => '',
                'category_id' => '2',
                'keyword_id' => '2',
                'revue_id' => '3',
                'rating' => '',
                'release' => '公開しない',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '3',
                'user_id' => '3',
                'title' => 'テストのタイトルだよ！！',
                'summary' => 'これはテストの記事です。これはテストの記事です。これはテストの記事です。これはテストの記事です。これはテストの記事です。',
                'image' => '',
                'category_id' => '5',
                'keyword_id' => '3',
                'revue_id' => '2',
                'rating' => '75%',
                'release' => '公開する',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
