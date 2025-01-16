<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記が必要
use DateTime;//日付けを取得

class agrisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agrishops')->insert([
            'name' => '人参',
            'content' => '無農薬で作ったこだわりの人参です',
            'url' => 'https://www.free-materials.com/adm/wp-content/uploads/2017/06/adpDSC_4691.jpg',
            'price' => '300',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        DB::table('agrishops')->insert([
            'name' => 'ピーマン',
            'content' => '無農薬で作ったこだわりのピーマンです',
            'url' => 'https://www.free-materials.com/adm/wp-content/uploads/2017/06/adpDSC_4772.jpg',
            'price' => '400',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        DB::table('agrishops')->insert([
            'name' => 'パプリカ',
            'content' => '無農薬で作ったこだわりのパプリカです',
            'url' => 'https://www.free-materials.com/adm/wp-content/uploads/2021/09/0adpDSC_1614-.jpg',
            'price' => '350',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
