<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $id = DB::table('categories')->insertGetId(['category_name'=>'Elektronik', 'slug'=>'elektronik']);
        DB::table('categories')->insert(['category_name'=>'Bilgisayar ve Tablet', 'slug'=>'bilgisayar-tablet', 'sub_id'=>$id]);
        DB::table('categories')->insert(['category_name'=>'Tv ve Ses Sistemleri', 'slug'=>'tv-ses-sistemleri', 'sub_id'=>$id]);
        DB::table('categories')->insert(['category_name'=>'Kamera', 'slug'=>'kamera', 'sub_id'=>$id]);

        $id = DB::table('categories')->insertGetId(['category_name'=>'Kitap', 'slug'=>'kitap']);
        DB::table('categories')->insert(['category_name'=>'Edebiyat', 'slug'=>'edebiyat', 'sub_id'=>$id]);
        DB::table('categories')->insert(['category_name'=>'Cocuk', 'slug'=>'cocuk', 'sub_id'=>$id]);

        DB::table('categories')->insert(['category_name'=>'Dergi', 'slug'=>'dergi']);
        DB::table('categories')->insert(['category_name'=>'Mobilya', 'slug'=>'mobilya']);
        DB::table('categories')->insert(['category_name'=>'Dekorasyon', 'slug'=>'dekorasyon']);
        DB::table('categories')->insert(['category_name'=>'Kozmetik', 'slug'=>'kozmetik']);
        DB::table('categories')->insert(['category_name'=>'Kisisel Bakim', 'slug'=>'kisisel bakim']);
        DB::table('categories')->insert(['category_name'=>'Giyim ve Moda', 'slug'=>'giyim ve moda']);
        DB::table('categories')->insert(['category_name'=>'Anne ve Cocuk', 'slug'=>'anne ve cocuk']);
    }
}
