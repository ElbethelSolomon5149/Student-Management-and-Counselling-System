<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('user_types')->insert([
            'user_type' =>'student',
        ]);
        DB::table('user_types')->insert([
            'user_type' =>'teacher',
        ]);
        DB::table('user_types')->insert([
            'user_type' =>'conciliar',
        ]);
        DB::table('user_types')->insert([
            'user_type' =>'family',
        ]);
        DB::table('user_types')->insert([
            'id'=>100,
            'user_type' =>'admin',
        ]);

        DB::table('users')->insert([
            'name' =>'Roza Halefom',
            'email' =>'solegech37@gmail.com',
            'password' =>bcrypt('password'),
            'user_type_id' =>100,
        ]);
        DB::table('users')->insert([
            'name' =>'Studnet Name',
            'email' =>'studnet@gmail.com',
            'password' =>bcrypt('password'),
            'user_type_id' =>1,
        ]);

        DB::table('grades')->insert([
                     'grade' =>'1',
        ]);
        DB::table('grades')->insert([
            'grade' =>'2',
]);
DB::table('grades')->insert([
    'grade' =>'3',
]);
DB::table('grades')->insert([
    'grade' =>'4',
]);
DB::table('grades')->insert([
    'grade' =>'5',
]);
DB::table('grades')->insert([
    'grade' =>'6',
]);
DB::table('grades')->insert([
    'grade' =>'7',
]);
DB::table('grades')->insert([
    'grade' =>'8',
]);
DB::table('grades')->insert([
    'grade' =>'9',
]);
DB::table('grades')->insert([
    'grade' =>'10',
]);
DB::table('grades')->insert([
    'grade' =>'11',
]);
DB::table('grades')->insert([
    'grade' =>'12',
]);
DB::table('subjects')->insert([
    'subject_name' =>'English',
]);
DB::table('subjects')->insert([
    'subject_name' =>'Mathematics',
]);
DB::table('subjects')->insert([
    'subject_name' =>'Physics',
]);
DB::table('subjects')->insert([
    'subject_name' =>'Chemistry',
]);
DB::table('subjects')->insert([
    'subject_name' =>'Discipline',
]);




}
}
