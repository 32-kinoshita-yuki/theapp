<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BlogInfluencer;
use Faker\Generator as Faker;

$factory->define(BlogInfluencer::class, function (Faker $faker) {
    return [
        'title' => $faker->word, //1単語英語の単語を生成してくれる
        'body' => $faker->realTexit //小説の文章をランダムでいれてくれる
    ];
});
