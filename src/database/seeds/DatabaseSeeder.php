<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 外部キー制約を一度解除
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call([
            UsersTableSeeder::class,
            KeywordsTableSeeder::class,
            CategoriesTableSeeder::class,
            RevuesTableSeeder::class,
            ArticlesTableSeeder::class,
        ]);
        
        // 外部キー制約を再設定
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
