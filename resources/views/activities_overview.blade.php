<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <a href="{{ route('activities_create') }}">Add new activity</a> 
                <table>
                    <thead>
                        <tr>
                            <th>Activity date</th>
                            <th>Duration</th>
                            <th>Record</th>
                            <th>Burned calories</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $activity)
                            <tr>
                                <td>{{ $activity->activity_date }}</td>
                                <td>{{ $activity->duration }}</td>
                                
                                @if ($activity->record == True)
                                    <td>Record achieved</td>
                                @else 
                                    <td>No record</td>
                                @endif
                                <td>{{ $activity->burned_calories }}</td>
                                
                                @if ($activity->remarks =! null)
                                    <td>{{ $activity->remarks }}</td>
                                @else
                                    <td>No remarks</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
