<?php

use Illuminate\Database\Seeder;

class r_CourseTeacherSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses=\App\Course::all();
        foreach ($courses as $course)
            $course->teachers()->attach(1);
    }
}
