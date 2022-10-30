<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [ 'name' =>'backend' , 'price' => 6000 , 'description' => '6 months course' , 'image' =>'backend.png' ] ,
            [ 'name' =>'frontEnd' , 'price' => 3000 , 'description' => '4 months course' , 'image' =>'frontend.png' ] ,
            [ 'name' =>'MobileApp' , 'price' => 4000 , 'description' => '5 months course' , 'image' =>'mobile.png' ] ,
        ];

        foreach ($courses as $course){
            Course::create([
                'name' => $course['name'] ,
                'price' => $course['price'] ,
                'description' => $course['description'] ,
                'image' => $course['image'] ,
            ]);
        }
    }
}
