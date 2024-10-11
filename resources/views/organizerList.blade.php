@extends('template.template')

@section('layout_content')

<!-- Organizer List -->
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <!-- Title -->
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Organizer List</h1>
        <a href="/createOrganizer" class="bg-green-400 text-white px-4 py-2 rounded-lg hover:bg-gray-700">+ Create</a>
    </div>

    <!-- Table -->
    <table class="table-auto w-full text-left">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">Organizer Name</th>
                <th class="px-4 py-2">About</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($organizers as $index => $organizer)
            <tr class="border-b">
                <td class="px-4 py-2">{{$index+1}}</td>
                
                <!-- Organizer Name with Link -->
                <td class="px-4 py-2">
                    <a href="/organizerDetail/{{$organizer->id}}" class="text-blue-500 hover:underline">
                        {{$organizer->name}}
                    </a>
                </td>
                
                <td class="px-4 py-2">{{$organizer->description}}</td>
                
                <td class="px-4 py-2">
                    <div class="flex items-center space-x-2">
                        <!-- Tombol Edit -->
                        <a href="/updateOrganizer/{{$organizer->id}}" class="flex items-center bg-yellow-400 text-white font-bold py-2 px-4 rounded-lg hover:bg-yellow-500">
                            Edit
                        </a>

                        <!-- Tombol Delete dengan tulisan bold -->
                        <form action="/deleteOrganizer/{{$organizer->id}}" method="POST" class="inline-flex items-center">
                            @csrf 
                            @method("DELETE")
                            <button class="bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-800">
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
