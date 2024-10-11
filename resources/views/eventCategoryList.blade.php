@extends('template.template')

@section('layout_content')

<!-- Event Category List -->
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <!-- Title -->
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Event Category List</h1>
        <a href="/createOrganizer" class="bg-green-400 text-white px-4 py-2 rounded-lg hover:bg-gray-700">+ Create</a>
    </div>

    <!-- Table -->
    <table class="table-auto w-full text-left">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">Event Category Name</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($event_categories as $index => $event_category)
            <tr class="border-b">
                <td class="px-4 py-2">{{$index+1}}</td>
                <td class="px-4 py-2">{{$event_category->name}}</td>
                <td class="px-4 py-2">
                    <div class="flex items-center space-x-2">
                        <!-- Tombol Edit -->
                        <a href="/updateEventCategory/{{$event_category->id}}" class="flex items-center bg-yellow-400 text-white font-bold py-2 px-4 rounded-lg hover:bg-yellow-500">
                            Edit
                        </a>

                        <!-- Tombol Delete -->
                        <form action="/deleteEventCategory/{{$event_category->id}}" method="POST" class="inline-flex items-center">
                            @csrf 
                            @method("DELETE")
                            <button class="flex items-center bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-800">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
