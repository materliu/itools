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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Tool::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->name,
//        'title' => $faker->title,
//        'description' => $faker->text,
//        'logoURL' => 'https://placeimg.com/40/40/people/1',
//        'webURL' => 'https://placeimg.com/40/40/people/1',
//        'markdownFile' => str_random(10)
//    ];
    return [
        'name' => '阿标',
        'title' => '公告研报标注平台',
        'description' => '面向人群数据专员，机器学习...',
        'logoURL' => '/images/tool/logo/abiao.png',
        'webURL' => 'http://abiao.idingfu.cn',
        'markdownFile' => '/markdown/tool/abiao.md'
    ];
});
