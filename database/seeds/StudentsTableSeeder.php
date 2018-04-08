<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 调用模型工厂 生成10000条数据
        factory(App\Student::class,10000)->create();
    }
}
