<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(SubCategoryTableSeeder::class);

        $this->call(ServiceTypeTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(ProductTableSeeder::class);

        $this->call(PositionTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(StaffTableSeeder::class);

        $this->call(SkillTypeTableSeeder::class);
        $this->call(SkillTableSeeder::class);
        $this->call(SkillStaffTableSeeder::class);
    }
}
