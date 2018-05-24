<?php

namespace App\Http\Controllers;

use App\Trade;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TradeController extends Controller
{

    public function index(){
        $trades = Trade::with('instrument')
            ->whereUserId(auth()->user()->id)
            ->latest()
            ->paginate(20);


        return view('trades.index' , compact('trades'));

    }

    public function datatable(){

        $trades = Trade::with('instrument')
            ->whereUserId(auth()->user()->id)
            ->latest();


        return DataTables::of($trades)->make(true);

    }
    /*public function show(Course $course){
        $course->load([
            'category' => function($q){
                $q->select('id' , 'name');
            },
            'goals' => function($q){
                $q->select('id' , 'course_id' , 'goal');
            },
            'level' => function($q){
                $q->select('id' , 'name');
            },
            'requirements' => function($q){
                $q->select('id' , 'course_id', 'requirement');
            },
            'reviews.user',
            'teacher'
        ])->get();

        $related = $course->relatedCourses();

        return view('courses.detail' , compact('course' , 'related'));

    }*/
}
