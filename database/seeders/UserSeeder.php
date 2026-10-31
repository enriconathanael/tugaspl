<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userTeacherEmail = 'richardd@ski.sch.id';
        $userStudentEmail = 'andi@ski.sch.id';
        User::updateOrCreate(
            ['email' => $userTeacherEmail],
            [
                'name' => 'Richard Marcell',
                'password' => bcrypt('password'),
                'role' => 'teacher'
            
            ]
        );



        User::updateOrCreate(
            ['email' => $userStudentEmail],
            [
                'name' => 'Richard Marcell',
                'password' => bcrypt('password'),
                'role' => 'student'
            
            ]
        );
    }
}
