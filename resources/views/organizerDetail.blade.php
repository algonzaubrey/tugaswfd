@extends('template.template')

@section('layout_content')

<!-- Organizer Detail Card -->
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">

    <!-- Organizer Title and Actions in Flexbox -->
    <div class="flex justify-between items-center mb-4">
        <!-- Organizer Name -->
        <h1 class="text-3xl font-bold text-black">Detail Organizer</h1>
        
        <!-- Organizer Actions (Edit, Delete, Back) -->
        <div class="flex items-center space-x-2">
            <!-- Edit Button tanpa ikon -->
            <a href="/updateOrganizer/{{$organizer->id}}" class="bg-yellow-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-yellow-600">
                Edit
            </a>

            <!-- Delete Button dengan tulisan bold -->
            <form action="/deleteOrganizer/{{$organizer->id}}" method="POST" class="inline-flex items-center">
                @csrf 
                @method("DELETE")
                <button class="bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-800">
                    Delete
                </button>
            </form>

            <!-- Back Button -->
            <a href="/organizerList" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600">
                Back
            </a>
        </div>
    </div>

    <!-- Organizer Name -->
    <h3 class="text-2xl font-semibold mb-4">{{$organizer->name}}</h3>

    <!-- Social Links -->
    <div class="mb-4">
        <p><strong>Facebook:</strong> {{$organizer->facebook_link}}</p>
        <p><strong>X:</strong> {{$organizer->x_link}}</p>
        <p><strong>Website:</strong> {{$organizer->website_link}}</p>
    </div>

    <!-- About Organizer -->
    <div class="mb-4">
        <h3 class="text-lg font-semibold">About</h3>
        <p class="text-gray-600">{{$organizer->description}}</p>
    </div>
</div>

@endsection
