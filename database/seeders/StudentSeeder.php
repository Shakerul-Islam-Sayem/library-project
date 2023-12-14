<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Student::count() == 0) {
            // Define an array of sample student data
            $studentsData = [
                [
                    'name' => 'Tahmid Rahman',
                    'dob' => '1995-03-12',
                    'gender' => 'male',
                    'email' => 'tahmid.rahman@example.com',
                    'phone' => '123-456-7890',
                    'address' => '123 Main St, Dhaka',
                    'department' => 'Computer Science',
                ],
                [
                    'name' => 'Ayesha Ahmed',
                    'dob' => '1998-07-25',
                    'gender' => 'female',
                    'email' => 'ayesha.ahmed@example.com',
                    'phone' => '987-654-3210',
                    'address' => '456 Side St, Chittagong',
                    'department' => 'Electrical Engineering',
                ],
                [
                    'name' => 'Saeed Khan',
                    'dob' => '1993-11-08',
                    'gender' => 'male',
                    'email' => 'saeed.khan@example.com',
                    'phone' => '234-567-8901',
                    'address' => '789 New Rd, Khulna',
                    'department' => 'Mechanical Engineering',
                ],
                [
                    'name' => 'Nadia Islam',
                    'dob' => '1997-05-20',
                    'gender' => 'female',
                    'email' => 'nadia.islam@example.com',
                    'phone' => '345-678-9012',
                    'address' => '101 College Avenue, Rajshahi',
                    'department' => 'Physics',
                ],
                [
                    'name' => 'Abdul Rahman',
                    'dob' => '1994-09-15',
                    'gender' => 'male',
                    'email' => 'abdul.rahman@example.com',
                    'phone' => '876-543-2109',
                    'address' => '23 Park Road, Barisal',
                    'department' => 'Chemistry',
                ],
                [
                    'name' => 'Sara Ahmed',
                    'dob' => '1996-02-28',
                    'gender' => 'female',
                    'email' => 'sara.ahmed@example.com',
                    'phone' => '567-890-1234',
                    'address' => '505 Main Street, Sylhet',
                    'department' => 'Mathematics',
                ],
                [
                    'name' => 'Imran Hussain',
                    'dob' => '1992-12-05',
                    'gender' => 'male',
                    'email' => 'imran.hussain@example.com',
                    'phone' => '678-901-2345',
                    'address' => '89 Riverside Avenue, Rangpur',
                    'department' => 'Biology',
                ],
                [
                    'name' => 'Fatima Khan',
                    'dob' => '1999-04-18',
                    'gender' => 'female',
                    'email' => 'fatima.khan@example.com',
                    'phone' => '123-789-4560',
                    'address' => '777 Hillside Lane, Mymensingh',
                    'department' => 'Economics',
                ],
                [
                    'name' => 'Rahim Ali',
                    'dob' => '1991-08-10',
                    'gender' => 'male',
                    'email' => 'rahim.ali@example.com',
                    'phone' => '876-543-2109',
                    'address' => '11 Lakeview Drive, Comilla',
                    'department' => 'Civil Engineering',
                ],
                [
                    'name' => 'Laila Rahman',
                    'dob' => '1998-01-25',
                    'gender' => 'female',
                    'email' => 'laila.rahman@example.com',
                    'phone' => '234-567-8901',
                    'address' => '45 Garden Street, Narayanganj',
                    'department' => 'Political Science',
                ],
                [
                    'name' => 'Kamal Ahmed',
                    'dob' => '1993-06-30',
                    'gender' => 'male',
                    'email' => 'kamal.ahmed@example.com',
                    'phone' => '345-678-9012',
                    'address' => '678 Oak Avenue, Jessore',
                    'department' => 'Electrical Engineering',
                ],
                [
                    'name' => 'Nadia Rahman',
                    'dob' => '1996-09-05',
                    'gender' => 'female',
                    'email' => 'nadia.rahman@example.com',
                    'phone' => '456-789-0123',
                    'address' => '101 Pine Street, Gazipur',
                    'department' => 'Mechanical Engineering',
                ],
                [
                    'name' => 'Rahman Khan',
                    'dob' => '1994-02-20',
                    'gender' => 'male',
                    'email' => 'rahman.khan@example.com',
                    'phone' => '567-890-1234',
                    'address' => '55 Maple Lane, Bogura',
                    'department' => 'Computer Science',
                ],
                [
                    'name' => 'Fariha Akhtar',
                    'dob' => '1997-07-15',
                    'gender' => 'female',
                    'email' => 'fariha.akhtar@example.com',
                    'phone' => '678-901-2345',
                    'address' => '99 Walnut Street, Kushtia',
                    'department' => 'Chemical Engineering',
                ],
                [
                    'name' => 'Sajid Ali',
                    'dob' => '1995-12-10',
                    'gender' => 'male',
                    'email' => 'sajid.ali@example.com',
                    'phone' => '789-012-3456',
                    'address' => '34 Birch Road, Feni',
                    'department' => 'Physics',
                ],
                [
                    'name' => 'Samina Akhtar',
                    'dob' => '1990-05-25',
                    'gender' => 'female',
                    'email' => 'samina.akhtar@example.com',
                    'phone' => '890-123-4567',
                    'address' => '22 Cedar Street, Satkhira',
                    'department' => 'Biology',
                ],
                [
                    'name' => 'Arif Hossain',
                    'dob' => '1992-10-08',
                    'gender' => 'male',
                    'email' => 'arif.hossain@example.com',
                    'phone' => '901-234-5678',
                    'address' => '777 Elm Lane, Chapai Nawabganj',
                    'department' => 'Mathematics',
                ],
                [
                    'name' => 'Shabnam Khan',
                    'dob' => '1998-03-18',
                    'gender' => 'female',
                    'email' => 'shabnam.khan@example.com',
                    'phone' => '234-567-8901',
                    'address' => '123 Oak Street, Pabna',
                    'department' => 'Economics',
                ],
                [
                    'name' => 'Sohel Ahmed',
                    'dob' => '1996-06-12',
                    'gender' => 'male',
                    'email' => 'sohel.ahmed@example.com',
                    'phone' => '345-678-9012',
                    'address' => '456 Maple Avenue, Narail',
                    'department' => 'Political Science',
                ],
                [
                    'name' => 'Farida Begum',
                    'dob' => '1991-09-25',
                    'gender' => 'female',
                    'email' => 'farida.begum@example.com',
                    'phone' => '567-890-1234',
                    'address' => '789 Pine Lane, Bagerhat',
                    'department' => 'Civil Engineering',
                ],
                [
                    'name' => 'Rafiul Islam',
                    'dob' => '1994-02-28',
                    'gender' => 'male',
                    'email' => 'rafiul.islam@example.com',
                    'phone' => '678-901-2345',
                    'address' => '101 Cedar Avenue, Tangail',
                    'department' => 'Chemistry',
                ],
                [
                    'name' => 'Farzana Akter',
                    'dob' => '1997-07-05',
                    'gender' => 'female',
                    'email' => 'farzana.akter@example.com',
                    'phone' => '789-012-3456',
                    'address' => '45 Elm Road, Joypurhat',
                    'department' => 'Electrical Engineering',
                ],
                [
                    'name' => 'Rajib Hossain',
                    'dob' => '1993-12-20',
                    'gender' => 'male',
                    'email' => 'rajib.hossain@example.com',
                    'phone' => '890-123-4567',
                    'address' => '55 Oak Lane, Magura',
                    'department' => 'Mechanical Engineering',
                ],
                [
                    'name' => 'Nusrat Khan',
                    'dob' => '1995-05-15',
                    'gender' => 'female',
                    'email' => 'nusrat.khan@example.com',
                    'phone' => '901-234-5678',
                    'address' => '33 Pine Street, Gazipur',
                    'department' => 'Computer Science',
                ],
            ];

            // Insert the data into the students table
            Student::insert($studentsData);
        }
    }
}
