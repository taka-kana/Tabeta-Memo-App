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
                'title' => 'パンプキンスープ',
                'summary' => '子供が離乳食の時から作っているスープ。大体いつも完食してくれる。翌日は便通も○のため便秘の時に作る。',
                'image' => '',
                'category_id' => '1',
                'keyword_id' => '1',
                'revue_id' => '1',
                'rating' => '',
                'release' => '公開する',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
