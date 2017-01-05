<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

//$factory->define(App\User::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->safeEmail,
//        'password' => bcrypt(str_random(10)),
//        'remember_token' => str_random(10),
//    ];
//});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    $getGroup = DB::table('group')->first();
    $getPosition = DB::table('position')->first();
    $getSalary = random_int(1000,4000);

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'salary' => $getSalary,
        'jiralogin'=> $faker->userName,
        'group_id' => $getGroup->id,
        'position_id' => $getPosition->id,
        'rate' => round($getSalary/172,2),
        'hired' =>$faker->date("Y-m-d H:i:s"),
        'updated' =>$faker->date("Y-m-d H:i:s"),
        'avatar' =>'img/default.png',
        'comments' => $faker->text(200),
    ];
});