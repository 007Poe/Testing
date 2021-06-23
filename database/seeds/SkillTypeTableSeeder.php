<?php

use Illuminate\Database\Seeder;

class SkillTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SkillType::class, 5)->create();
    }
}
