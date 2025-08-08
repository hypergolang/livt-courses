<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class CourseController extends Controller
{
    public function index()
    {
        return Inertia::render('Courses/Index/Index');
    }

    public function create(User $user)
    {
        $new_course = new Course();
        $new_course->user_id = $user->id;
        $new_course->name = 'New Course Name';
        $new_course->description = 'New Course Description';
        $new_course->save();

        return Redirect()->back()->with('flash.banner', 'Course created successfully');
    }
}
