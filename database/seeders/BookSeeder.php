<?php

namespace Database\Seeders;

use App\Models\book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Book::count() == 0) {
            // Define an array of real book data
            $booksData = [
                [
                    'name' => 'To Kill a Mockingbird',
                    'category_id' => 1, // Fiction
                    'auther_id' => 1, // Harper Lee
                    'publisher_id' => 1, // J.B. Lippincott & Co.
                    'status' => 'Y',
                ],
                [
                    'name' => '1984',
                    'category_id' => 4, // Science Fiction
                    'auther_id' => 2, // George Orwell
                    'publisher_id' => 2, // Secker & Warburg
                    'status' => 'Y',
                ],
                [
                    'name' => 'The Great Gatsby',
                    'category_id' => 1, // Fiction
                    'auther_id' => 3, // F. Scott Fitzgerald
                    'publisher_id' => 3, // Charles Scribner's Sons
                    'status' => 'Y',
                ],
                [
                    'name' => 'Pride and Prejudice',
                    'category_id' => 1, // Fiction
                    'auther_id' => 4, // Jane Austen
                    'publisher_id' => 4, // T. Egerton, Whitehall
                    'status' => 'Y',
                ],
                [
                    'name' => 'The Hobbit',
                    'category_id' => 5, // Fantasy
                    'auther_id' => 5, // J.R.R. Tolkien
                    'publisher_id' => 5, // Allen & Unwin
                    'status' => 'Y',
                ],
                [
                    'name' => 'The Catcher in the Rye',
                    'category_id' => 1, // Fiction
                    'auther_id' => 6, // J.D. Salinger
                    'publisher_id' => 6, // Little, Brown and Company
                    'status' => 'Y',
                ],
                [
                    'name' => 'Lord of the Flies',
                    'category_id' => 1, // Fiction
                    'auther_id' => 7, // William Golding
                    'publisher_id' => 7, // Faber and Faber
                    'status' => 'Y',
                ],
                [
                    'name' => 'Brave New World',
                    'category_id' => 4, // Science Fiction
                    'auther_id' => 8, // Aldous Huxley
                    'publisher_id' => 8, // Chatto & Windus
                    'status' => 'Y',
                ],
                [
                    'name' => 'The Shining',
                    'category_id' => 15, // Horror
                    'auther_id' => 9, // Stephen King
                    'publisher_id' => 9, // Doubleday
                    'status' => 'Y',
                ],
                [
                    'name' => 'The Da Vinci Code',
                    'category_id' => 14, // Thriller
                    'auther_id' => 10, // Dan Brown
                    'publisher_id' => 10, // Doubleday
                    'status' => 'Y',
                ],
                [
                    'name' => 'The Girl with the Dragon Tattoo',
                    'category_id' => 14, // Thriller
                    'auther_id' => 11, // Stieg Larsson
                    'publisher_id' => 11, // Norstedts Förlag
                    'status' => 'Y',
                ],
                [
                    'name' => 'The Hunger Games',
                    'category_id' => 18, // Young Adult
                    'auther_id' => 12, // Suzanne Collins
                    'publisher_id' => 12, // Scholastic
                    'status' => 'Y',
                ],
                [
                    'name' => 'The Road',
                    'category_id' => 1, // Fiction
                    'auther_id' => 13, // Cormac McCarthy
                    'publisher_id' => 13, // Knopf
                    'status' => 'Y',
                ],
                [
                    'name' => 'The Help',
                    'category_id' => 1, // Fiction
                    'auther_id' => 14, // Kathryn Stockett
                    'publisher_id' => 14, // Amy Einhorn Books
                    'status' => 'Y',
                ],
                [
                    'name' => 'Gone with the Wind',
                    'category_id' => 1, // Fiction
                    'auther_id' => 15, // Margaret Mitchell
                    'publisher_id' => 15, // Macmillan Publishers
                    'status' => 'Y',
                ],
                [
                    'name' => 'The Alchemist',
                    'category_id' => 9, // Philosophy
                    'auther_id' => 16, // Paulo Coelho
                    'publisher_id' => 16, // HarperCollins
                    'status' => 'Y',
                ],
                [
                    'name' => 'The Hitchhiker\'s Guide to the Galaxy',
                    'category_id' => 4, // Science Fiction
                    'auther_id' => 17, // Douglas Adams
                    'publisher_id' => 17, // Pan Books
                    'status' => 'Y',
                ],
                [
                    'name' => 'The Kite Runner',
                    'category_id' => 1, // Fiction
                    'auther_id' => 18, // Khaled Hosseini
                    'publisher_id' => 18, // Riverhead Books
                    'status' => 'Y',
                ],
                [
                    'name' => 'The Chronicles of Narnia',
                    'category_id' => 5, // Fantasy
                    'auther_id' => 19, // C.S. Lewis
                    'publisher_id' => 19, // Geoffrey Bles
                    'status' => 'Y',
                ],
                [
                    'name' => 'The Lord of the Rings',
                    'category_id' => 5, // Fantasy
                    'auther_id' => 5, // J.R.R. Tolkien
                    'publisher_id' => 5, // Allen & Unwin
                    'status' => 'Y',
                ],
            ];

            // Insert the data into the books table
            Book::insert($booksData);
        }
    }
}
