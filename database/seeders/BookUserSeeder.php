<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class BookUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete all data
        DB::table('book_user')->truncate();

        //get data books and users
        $books = \App\Models\Book::all();
        $users = \App\Models\User::all();

        //insert to table book_user 
        foreach($users as $user){
            $user->books()->attach($books->random(rand(1, 5))->pluck('id')->toArray()); //each user have many books
        }
    }
}
