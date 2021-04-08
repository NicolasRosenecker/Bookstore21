<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book;
        $book->title = 'Herr der Ringe';
        $book->isbn = '89461241867';
        $book->subtitle = 'lasdjflökasjdfo jaosöldf';
        $book->rating = '6';
        $book->description = 'asdlkjfhjöksaldd hfkjlahsjdfök lkahasdfklhasklj fkjasdh hdsalkh';
        $book->published = new DateTime();

        // first user
        $user = \App\Models\User::all()->first();
        $book->user()->associate($user);

        $book->save();

        $image1 = new \App\Models\Image;
        $image1->title = 'Bild 1';
        $image1->url = 'https://images-na.ssl-images-amazon.com/images/I/61h+nIJyVFL._SY344_BO1,204,203,200_.jpg';

        $image2 = new \App\Models\Image;
        $image2->title = 'Bild 2';
        $image2->url = 'https://images-na.ssl-images-amazon.com/images/I/61h+nIJyVFL._SY344_BO1,204,203,200_.jpg';

        $book->images()->saveMany([$image1, $image2]);

        // test authors
        $authors = \App\Models\Author::all()->pluck('id');
        $book->authors()->sync($authors);

        $book->save();

    }
}
