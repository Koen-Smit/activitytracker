<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('activities_store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="user_id" value="{{$user_id = auth()->user()->id;}}">
                        </div>
                        <div class="form-group">
                            <label for="">Category:</label>
                            <select name="category_id" class="form-control" id="">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" >{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Date</label>
                            <input type="date"  class="form-control" name="activity_date">
                        </div>
                        <div class="form-group">
                            <label for="">Duration</label>
                            <input type="time" class="form-control" name="duration">
                        </div>
                        <div class="form-group">
                            <label for="">Burned calories</label>
                            <input type="number" class="form-control" name="burned_calories">
                        </div>
                        <div class="form-group">
                            <label for="">Remarks</label>
                            <input type="text" class="form-control" name="remarks">
                        </div>
                        <div class="form-group">
                            <label for="">Record</label>
                            <select name="record" class="form-control" id="">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary"><input type="submit"  value="submit"></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
    