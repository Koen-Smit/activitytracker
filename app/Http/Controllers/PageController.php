<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Category;

class PageController extends Controller
{
    public function activities() {
        $categories = Category::all();
        $activities = Activity::where('user_id',auth()->user()->id)->get();
        return view('activities_overview',[
            'categories' => $categories,
            'activities' => $activities
        ]);
    }
    public function create() {
        $categories = Category::all();
        return view('activities_create',[
            'categories' => $categories
        ]);
}

}
