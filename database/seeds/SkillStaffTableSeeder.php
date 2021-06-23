<?php

use Illuminate\Database\Seeder;

class SkillStaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SkillStaff::class, 100)->create();
    }
}
