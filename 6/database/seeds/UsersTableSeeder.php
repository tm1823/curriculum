<?php
// ヘルパー関数Str::randomのため
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * データベース初期値設定の実行
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name' => Str::random(10),
                'email' => Str::random(10),
                'password' => bcrypt('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10),
                'password' => bcrypt('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10),
                'password' => bcrypt('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
