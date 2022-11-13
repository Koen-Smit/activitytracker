<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function create(Request $request) {
        $activity = new Activity();
        $activity->user_id = $request->user_id;
        $activity->category_id = $request->category_id;
        $activity->activity_date = $request->activity_date;
        $activity->duration = $request->duration;
        $activity->burned_calories = $request->burned_calories;
        $activity->remarks = $request->remarks;
        $activity->record = $request->record;
        $activity->save();
        return redirect()->route('activities_overview');
    }
}
