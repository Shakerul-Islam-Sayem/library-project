<?php

namespace Database\Seeders;

use App\Models\publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Publisher::count() == 0) {
            // Define an array of real publisher names
            $publishersData = [
                ['name' => 'Penguin Random House'],
                ['name' => 'HarperCollins'],
                ['name' => 'Simon & Schuster'],
                ['name' => 'Hachette Livre'],
                ['name' => 'Macmillan Publishers'],
                ['name' => 'Wiley'],
                ['name' => 'Pearson'],
                ['name' => 'Oxford University Press'],
                ['name' => 'Cambridge University Press'],
                ['name' => 'Scholastic'],
                ['name' => 'Bloomsbury Publishing'],
                ['name' => 'Harvard University Press'],
                ['name' => 'MIT Press'],
                ['name' => 'National Geographic'],
                ['name' => 'Springer'],
                ['name' => 'Elsevier'],
                ['name' => 'Johns Hopkins University Press'],
                ['name' => 'Palgrave Macmillan'],
                ['name' => 'Addison-Wesley'],
                ['name' => 'Routledge'],
                ['name' => 'SAGE Publications'],
                ['name' => 'Farrar, Straus and Giroux'],
                ['name' => 'W.W. Norton & Company'],
                ['name' => 'Random House'],
                ['name' => 'Vintage Books'],
                ['name' => 'Doubleday'],
                ['name' => 'Crown Publishing Group'],
                ['name' => 'Knopf Doubleday Publishing Group'],
                ['name' => 'Alfred A. Knopf'],
            ];

            // Insert the data into the publishers table
            Publisher::insert($publishersData);
        }
    }
}
