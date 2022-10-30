<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
           'name'=> 'abdelmonem' ,
           'description' => 'Programming teacher' ,
            'image' => 'abdelmonem.png' ,
            'course_id' => '1'
        ]);
    }
}
