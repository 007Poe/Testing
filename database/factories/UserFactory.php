<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// $factory->define(App\User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//         'remember_token' => str_random(10),
//     ];
// });

$factory->define(App\ServiceType::class, function (Faker $faker) {

    return  [
        'type' => $faker->text(10),
        'description'=>$faker->text(100),
        'image' => $faker->imageUrl(),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});



$factory->define(App\Service::class, function (Faker $faker) {

    return  [
        'name' => $faker->text(10),
        'service_type_id' => $faker->numberBetween($min=1 , $max= 6),
        'description' =>$faker->text(300),
        'image' => $faker->imageUrl(),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {

    return  [
        'name' => $faker->text(10),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\SubCategory::class, function (Faker $faker) {

    return  [
        'category_id' => $faker->numberBetween($min=1 , $max= 10),
        'name' => $faker->text(10),
        'specification' => $faker->text(120),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {

    return  [
        'category_id' => $faker->numberBetween($min=1 , $max= 10),
        'sub_category_id' => $faker->numberBetween($min=1 , $max= 5),
        'name' => $faker->text(10),
        'product_code' => $faker->randomDigit,
        'model' => $faker->randomDigit, 
        'color' => "red",
        'size' => "small",
        'price' => $faker->randomDigit,      
        'specification' => $faker->text(120),
        'image' => $faker->imageUrl(),
        'description' => $faker->text(200),
        'service' => $faker->text(200),
        'sale_qty' => $faker->randomDigit,
        'qty' => $faker->randomDigit,
        'status' => "active",
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\Team::class, function (Faker $faker) {

    return  [
        'name' => $faker->text(10),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\Position::class, function (Faker $faker) {

    return  [
        'name' => $faker->text(20),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\Staff::class, function (Faker $faker) {

    return  [
        'name' => $faker->name,
        'nrc' => $faker->text(100),
        'dob' =>$faker->dateTime(),
        'image' => $faker->imageUrl(),
        'codenumber'=>$faker->text(35),
        'phonenumber'=>$faker->phonenumber,
        'address'=>$faker->address,
        'degree'=>$faker->text(30),
        'email'=>$faker->email,
        'team_id'=>$faker->numberBetween($min=1 , $max= 5),
        'position_id'=>$faker->numberBetween($min=1 , $max= 5),
        'experience'=>$faker->text(200),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\SkillType::class, function (Faker $faker) {

    return  [
        'name' => $faker->text(10),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\Skill::class, function (Faker $faker) {

    return  [
        'name' => $faker->text(10),
        'skill_type_id'  => $faker->numberBetween($min=1 , $max= 2),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\SkillStaff::class, function (Faker $faker) {

    return  [
        'skill_id' => $faker->numberBetween($min=1 , $max= 10),
        'staff_id' => $faker->numberBetween($min=1 , $max= 10),
        'percent'  => $faker->numberBetween($min=1 , $max= 100),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
