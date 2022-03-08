<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $body = $faker->sentence();
        $rating = $faker->numberBetween($min = 0, $max = 5);
        $user_id = User::isUser()->inRandomOrder()->first()->id;

        $attr = [
            'body' => $body,
            'rating' => $rating,
            'user_id' => $user_id
        ];

        $book = Book::find(1);
        $book->reviews()->create($attr);

    }
}
