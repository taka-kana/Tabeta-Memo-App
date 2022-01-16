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
                'user_id' => '1',
                'title' => 'テストのタイトル',
                'summary' => 'これはテストの記事です。これはテストの記事です。これはテストの記事です。これはテストの記事です。これはテストの記事です。',
                'image' => 'test-image1.jpeg',
                'category_id' => '1',
                'keyword_id' => '1',
                'revue_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '2',
                'user_id' => '2',
                'title' => 'テストのタイトルです',
                'summary' => 'これはテストの記事です。これはテストの記事です。これはテストの記事です。これはテストの記事です。これはテストの記事です。',
                'image' => 'test-image2.jpeg',
                'category_id' => '2',
                'keyword_id' => '2',
                'revue_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '3',
                'user_id' => '1',
                'title' => 'テストのタイトルだよ！！',
                'summary' => 'これはテストの記事です。これはテストの記事です。これはテストの記事です。これはテストの記事です。これはテストの記事です。',
                'image' => 'test-image3.jpeg',
                'category_id' => '5',
                'keyword_id' => '3',
                'revue_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
